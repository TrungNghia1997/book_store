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
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function(){
	Route::get('login', 'LoginController@getLogin');	
	Route::post('login', 'LoginController@postLogin');
	Route::get('logout',  'LoginController@getLogout');
	Route::get('/search', 'SearchController@search');
});

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware' => 'isadmin'],function(){
	Route::resource('category','CategoryController');
	Route::resource('author','AuthorController');
    Route::get('/category/del/{id}', 'categoryController@delCate');
	Route::resource('user','UserController')->middleware(['can:show']);	
	Route::get('feedback','FeedbackController@index');
	Route::resource('product','ProductController');	
	Route::resource('customer','CustomerController');	
	Route::get('list','listCustomorController@index');	
	Route::get('updatelist/{id}','listCustomorController@updateListCustomer');	
	Route::post('updatelist/{id}','listCustomorController@postupdateListCustomer');	
	Route::delete('deletelist/{id}','listCustomorController@deleteListCustomer');	
	Route::resource('option','OptionController');
	
});

Route::get('/reset-password', 'Admin\PasswordResetController@index');

Route::group(['namespace'=>'Frontend'], function() {
   	Route::get('/', 'HomeController@index');
   	Route::get('/search', 'HomeController@search');
 	Route::get('/san_pham', 'ProductController@index');
 	Route::get('/san_pham_gia_tang', 'ProductController@priceasc');
 	Route::get('/san_pham_gia_giam', 'ProductController@priceDesc');
 	Route::get('/san_pham_cu', 'ProductController@shortOld');
 	Route::get('/san_pham_new', 'ProductController@index');
   	Route::get('/san_pham/{id}', 'ProductController@getProductDetail');
   	Route::get('/danh_muc/{id}', 'CategoryController@index');
   	Route::get('/dang_ky', 'RegisterController@index');
   	Route::post('/dang_ky', 'RegisterController@postRegister');
   	Route::get('/dang_nhap', 'LoginController@index');
   	Route::post('/dang_nhap', 'LoginController@postLogin');
   	Route::get('/dang_xuat', 'LoginController@getLogout');
   	Route::get('/lien_he', 'ContactController@index');
   	Route::get('/gioi_thieu', 'AboutController@index');
   	Route::get('/sale', 'HomeController@getSale');
   	Route::post('/email','ContactController@sendmail');
});

Route::group(['prefix'=>'cart','namespace'=>'Frontend'],function(){
	Route::get('/add/{id}','cartController@getAddCart');
	Route::get('/show','cartController@getshowCart');
	Route::post('/show','cartController@postshowCart');
	Route::get('/delete/{id}','cartController@getDeleteCart');
	Route::get('/deletebill/{id}','cartController@getDeletebillCart');
	Route::get('/update','cartController@getUpdateCart');
	Route::get('/bill','cartController@getbillCart');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
