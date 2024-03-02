<?php

use App\Http\Controllers\UserfranetController;
use App\Http\Controllers\Api\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('userfranet', [UserfranetController::class, 'store']);
Route::get('userfranet/{telefone}', [UserfranetController::class, 'show']);
Route::get('userfranet', [UserfranetController::class, 'showPendentes']);
Route::patch('userfranet', [UserfranetController::class, 'update']);
Route::patch('userfranet/vencimento', [UserfranetController::class, 'updateVencimento']);

Route::controller(AuthController::class)->group(function(){
    Route::post('/login','login');
    Route::post('/register','register');
});

Route::controller(AuthController::class)->middleware(['auth:sanctum'])->group(function(){
    Route::post('/logout','logout');
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
