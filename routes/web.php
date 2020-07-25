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

Route::get('/', "FrontendController@index")->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('administration/admin')->group(function(){
    Route::get('/index', 'AdminController@index')->name('admin_index');
});

Route::prefix('administration/manager')->group(function(){
    Route::get('/index', 'ManagerController@index')->name('manager_index');
    Route::get('/categories/create','CategoriesController@create')->name('category_create');
    Route::post('/categories/store', 'CategoriesController@store')->name('category_store');
    Route::get('/categories/index', 'CategoriesController@index')->name('category_index');
    Route::get('/categories/edit/{category}', 'CategoriesController@edit')->name('category_edit');
    Route::put('/categories/update/{category}', 'CategoriesController@update')->name('category_update');
    Route::delete('/categories/delete/{category}', 'CategoriesController@destroy')->name('category_delete');

    Route::get('/dishes/create','DishesController@create')->name('dish_create');
    Route::post('/dishes/store', 'DishesController@store')->name('dish_store');
    Route::get('/dishes/index', 'DishesController@index')->name('dish_index');
    Route::post('/dishes/index', 'DishesController@index')->name('dish_index_post');
    Route::get('/dishes/edit/{dish}', 'DishesController@edit')->name('dish_edit');
    Route::get('/dishes/show/{dish}', 'DishesController@show')->name('dish_show');
    Route::put('/dishes/update/{dish}', 'DishesController@update')->name('dish_update');
    Route::delete('/dishes/delete/{dish}', 'DishesController@destroy')->name('dish_delete');

    Route::post('/contacts', "ContactsController@store")->name("contact_store");
    Route::get('/contacts/index', "ContactsController@index")->name("contact_index");
    Route::get('/contacts/show/{contact}', "ContactsController@show")->name("contact_show");
    Route::delete('/contacts/delete/{contact}', "ContactsController@destroy")->name("contact_delete");
    
    Route::get('/specials/create', 'SpecialsController@create')->name('special_create');
    Route::post('/specials/store', 'SpecialsController@store')->name('special_store');
    Route::get('/specials/index', 'SpecialsController@index')->name('special_index');
    Route::get('/specials/edit/{special}', 'SpecialsController@edit')->name('special_edit');
    Route::put('/specials/update/{special}', 'SpecialsController@update')->name('special_update');
    Route::delete('/specials/delete/{special}', 'SpecialsController@destroy')->name('special_delete');
    
});


