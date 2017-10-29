<?php
use App\Item;
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

Route::get('/', function () {
    return view('home');
});

Route::get('ste_vedeli', function () {
    return view('ste_vedeli');
});


Route::get('kontakt', function () {
    return view('kontakt');
});

Route::get('nasveti', 'AdminPostsController@posts')->name('posts');
Route::get('/nasvet/{id}', 'AdminPostsController@nasvet')->name('nasvet');








Route::get('izdelki', 'AdminItemsController@products')->name('products');

Route::get('/izdelek/{id}', 'AdminItemsController@izdelek')->name('product');
//
////Route::get('products', 'AdminItemsController@izdeleks')->name('products');
//
//Route::get('/product/{id}', 'AdminItemsController@product')->name('product');

//Route::get('/item/{id}', 'AdminItemsController@izdelek' );








//Route::get('/izdelek/{$id}', 'AdminItemsController@izdelek')->name('izdelek');

//Route::get('izdelek', 'AdminItemsController@izdelek')->name('izdelek');

Auth::routes();

Route::group(['middleware'=>'admin'], function (){


    Route::get('/admin', function (){


        return view('admin.index');
   } );


    Route::resource('admin/items','AdminItemsController', ['names'=>[

        'index'=>'admin.items.index',
        'create'=>'admin.items.create',
        'store'=>'admin.items.store',
        'edit'=>'admin.items.edit'
    ]] );

    Route::resource('admin/media', 'AdminMediasController');

    Route::resource('admin/posts','AdminPostsController', ['names'=>[

        'index'=>'admin.posts.index',
        'create'=>'admin.posts.create',
        'store'=>'admin.posts.store',
        'edit'=>'admin.posts.edit'
    ]] );






});




Route::resource('item','AdminItemsController');



