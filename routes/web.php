<?php

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
    //return $router->app->version();
    $response = [
        'status' => 1,
        'data' => "Laravel 5.6.* Lumen 5.6.0 RESTful API created by CQS"
    ];

    return response()->json($response, 200, [], JSON_PRETTY_PRINT);
});

$router->group(['prefix' => 'api'], function($app) {
    $app->post('/cekToken', 'ApiController@cekToken');
});

$router->group(['prefix' => 'user'], function($app) {
    $app->post('/', ['middleware' => 'authorization:user,create', 'uses' => 'UserController@create']);
    $app->post('/login', 'UserController@login');
    $app->post('/logout', 'UserController@logout');
    $app->get('/{id}', ['middleware' => 'authorization:user,read', 'uses' => 'UserController@view']);
    $app->get('/', ['middleware' => 'authorization:user,read', 'uses' => 'UserController@index']);
    $app->put('/{id}', ['middleware' => 'authorization:user,update', 'uses' => 'UserController@update']);
    $app->delete('/{id}', ['middleware' => 'authorization:user,delete', 'uses' => 'UserController@delete']);
    $app->get('/me/role', ['middleware' => 'authorization:user,read', 'uses' => 'UserController@me']);
});

$router->group(['prefix' => 'action'], function($app) {
    $app->get('/', ['middleware' => 'authorization:action,read', 'uses' => 'ActionsController@index']);
});

$router->group(['prefix' => 'role'], function($app) {
    $app->post('/', ['middleware' => 'authorization:role,create', 'uses' => 'RolesController@create']);
    $app->put('/{id}', ['middleware' => 'authorization:role,update', 'uses' => 'RolesController@update']);
    $app->get('/{id}', ['middleware' => 'authorization:role,read', 'uses' => 'RolesController@view']);
    $app->delete('/{id}', ['middleware' => 'authorization:role,delete', 'uses' => 'RolesController@delete']);
    $app->get('/', ['middleware' => 'authorization:role,read', 'uses' => 'RolesController@index']);
});

$router->group(['prefix' => 'userrole'], function($app) {
    $app->post('/', ['middleware' => 'authorization:userrole,create', 'uses' => 'UserhasroleController@create']);
    $app->put('/{id}', ['middleware' => 'authorization:userrole,update', 'uses' => 'UserhasroleController@update']);
    $app->get('/{id}', ['middleware' => 'authorization:userrole,read', 'uses' => 'UserhasroleController@view']);
    $app->delete('/{id}', ['middleware' => 'authorization:userrole,delete', 'uses' => 'UserhasroleController@delete']);
    $app->get('/', ['middleware' => 'authorization:userrole,read', 'uses' => 'UserhasroleController@index']);
    $app->get('/user/{id}', ['middleware' => 'authorization:userrole,read', 'uses' => 'UserhasroleController@getByUser']);
});

$router->group(['prefix' => 'menu'], function($app) {
    $app->post('/', ['middleware' => 'authorization:menu,create', 'uses' => 'MenusController@create']);
    $app->put('/{id}', ['middleware' => 'authorization:menu,update', 'uses' => 'MenusController@update']);
    $app->get('/id/{id}', ['middleware' => 'authorization:menu,read', 'uses' => 'MenusController@view']);
    $app->delete('/{id}', ['middleware' => 'authorization:menu,delete', 'uses' => 'MenusController@delete']);
    $app->get('/', ['middleware' => 'authorization:menu,read', 'uses' => 'MenusController@index']);
    $app->get('/parent', ['middleware' => 'authorization:menu,read', 'uses' => 'MenusController@getParent']);
    $app->get('/getmenu', ['middleware' => 'authorization:menu,read', 'uses' => 'MenusController@getMenu']);
});

$router->group(['prefix' => 'rolemenu'], function($app) {
    $app->post('/setaction', ['middleware' => 'authorization:rolemenu,create', 'uses' => 'RolehasmenuController@action']);
    $app->delete('/deleteaction/{id}', ['middleware' => 'authorization:rolemenu,delete', 'uses' => 'RolehasmenuController@deleteAction']);
    $app->get('/getaction/{id}', ['middleware' => 'authorization:rolemenu,read', 'uses' => 'RolehasmenuController@getAction']);
    $app->get('/getrolemenu/{id}', ['middleware' => 'authorization:rolemenu,read', 'uses' => 'RolehasmenuController@getByRoleMenu']);
});

$router->group(['prefix' => 'route'], function($app) {
    $app->post('/', ['middleware' => 'authorization:route,create', 'uses' => 'RoutesController@create']);
    $app->put('/{id}', ['middleware' => 'authorization:route,update', 'uses' => 'RoutesController@update']);
    $app->get('/{id}', ['middleware' => 'authorization:route,read', 'uses' => 'RoutesController@view']);
    $app->delete('/{id}', ['middleware' => 'authorization:route,delete', 'uses' => 'RoutesController@delete']);
    $app->get('/', ['middleware' => 'authorization:route,read', 'uses' => 'RoutesController@index']);
});

$router->group(['prefix' => 'roleroute'], function($app) {
    $app->post('/setaction', ['middleware' => 'authorization:roleroute,create', 'uses' => 'RolehasrouteController@action']);
    $app->delete('/deleteaction/{id}', ['middleware' => 'authorization:roleroute,delete', 'uses' => 'RolehasrouteController@deleteAction']);
    $app->get('/getaction/{id}', ['middleware' => 'authorization:roleroute,read', 'uses' => 'RolehasrouteController@getAction']);
});

$router->group(['prefix' => 'unitkerja'], function($app) {
    $app->post('/', ['middleware' => 'authorization:unitkerja,create', 'uses' => 'UnitKerjaController@create']);
    $app->put('/{id}', ['middleware' => 'authorization:unitkerja,update', 'uses' => 'UnitKerjaController@update']);
    $app->get('/{id}', ['middleware' => 'authorization:unitkerja,read', 'uses' => 'UnitKerjaController@view']);
    $app->delete('/{id}', ['middleware' => 'authorization:unitkerja,delete', 'uses' => 'UnitKerjaController@delete']);
    $app->get('/', ['middleware' => 'authorization:unitkerja,read', 'uses' => 'UnitKerjaController@index']);
});

$router->group(['prefix' => 'department'], function($app) {
    $app->post('/', ['middleware' => 'authorization:unitkerja,create', 'uses' => 'DepartmentController@create']);
    $app->put('/{id}', ['middleware' => 'authorization:unitkerja,update', 'uses' => 'DepartmentController@update']);
    $app->get('/{id}', ['middleware' => 'authorization:unitkerja,read', 'uses' => 'DepartmentController@view']);
    $app->delete('/{id}', ['middleware' => 'authorization:unitkerja,delete', 'uses' => 'DepartmentController@delete']);
    $app->get('/', ['middleware' => 'authorization:unitkerja,read', 'uses' => 'DepartmentController@index']);
});
