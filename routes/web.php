<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\Admin\{AuthController,ProfileController,UserController,MainGameController};

Route::get('/', function () {
    // return view('welcome');
    return view('admin.auth.login');
});

Route::get('/admin/login',[AuthController::class,'getLogin'])->name('getLogin');
Route::post('/admin/login',[AuthController::class,'postLogin'])->name('postLogin');

Route::group(['middleware'=>['admin_auth']],function(){
    
    Route::get('/admin/dashboard',[ProfileController::class,'dashboard'])->name('dashboard');
    Route::get('/admin/users',[UserController::class,'index'])->name('users.index');
    Route::get('/admin/logout',[ProfileController::class,'logout'])->name('logout');
    Route::get('/admin/addGame',[MainGameController::class,'index'])->name('addGame');
    Route::post('/admin/saveGame',[MainGameController::class,'saveGame'])->name('saveGame');

    Route::get('/admin/addGame1',[MainGameController::class,'addGame1'])->name('addGame1');
    Route::get('/admin/addRescueHindi',[MainGameController::class,'addRescueHindi'])->name('addRescueHindi');
    Route::get('/admin/editRescueHindi',[MainGameController::class,'editRescueHindi'])->name('editRescueHindi');
    Route::post('/admin/update_rescue_champs_hindi',[MainGameController::class,'update_rescue_champs_hindi'])->name('update_rescue_champs_hindi');

    Route::get('/admin/reconnectWorld',[MainGameController::class,'reconnectWorld'])->name('reconnectWorld');

    Route::get('/admin/editCosmicEmpiretQuetions/{id}',[MainGameController::class,'editCosmicEmpiretQuetions'])->name('editCosmicEmpiretQuetions');

    Route::get('/admin/editReconnectQuetions/{id}',[MainGameController::class,'editReconnectQuetions'])->name('editReconnectQuetions');

    Route::get('/admin/editRescueQuetions/{id}',[MainGameController::class,'editRescueQuetions'])->name('editRescueQuetions');
    Route::get('/admin/editRescueHindiQuetions/{id}',[MainGameController::class,'editRescueHindiQuetions'])->name('editRescueHindiQuetions');

    Route::post('/admin/updateReconnectWorld',[MainGameController::class,'updateReconnectWorld'])->name('updateReconnectWorld');
    Route::post('/admin/updateCoralEmpire',[MainGameController::class,'updateCoralEmpire'])->name('updateCoralEmpire');

    Route::get('/admin/coralEmpire',[MainGameController::class,'cosmicEmpire'])->name('cosmicEmpire');

    Route::post('/admin/saveGame1',[MainGameController::class,'saveGameInfo1'])->name('saveGameInfo1');
    Route::post('/admin/saveSlots',[MainGameController::class,'saveSlots'])->name('saveSlots');
    Route::post('/admin/saveGameInfo2',[MainGameController::class,'saveGameInfo2'])->name('saveGameInfo2');

    Route::post('/admin/saveReconnectWorld',[MainGameController::class,'saveReconnectWorld'])->name('saveReconnectWorld'); 

    Route::post('/admin/saveReconnectQuetions',[MainGameController::class,'saveReconnectQuetions'])->name('saveReconnectQuetions'); 

    Route::post('/admin/saveCosmicEmpire',[MainGameController::class,'saveCosmicEmpire'])->name('saveCosmicEmpire'); 

    Route::post('/admin/savecosmicEmpireQuetions',[MainGameController::class,'savecosmicEmpireQuetions'])->name('savecosmicEmpireQuetions'); 


    Route::get('/admin/edit_all_games/{id}',[MainGameController::class,'edit_all_games'])->name('edit_all_games');

    Route::get('/admin/editGameInfo/{id}',[MainGameController::class,'editGameInfo'])->name('editGameInfo');

    Route::get('/admin/editSlot/{id}',[MainGameController::class,'editSlot'])->name('editSlot');

    Route::get('/admin/view_games_info',[MainGameController::class,'view_games_info'])->name('view_games_info');

    Route::get('/admin/view_game_data',[MainGameController::class,'view_game_data'])->name('view_game_data');
    Route::get('/admin/view_game_slots',[MainGameController::class,'view_game_slots'])->name('view_game_slots');
    
    Route::get('/admin/view_cosmic_quetions',[MainGameController::class,'view_cosmic_quetions'])->name('view_cosmic_quetions');

    Route::get('/admin/view_reconnect_quetions',[MainGameController::class,'view_reconnect_quetions'])->name('view_reconnect_quetions');

    Route::get('/admin/view_rescue_quetions',[MainGameController::class,'view_rescue_quetions'])->name('view_rescue_quetions');
    Route::get('/admin/view_rescue_hindi_quetions',[MainGameController::class,'view_rescue_hindi_quetions'])->name('view_rescue_hindi_quetions');

    Route::get('/admin/addGame2',[MainGameController::class,'addGame2'])->name('addGame2');

    Route::get('/admin/addSlots',[MainGameController::class,'addSlots'])->name('addSlots');

    Route::post('/admin/updateSlots',[MainGameController::class,'updateSlots'])->name('updateSlots');

    Route::post('/admin/updateGameInfo2',[MainGameController::class,'updateGameInfo2'])->name('updateGameInfo2');
    Route::post('/admin/update_rescue_champs',[MainGameController::class,'update_rescue_champs'])->name('update_rescue_champs');

    Route::post('/admin/updateCosmicEmpireQuetions',[MainGameController::class,'updateCosmicEmpireQuetions'])->name('updateCosmicEmpireQuetions');

    Route::post('/admin/updateReconnectQuetions',[MainGameController::class,'updateReconnectQuetions'])->name('updateReconnectQuetions');

    Route::post('/admin/updateRescueChampQuetions',[MainGameController::class,'updateRescueChampQuetions'])->name('updateRescueChampQuetions');
    Route::post('/admin/updateRescueChampHindiQuetions',[MainGameController::class,'updateRescueChampHindiQuetions'])->name('updateRescueChampHindiQuetions');

    Route::post('/admin/updateGame',[MainGameController::class,'updateGame'])->name('updateGame');

    Route::get('/admin/removeImg/{id}',[MainGameController::class,'removeImg'])->name('removeImg');

    Route::get('/admin/removeCoralImg/{id}',[MainGameController::class,'removeCoralImg'])->name('removeCoralImg');

    
    
    // Route::post('/admin/saveGame',[MainGameController::class,'saveGame'])->name('saveGame');


});
