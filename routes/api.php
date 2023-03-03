<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Models\User;
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

//header("Access-Control-Allow-Origin: *");
//header('Access-Control-Allow-Headers: Authorization, Content-Type, x-xsrf-token, x_csrftoken, Cache-Control, X-Requested-With');

// GET
Route::get('products', [ProductController::class, 'index'])->middleware(EnsureTokenIsValid::class);
Route::get('products/{id}', [ProductController::class, 'get'])->middleware(EnsureTokenIsValid::class);

// POST
Route::post('login', [AuthController::class, 'signin']);
Route::post('logout', [AuthController::class, 'logout'])->middleware(EnsureTokenIsValid::class);
Route::post('create', [ProductController::class, 'create'])->middleware(EnsureTokenIsValid::class);
Route::post('delete', [ProductController::class, 'deleteCollection'])->middleware(EnsureTokenIsValid::class);

// PATCH|PUT
Route::put('update/{id}', [ProductController::class, 'update'])->middleware(EnsureTokenIsValid::class);

// DELETE
Route::delete('delete/{code}', [ProductController::class, 'delete'])->middleware(EnsureTokenIsValid::class);
