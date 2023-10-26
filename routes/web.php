<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $header_menu_items = [
        'CHARACTERS',
        'COMICS',
        'MOVIES',
        'TV',
        'GAMES',
        'COLLECTIBILES',
        'VIDEOS',
        'FANS',
        'NEWS',
        'SHOP'
    ];

    $footer_items = config('footer');

    $comics = config('comics');

    return view('home', compact('comics'), compact(['footer_items', 'header_menu_items']));
});
