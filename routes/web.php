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

// index page
Route::get('/', function () {
    return "<h1>Hi</h1>";
});

// route to page
Route::get('about', function () {
    return "<h1>About</h1>";
});

// route redirect by form to page use methoud post
Route::get('contact', function () {
    return '<form action="data" method="post" >
        ' . csrf_field() . '
        <input type="submit" value="go" />
    </form>';
});


// rout with methoud post
Route::post("data", function () {
    return "data";
});

Route::prefix('product')->group(function () {
    Route::get('/', fn () => "hi products");

    Route::get('edit/{id}', fn ($id) =>  ('hi id:' . $id));
    
    Route::get('add', fn () => "<h1>add</h1>");
});