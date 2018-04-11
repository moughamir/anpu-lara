<?php

use MongoDB\Client as Mongo;
use Illuminate\Http\Request;

Auth::routes();
//Homepage
Route::get('/', function () {
    $articles = \Anpu\Article::all();
    return view('welcome', ['articles' => $articles]);
});

Route::get('/home', 'HomeController@index')->name('home');
//Shops
Route::get('shops', function(Request $request){
    $collection = (new Mongo)->shops->shops;
    return $collection->find()->toArray();
});
//links
Route::get('/l', function(){
    $links = \Anpu\Link::all();
    return view('link', ['links' => $links]);
});

Route::get('/submit', function () {
    return view('submit');
});

Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

    $link = tap(new Anpu\Link($data))->save();

    return redirect('/l');
});

// Tutorials
Route::get('/new', function () {
    return view('addTutorial');
});