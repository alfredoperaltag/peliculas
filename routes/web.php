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
    return "Hola Mundo";
});
$router->get('peliculas', 'PeliculasController@index');

$router->get('peliculas/{id}', 'PeliculasController@show');

$router->post('peliculas', 'PeliculasController@create');

$router->put('peliculas/{id}', 'PeliculasController@update');

$router->delete('peliculas/{id}', 'PeliculasController@delete');

/**
 * Routes for resource alumnos
 */
$router->get('alumnos', 'AlumnosController@all');
$router->get('alumnos/{id}', 'AlumnosController@get');
$router->post('alumnos', 'AlumnosController@add');
$router->put('alumnos/{id}', 'AlumnosController@put');
$router->delete('alumnos/{id}', 'AlumnosController@remove');
