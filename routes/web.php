<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackingController;
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

Route::get('/tracking/{provider}/{id}',[TrackingController::class,'tracking']);

Route::get('/', function () {
    return view('welcome');
});
