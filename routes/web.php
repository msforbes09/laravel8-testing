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

Route::get('/', function () {
    return view('welcome');
})->name('home');

// testing area
Route::get('/test', 'TestController@index')->name('test.index');
Route::get('/test/mail', 'TestController@mail')->name('test.mail');
Route::post('/test/mail', 'TestController@sendMail')->name('test.mail.send');
Route::get('/test/generate-pdf', 'TestController@domPDF')->name('test.domPDF');
Route::post('/test/generate-pdf', 'TestController@pdfGenerate')->name('test.pdf.generate');
Route::get('/test/image', 'TestController@image')->name('test.image');
Route::post('/test/image', 'TestController@imageUpload')->name('test.image.upload');
Route::get('/test/image/preview', 'TestController@imagePreview')->name('test.image.preview');
Route::get('/test/pusher', 'TestController@pusher')->name('test.pusher');
Route::post('/test/pusher', 'TestController@pushMessage')->name('test.push.message');
Route::get('/test/admin', 'TestController@admin')->name('test.admin');

Route::get('/admin', 'AdminController@index')->name('admin.index');

Route::get('/chat', 'ChatsController@index')->name('chat');
Route::get('/messages', 'ChatsController@fetchMessages');
Route::post('/messages', 'ChatsController@sendMessage');

Route::resource('/material', 'MaterialController');

Auth::routes();
