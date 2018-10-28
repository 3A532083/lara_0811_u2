<?php



Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', ['as'=>'home.index', 'uses'=>'HomeController@index']);

Route::get('say/{name?}', ['as' => 'hello.index', function($name = 'Everybody') {
    return 'Hello, '.$name;
}]);

Route::get('dashboard', function() {
    return 'dashboard';
});

Route::group(['prefix'=>'admin'], function () {
    Route::get('dashboard', function () {
        return 'admin dashboard';
    });
});