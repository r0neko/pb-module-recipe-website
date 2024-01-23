<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', [
    'as' => 'website.home',
    'uses' => 'WebsiteController@index'
]);

$router->get('/tips', [
    'as' => 'website.tips',
    'uses' => 'WebsiteController@tips'
]);

$router->get('/about', [
    'as' => 'website.about',
    'uses' => 'WebsiteController@about'
]);

$router->get('/recipe/{id}', [
    'as' => 'website.recipe',
    'uses' => 'WebsiteController@recipe'
]);

// admin

$router->get('/admin/recipes', [
    'as' => 'cms.recipes',
    'uses' => 'Admin\RecipeController@recipes'
]);
