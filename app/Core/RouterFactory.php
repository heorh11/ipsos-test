<?php

declare(strict_types=1);

namespace App\Core;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList
	{
		$router = new RouteList;

		$router->addRoute('info', 'Info:info');
		$router->addRoute('contact', 'Home:contact');
		$router->addRoute('<presenter>/<action>', 'Home:default');

		return $router;
	}
}
