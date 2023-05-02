<?php

use App\Http\Controllers\HomeCont;
use App\Http\Controllers\studentCont;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/login',function(){
// return 'Welcome In API';
// });

// creat First Api By using Controller
//  Route::get('/', [HomeCont::class, 'index']);

// Collection Pagination
Route::get('/students',[studentCont::class,'get']);
Route::post('/admin',[studentCont::class,'post']);

