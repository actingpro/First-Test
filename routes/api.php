<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


//Project usage

use App\Http\Controllers\BookController;
use App\Http\Controllers\LibraryRequestController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CostingController;

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

//User Controller

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Public Apis


//Books Apis
Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::put('/books/{id}', [BookController::class, 'update']);
Route::delete('/books/{id}', [BookController::class, 'destroy']);

//LibraryRequest Apis
Route::resource('/requesties', LibraryRequestController::class);

//Costing Users

Route::get('/costing', [CostingController::class, 'index']);
Route::post('/costing', [CostingController::class], 'store');


//BookCategories Apis
Route::get('/test1', [BookCategoryController::class, 'test']);
Route::get('/bookcategory', [BookCategoryController::class, 'index']);
Route::post('/bookcategory', [BookCategoryController::class, 'store']);

//Public Apis Routes
Route::post('/students', [StudentController::class, 'store']);
Route::post('/std', [stdController::class, 'store']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{id}', [StudentController::class, 'show']);

//Authenticated Routs

Route::group(['middleware' => ['auth:sanctum']], function() {
//     Route::post('/students', [StudentController::class, 'store']);
    Route::post('/logout', [AuthController::class, 'logout']);
//     Route::get('/students/search/{name}', [StudentController::class, 'search']);
});