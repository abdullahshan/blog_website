<?php

use App\Http\Controllers\api\v1\postController;
use App\Http\Controllers\backend\CategoryController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteGroup;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::post('/register',[postController::class,'register']);
    Route::get('/logout',[postController::class,'logout']);


    Route::get('/products/add',[postController::class,'add'])->name('api.add');

    Route::get('/products/get/{id?}',[postController::class,'allcategory']);
    Route::middleware('auth:sanctum')->post('/api/store',[postController::class,'product_store'])->name('api.store');

   


