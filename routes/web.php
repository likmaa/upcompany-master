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

Route::get('/', 'PagesController@home')->name('home');

Route::get('/a-propos' ,'PagesController@apropos')->name('a-propos');

// SERVICES PAGES ROUTE

Route::get('/service/systeme-autonome-hybride-raccorde','PagesController@autonome')->name('autonome');

Route::get('/service/photovoltaique-pme-pmi' ,'PagesController@pme')->name('pme');

Route::get('/service/photovoltaique-exploitations-agricole', 'PagesController@exploitations')->name('exploitations');


// OFFRES PAGES ROUTE

Route::get('/offre/electrification-rurale','PagesController@rurale')->name('rurale');

Route::get('/offre/eclairage-led','PagesController@eclairage')->name('eclairage-led');

Route::get('/offre/kit-solaire-ssd','PagesController@kitSolaire')->name('kit-solaire');

Route::get('/audit-energetique','PagesController@audit')->name('audit');

Route::get('/contact','PagesController@contact')->name('contact');

Route::post('/contact','PagesController@ajaxcontat');

Route::get('/actualite/{alias}' ,'PagesController@singleArticle')->name('single-article');


// ADMIN PARTIE

Route::group(['middleware' =>['auth']],function(){

	Route::get('/admin','MainController@index')->name('dashboard');

	Route::post('/admin/abouts','AboutController@updateAbouts')->name('update-abouts');

	Route::resource('/admin/slide','SlideController');

	Route::resource('/admin/about','AboutController');

	Route::resource('/admin/service','ServiceController');

	Route::resource('/admin/offre','OffreController');

	Route::resource('/admin/produit','ProduitController');

	Route::resource('/admin/audit','AuditController');

	Route::get('/admin/article/all','ArticleController@all');
	Route::post('/admin/article/get','ArticleController@get');
	Route::post('/admin/article/search','ArticleController@search');
	Route::put('/admin/article/update','ArticleController@updateArticle');
	Route::put('/admin/article/state/{article}','ArticleController@changeState');

	Route::resource('/admin/article','ArticleController');

	Route::resource('/admin/info','InfoController');

	Route::post('/admin/media/upload','ImageController@uploadFile')->name('upload-file');

});
Auth::routes(['register' => false]);


// Route::get('/home', 'HomeController@index')->name('home');
