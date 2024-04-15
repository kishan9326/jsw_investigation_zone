<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\{WatchController};
use App\Http\Controllers\Admin\{APIController};
/*
|--------------------------------------------------------------------------
| Game Routes
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

Route::get('/game_slots/{id}', [APIController::class, 'game_slots'])->name('game_slots');
Route::get('/game_info', [APIController::class, 'game_info'])->name('game_info');
Route::post('/save_user', [APIController::class, 'save_user'])->name('save_user');
Route::get('/game_content/{id}', [APIController::class, 'game_content'])->name('game_content');
Route::get('/game_content_hindi', [APIController::class, 'game_content_hindi'])->name('game_content_hindi');
Route::get('/reconnect_world_data', [APIController::class, 'reconnect_world_data'])->name('reconnect_world_data');
Route::get('/coral_empire_data', [APIController::class, 'coral_empire_data'])->name('coral_empire_data');
Route::get('/game_content_2', [APIController::class, 'game_content_2'])->name('game_content_2');



// Route::get('/watch_data/{id}',[GameController::class,'watch_data'])->name('watch_data');
// Route::get('/make_differance_member',[GameController::class,'make_differance_member'])->name('make_differance_member');
// Route::post('/make_differance_data',[GameController::class,'make_differance_data'])->name('make_differance_data');
