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

$app->get('/', function () use ($app) {
    //return $app->version();
    return view('base');
});

$app->get('/partials/{resource}/{action}', function ($resource, $action) {
    return view("/partials/$resource/$action");
});

/**
 * Routes for resource director
 */
$app->get('api/v1/directors', 'DirectorsController@all');
$app->get('api/v1/directors/{id}', 'DirectorsController@get');
$app->post('api/v1/directors', 'DirectorsController@add');
$app->put('api/v1/directors/{id}', 'DirectorsController@put');
$app->delete('api/v1/directors/{id}', 'DirectorsController@remove');

/**
 * Routes for resource client
 */
$app->get('api/v1/clients', 'ClientsController@all');
$app->get('api/v1/clients/{id}', 'ClientsController@get');
$app->post('api/v1/clients', 'ClientsController@add');
$app->put('api/v1/clients/{id}', 'ClientsController@put');
$app->delete('api/v1/clients/{id}', 'ClientsController@remove');

/**
 * Routes for resource genre
 */
$app->get('api/v1/genres', 'GenresController@all');
$app->get('api/v1/genres/{id}', 'GenresController@get');
$app->post('api/v1/genres', 'GenresController@add');
$app->put('api/v1/genres/{id}', 'GenresController@put');
$app->delete('api/v1/genres/{id}', 'GenresController@remove');

/**
 * Routes for resource movie
 */
$app->get('api/v1/movies', 'MoviesController@all');
$app->get('api/v1/movies/{id}', 'MoviesController@get');
$app->post('api/v1/movies', 'MoviesController@add');
$app->put('api/v1/movies/{id}', 'MoviesController@put');
$app->delete('api/v1/movies/{id}', 'MoviesController@remove');

/**
 * Routes for resource rent
 */
$app->get('api/v1/rents', 'RentsController@all');
$app->get('api/v1/rents/{id}', 'RentsController@get');
$app->post('api/v1/rents', 'RentsController@add');
$app->put('api/v1/rents/{id}', 'RentsController@put');
$app->delete('api/v1/rents/{id}', 'RentsController@remove');
