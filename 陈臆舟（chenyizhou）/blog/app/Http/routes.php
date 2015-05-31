<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::post('comment/store', 'CommentsController@store');
Route::get('pages/{id}', 'PagesController@show');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function()
{
    Route::get('sousu','SousuController@index') ;
    Route::get('/', 'AdminHomeController@index');
    Route::resource('pages', 'PagesController');
    Route::get('/', function() {
        // lets get our posts and eager load the
        // author
        $pre_page = 2;//每页显示页数
        $posts = Post::with('author')->order_by('created_at', 'desc')->paginate($pre_page);//paginate($pre_page)及时查询数据时分页函数
        // show the home view, and include our
        // 向模版返回数据
        return View::make('pages.home')->with('pages', $pages);
    });
});