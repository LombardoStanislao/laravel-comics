<?php

use Illuminate\Support\Facades\Route;

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

    $array_comics = config('comics');

    $data = [
        'comics' => $array_comics
    ];

    return view('home', $data);
}) ->name('homepage');

Route::get('/comic/{id}', function($id) {

    $array_comics = config('comics');

    if (!array_key_exists($id, $array_comics)) {
        abort(404);
    }

    $single_comic = $array_comics[$id];

    $data = [
        'single_comic' => $single_comic
    ];

    return view('comic', $data);

}) ->name('comic');
