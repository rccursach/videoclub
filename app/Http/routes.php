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

/**
 * Routes for resource director
 */
$app->get('director', 'DirectorsController@all');
$app->get('director/{id}', 'DirectorsController@get');
$app->post('director', 'DirectorsController@add');
$app->put('director/{id}', 'DirectorsController@put');
$app->delete('director/{id}', 'DirectorsController@remove');

/**
 * Routes for resource client
 */
$app->get('client', 'ClientsController@all');
$app->get('client/{id}', 'ClientsController@get');
$app->post('client', 'ClientsController@add');
$app->put('client/{id}', 'ClientsController@put');
$app->delete('client/{id}', 'ClientsController@remove');

/**
 * Routes for resource genre
 */
$app->get('genre', 'GenresController@all');
$app->get('genre/{id}', 'GenresController@get');
$app->post('genre', 'GenresController@add');
$app->put('genre/{id}', 'GenresController@put');
$app->delete('genre/{id}', 'GenresController@remove');

/**
 * Routes for resource movie
 */
$app->get('movie', 'MoviesController@all');
$app->get('movie/{id}', 'MoviesController@get');
$app->post('movie', 'MoviesController@add');
$app->put('movie/{id}', 'MoviesController@put');
$app->delete('movie/{id}', 'MoviesController@remove');

/**
 * Routes for resource rent
 */
$app->get('rent', 'RentsController@all');
$app->get('rent/{id}', 'RentsController@get');
$app->post('rent', 'RentsController@add');
$app->put('rent/{id}', 'RentsController@put');
$app->delete('rent/{id}', 'RentsController@remove');
