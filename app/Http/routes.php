<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use League\CommonMark\CommonMarkConverter;

Route::get('/', function () {
    $markdown        = file_get_contents(base_path('README.md'));
    $routes          = [];
    $routeCollection = Route::getRoutes();

    foreach ($routeCollection->getRoutes() as $route) {
        // If you access a route property directly (e.g. $route->uri) you will trigger a "Route is not bound." error.
        if (starts_with($route->uri(), '_')) {
            continue;
        }

        #$routes[] = $route->getName();
        #$routes[] = $route->uri();
        $routes[] = $route;
    }

    #$routes = array_unique($routes);

    return dump($routes);
    #return (new CommonMarkConverter())->convertToHtml($markdown);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::resource('device', 'DeviceController');
    Route::resource('game', 'GameController');
    Route::resource('organization', 'OrganizationController');
    Route::resource('platform', 'PlatformController');
    Route::resource('release', 'ReleaseController');
});
