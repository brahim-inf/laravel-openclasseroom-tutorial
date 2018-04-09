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
});

Route::get('view1', function () {
        return view('view1');
});

//Maintenant je retourne une véritable réponse HTTP avec le code correspondant.
Route::get('/{n}', function($n) {

    return response('Je suis la page ' . $n . ' !', 200);

})->where('n', '[0-9]');

Route::get('view2/{n}', function($n){
	return view('view2', ['numero' => $n]);
});

Route::get('view/{n}', function($n){
	return view('view')->with('numero', $n);
})->where ('n', '[0-9]+');

Route::get('view/{n}', function($n){
	return view('view')->withNumero($n);
});

Route::get('article/{n}', function($n){
	return view('article')->withNumero($n);
});

Route::get('facture/{n}', function($n){
	return view('facture')->withNumero($n);
});

Route::get('mobile/{n}', function($n){
        return view('mobile')->withNumero($n);
});

Route::get('tablet/{n}', function($n){
        return view('tablet')->withNumero($n);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
