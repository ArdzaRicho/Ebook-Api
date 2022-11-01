<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeloController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BookController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //return $request->user();
//});

Route::get('api',function(){
    return["Ardzaricho" => "biasa"];
});

//Route::('halocontroller',[HeloController::class, 'index']);

Route::resource('halo', HeloController::class);

Route::resource('siswa', SiswaController::class, ['except' => ['create', 'edit']]);

Route::get('siswas/{id}', [SiswaController::class, 'update']);

// Route::get('books', [BookController::class, 'index']);
// Route::get('books/{id}', [BookController::class, 'show']);
// Route::get('books', [BookController::class, 'store']);
// Route::get('books/{id}', [BookController::class, 'update']);
// Route::get('books/{id}', [AuthController::class, 'destroy']);

Route::resource('books', BookController::class);