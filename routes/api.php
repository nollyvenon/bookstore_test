<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AuthorController;
//use App\Http\Controllers\BookController;

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
Route::get('login', function() {
    return response()->json(['message' => 'Unauthorized.'], 401);
});
Route::post('login', [ 'as' => 'login']);
Route::middleware('auth:api')->prefix('v1')->group(function() {
    Route::get('/user', function(Request $request){
        return $request->user(); 
    });

    //Route::get("/authors/{author}", [AuthorController::class, 'show']);

    Route::apiResource('/authors', AuthorController::class);
    Route::apiResource('/books', BookController::class);
});