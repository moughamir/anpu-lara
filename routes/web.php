<?php

use MongoDB\Client as Mongo;

Route::get('/', function () {
    $articles = \Anpu\Article::all();
    return view('welcome', ['articles' => $articles]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('shops', function(Request $request){
    $collection = (new Mongo)->shops->shops;
    return $collection->find()->toArray();
});

Route::get('/l', function(){
    $links = \Anpu\Link::all();
    return view('link', ['links' => $links]);
});

Route::get('/submit', function(){
    return view('submit');
});