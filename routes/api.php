<?php

use App\Http\Controllers\FatoorahContoller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('pay', [FatoorahContoller::class , 'PayOrder']);

Route::get('Success_callback', [FatoorahContoller::class , 'Success_callback']);
Route::get('Error_callback', [FatoorahContoller::class , 'Error_callback']);
