<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TowerApiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tower/json', [TowerApiController::class,'json'])->name('tower.json');
Route::get('/tower/show_json/{gid}', [TowerApiController::class,'show_json'])->name('tower.show.json');
Route::post('/tower/store_json/{gid}', [TowerApiController::class,'store_json'])->name('tower.store.json');
Route::delete('/tower/delete_json/{gid}', [TowerApiController::class,'delete_json'])->name('tower.delete.json');
