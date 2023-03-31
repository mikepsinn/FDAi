<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Files\PHP;
use App\CodeGenerators\PhpUnitTestGenerator;
use App\Computers\ThisComputer;
use App\Exceptions\InvalidFilePathException;
use App\Files\FileHelper;
use App\Logging\QMLog;
use App\Types\QMStr;
use Nette\PhpGenerator\ClassType;
use Tests\QMBaseTestCase;
use Tests\UnitTestCase;
/**
 * @package App\Files\PHP
 * @mixin ClassType
 */
class UnitTestFile extends PhpClassFile {
	/**
	 * @var string
	 */
	private string $testedClass;

    /**
     * @param string $testedClass
     * @throws InvalidFilePathException
     */
	public function __construct(string $testedClass){
        $this->testedClass = $testedClass;
        $testClass = str_replace('App\\', 'Tests\\UnitTests\\Generated\\', $testedClass)."Test";
        $path = FileHelper::classToPath($testClass);
        $this->setClassName($testClass);
        parent::__construct($path);
		$this->addUse($this->getParentTestCaseClass());
		$this->addUse($testedClass);
        $this->setPath(FileHelper::classToPath($testClass));
	}
    public function getClassType(): ClassType
    {
        return (new ClassType($this->getShortClass(), $this->getPhpNamespace()))
            ->setType(ClassType::TYPE_CLASS);
    }

    /**
	 * @param string $folder
	 */
	public static function generateForFolder(string $folder){
		PhpUnitTestGenerator::generateForFolder($folder);
	}
	/**
	 * @param string $testedClass
	 * @return UnitTestFile
	 */
	public static function findOrNew(string $testedClass): UnitTestFile{
		$file = new static($testedClass);
		return $file;
	}
	/**
	 * @return string
	 */
	public function generate(): string{
		$testedFile = $this->getTestedClassFile();
		$outputPath = $this->getPath();
		try {
			ThisComputer::exec("./bin/phpunitgen $testedFile->absPath $outputPath --config tests/phpunitgen.php ");
		} catch (\Throwable $e) {
			QMLog::error(__METHOD__.": ".$e->getMessage());
		}
		return $this->logPhpStormUrl("GENERATED TEST");
	}
	/**
	 * @return string
	 */
	public function test(): string{
		return QMBaseTestCase::runTestOrClass($this->getClassName());
	}
	/**
	 * @param string $folder
	 */
	public static function generateAll(string $folder){
		$classes = PhpClassFile::get([$folder]);
		foreach($classes as $class){
			$class->generateUnitTest();
		}
	}
	/**
	 * @return PhpClassFile
	 */
	public function getTestedClassModel(): PhpClassFile{
		return PhpClassFile::find($this->getTestedClass());
	}
	/**
	 * @return string
	 */
	public function getTestedClass(): string{
		return $this->testedClass;
	}
	/**
	 * @return string
	 */
	public function getClassName(): string{
        if(isset($this->className)){
            return $this->className;
        }
		return $this->getOrGenerateNamespace() . "\\" . $this->getShortTestedClass() . "Test";
	}
	/**
	 * @return string
	 */
	protected function getShortTestedClass(): string{
		return QMStr::toShortClassName($this->getTestedClass());
	}
	/**
	 * @return string
	 */
	private function getTestedClassNamespace(): string{
		return QMStr::classToNameSpace($this->getTestedClass());
	}
	/**
	 * @return string
	 */
	private function getOrGenerateNamespace(): string{
        if(isset($this->className)){
            return QMStr::classToNameSpace($this->className);
        }
		return str_replace("TestCase", "Tests", $this->getParentTestCaseClass()) . "\\" .
			QMStr::after("App\\", $this->getTestedClassNamespace());
	}
	/**
	 * @return string
	 */
	protected function getParentTestCaseClass(): string{
		return UnitTestCase::class;
	}
	/**
	 * @return PhpClassFile
	 */
	private function getTestedClassFile(): PhpClassFile{
		return PhpClassFile::find($this->getTestedClass());
	}
    public function save(): string
    {
        return parent::save(); // TODO: Change the autogenerated stub
    }
    /**
     * @return string
     */
    public function getRealPath(): string{
        $class = $this->getClassName();
        return FileHelper::classToPath($class);
    }

    public function deleteMethod(string $method): self
    {
        return $this->removeMethod($method);
    }
}
