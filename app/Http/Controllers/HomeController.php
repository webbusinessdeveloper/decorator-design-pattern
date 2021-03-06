<?php namespace App\Http\Controllers;


use App\Beverages\DecafCoffee;
use App\CoffeeShopAppDecoratorPattern\AddOn;
use App\CoffeeShopAppDecoratorPattern\Beverage;
use App\CoffeeShopAppDecoratorPattern\DescriptionSheet;
use App\CoffeeShopAppDecoratorPattern\PriceSheet;
use App\CoffeeShopAppDecoratorPattern\SizeSheet;
use App\Providers\kevinProvider;
use Illuminate\Container\Container;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\App;
use Symfony\Component\Yaml\Tests\B;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	$router->get('/', 'HomeController@showWelcome');
	|
	*/


	public function index()
	{
		$c = new Beverage('espresso', 'large');
		$d = new AddOn('soyMilk', $c);
		$e = new AddOn('mocha', $d);
		$f = new AddOn('cream', $e);
		$g = new AddOn('soyMilk', $f);
		dd($g->getDescription().' '. $g->cost());





	}

}

