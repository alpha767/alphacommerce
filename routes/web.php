<?php

Route::get('/', 'content@contents');


Route::get('/login', function () {
    return view('login');
});

Route::get('/ficher-produit', 'ProduitController@ficher');

Route::get("api","Prod@index");

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/category/{id}', 'ProduitController@category')->name('category');

Route::get('/marque/{id}', 'ProduitController@marque')->name('marque');

Route::get('/changename', function () {
    return view('changename');
});
Route::post('/changePassword','CompteController@changePassword')->name('changePassword');

Route::get('/changepassword', function () {
    return view('changepassword');
});
Route::post('/changeName','NameController@changeName')->name('changeName');


Route::get('/panier', 'HomeController@panier')->name('panier');

Route::get('/produitdel/{id}', 'HomeController@produitdel')->name('produitdel');

Route::get('/search', 'SearchController@search')->name('search');

