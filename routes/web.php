<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Link-uri la care se ajunge doar daca esti admin
Route::group(['middleware' => ['isLogedInAdmin']], function () {

    Route::get('/vms-admin', 'MainAdminController@home');
    Route::get('/vms-admin/logout', 'MainAdminController@logout');

    //Categorii Blog
    Route::get('/vms-admin/blog-categories', 'BlogCategoriesController@categoriiBlog');
    Route::get('/vms-admin/sterge-categorie-blog/{id}', 'BlogCategoriesController@stergeCategorie');
    Route::match(['get', 'post'], '/vms-admin/categorie-blog/{code?}', 'BlogCategoriesController@editeazaCategorie');

    //Postari Blog
    Route::get('/vms-admin/blog-posts', 'BlogPostsController@postariBlog');
    Route::match(['get', 'post'], '/vms-admin/postare-blog/{code?}', 'BlogPostsController@editeazaPostareBlog');
    Route::get('/vms-admin/sterge-postare-blog/{code}', 'BlogPostsController@stergePostare');

    //Specii animale
    Route::get('/vms-admin/animale-specii', 'SpeciiAnimaleController@speciiAnimale');
    Route::match(['get', 'post'], '/vms-admin/animale-specie/{code?}', 'SpeciiAnimaleController@editeazaSpecieAnimal');
    Route::get('/vms-admin/sterge-animale-specie/{code}', 'SpeciiAnimaleController@stergeSpecie');

    //Rase animale

    Route::get('/vms-admin/animale-rase', 'RaseAnimaleController@raseAnimale');
    Route::match(['get', 'post'], '/vms-admin/animale-rasa/{code?}', 'RaseAnimaleController@editeazaRaseAnimal');
    Route::get('/vms-admin/sterge-animale-rasa/{code}', 'RaseAnimaleController@stergeRasa');


    /*API-uri*/

    //Specii animale
    Route::get('/api/animale-rase', 'ApiController@speciiAnimale')->name('api_specii_animale');


});

Route::get('/', 'MainController@home');

Route::match(['get', 'post'], '/vms-admin/login', 'MainAdminController@login');

Route::get('/despre-noi', 'MainController@despreNoi');
Route::get('/tarife', 'MainController@tarife');
Route::get('/contact', 'MainController@contact');

Route::get('/blog', 'MainController@blogPosts');
Route::get('/postare-blog/{code}', 'MainController@blogPostare');
