<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Menus\Routes;
use App\Utils\QMRoute;
class AdminRoutesMenu extends RoutesMenu {
	/**
	 * @return QMRoute[]
	 */
	public static function getRoutes(): array{
		return QMRoute::getAdminPathRoutes();
	}
}
