<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Storage\DB;
class ProductionDB extends QMDB
{
    public const CONNECTION_NAME = 'production';
    public const DB_NAME = 'qm_production';
	public const DB_USER = 'root';
    public const DB_HOST_PUBLIC = 'r5-large-cluster.cluster-corrh0fp2kuj.us-east-1.rds.amazonaws.com';
    public const DB_HOST_PRIVATE = null;
    public const DB_PORT = 3306;
	public static function getConnectionName(): string{return static::CONNECTION_NAME;}
protected static function getDBDriverName():string{return 'mysql';}
	public static function getDefaultDBName(): string{return static::DB_NAME;}
    public static function getPassword(): ?string
    {
	    $var = \App\Utils\Env::get('PRODUCTION_DB_PASSWORD');
	    return $var;
    }
    public static function copyToStaging(){
        static::copyDB(ProductionDB::class, StagingDB::class);
    }
    public static function copyTablesToStaging(string $destDBClass = StagingDB::class){
        // Copy the largest tables first, so we don't miss new users created while copying measurements
        $tables = static::copyTablesByDescendingSize($destDBClass);
        foreach($tables as $table){
            $table->compressAndUpload();
        }
    }
	public static function copyTablesToGlobalData(){
		// Copy largest tables first, so we don't miss new users created while copying measurements
		$tables = static::getTablesByDescendingSize(); // Do the largest tables first so we don't miss new users created while copying measurements
		$globalDB = GlobalDataDB::db();
		foreach($tables as $gTable){
			if($gTable->isOctoberOrWP()){continue;}
			if($gTable->getSizeInMB() > 10){
				$gTable->copyTableSchema(GlobalDataDB::class);
				$sql = "insert into ".$globalDB::getDbName().".".$gTable->getName().
				       " select * from "
				       .static::getDbName().".".$gTable->getName()." where ".static::getDbName().".".$gTable->getName().
				       ".user_id = 1";
				GlobalDataDB::disableForeignKeyConstraints();
				//$gTable->db()->statement($sql);
				GlobalDataDB::enableForeignKeyConstraints();
			} else{
				$gTable->copy(GlobalDataDB::class);
			}
		}
	}
    public static function copyTableToStaging(string $tableName){
        $table = static::getDBTable($tableName);
        $table->copy(StagingDB::class);
        $table->compressAndUpload();
    }
}
