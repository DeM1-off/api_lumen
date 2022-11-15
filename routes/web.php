<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api/user'], function () use ($router) {
    $router->post('register', 'Api\AuthController@register');
    $router->post('sign-in', 'Api\AuthController@login');
    $router->post('recover-password', 'Api\PasswordController@generateResetToken');
    $router->post('reset', 'Api\PasswordController@resetPassword');

    $router->group(['middleware' => 'auth'], function ($router) {
        $router->post('companies', 'Api\CompanyController@createCompany');
        $router->get('companies', 'Api\CompanyController@getUserCompany');
    });
});
