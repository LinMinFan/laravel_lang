<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Fronthome;

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
    return redirect('/zh-TW');
});
//Route::get('/{local}', function (Request $request) {
//    App::setLocale($request);
//    return view('index');
//});

Route::get('/{local}',[Fronthome::class,'index']);
Route::get('/counters/{id}/{local}',[Fronthome::class,'counters']);



