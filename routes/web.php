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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'MainController@index');
Route::get('/About-us', 'AboutUsController@index');
Route::get('/Conferences', 'ConferenceController@index');
Route::get('/Journals', 'JournalsController@index');
Route::get('/Gallery', 'GalleryController@index');
Route::get('/Terms', 'TermsController@index');
Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
Route::get('/dashboard', 'AdmindashboardController@index');
Route::get('/users/profile/{id}', 'AdmindashboardController@profile');
Route::get('/users', 'UserController@index');
Route::Resource('/category','CategoryController');
Route::Resource('/item','ItemController');
});

// For Customer
Route::group(['prefix'=>'customer','middleware'=>['auth']],function(){
Route::get('/dashboard', 'CustomerdashboardController@index');
Route::get('/item', 'CustomerItemController@index');
Route::get('/store', 'CartController@index');
Route::get('/store/add/{id}', 'CartController@add');;
Route::get('/item/review/{item}', 'CustomerItemController@show');
Route::get('/wish-list', 'WishListController@index');
Route::get('/wish-list/{item}', 'WishListController@add')->name('wishlist.add');
Route::delete('/wish-list/remove/{id}', 'WishListController@destroy')->name('wishlist.destroy');
Route::Resource('/wishlist','WishListController');


});


Route::get('/home', 'HomeController@index')->name('home');
