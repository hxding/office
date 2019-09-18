<?php

use Illuminate\Routing\Router;
//use App\Aadmin\Controllers\CustomerControllser;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    $router->resource('customer', CustomerController::class);
        
    $router->resource('cities', CitieController::class);

    $router->resource('countries', CountrieController::class);

    $router->resource('provinces', ProvinceController::class);

    $router->resource('customer-banks', CustomerBankController::class);

    $router->resource('chartjs', ChartjsController::class);

});
