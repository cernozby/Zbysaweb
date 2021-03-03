<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList {
	  $router = new RouteList;

    $router->withModule('public')
      ->addRoute('admin', 'Homepage:login')
      ->addRoute('', 'Homepage:default')
      ->addRoute('programator', 'Homepage:developer')
      ->addRoute('stavec', 'Homepage:routeSetter')
      ->addRoute('kontakt', 'Homepage:contact')
      ->addRoute('blog', 'Homepage:blog');

      $router->withModule('facture')
             ->addRoute('moje-udaje', 'Homepage:myAddress')
             ->addRoute('odberatele', 'Homepage:customer')
             ->addRoute('prehled', 'Homepage:default')
             ->addRoute('novy-odberatel[/<id>]', 'Homepage:newCustomer')
             ->addRoute('generovat-pdf[/<id>]', 'Homepage:generatePdf');

		return $router;
	}
}
