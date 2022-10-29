<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\ChecklistGroupController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TaskController;



  

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



//RECUERDEN IMPORTAR LOS CONTROLADORES COMO ESTÁ ARRIBA

Route::get('/users',[UserController::class,'show']);
Route::get('/groups',[ChecklistGroupController::class,'show']);
Route::put('/groups/update/{id}',[ChecklistGroupController::class,'update']);
Route::post('/login',[apiController::class,'login']);
Route::post('/register',[apiController::class,'register']);
Route::post('/note',[NoteController::class,'store']);
Route::put('/midia/{id}',[TaskController::class,'AgregueAMiDia']);
Route::put('/important/{id}',[TaskController::class,'AgregueAImportante']);
Route::put('/planeado',[TaskController::class,'AgregueAPlaneado']);
Route::get('/checklists',[ChecklistController::class,'show']);