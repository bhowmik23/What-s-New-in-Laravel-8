<?php

use Illuminate\Support\Facades\Route;
use App\Events\GiftCirtificatePurchased;

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
    event(new GiftCirtificatePurchased());
    return view('welcome');
});

Route::get('/downloads', function () {
    return 'some File::download() call';
})->middleware('throttle:downloads');
