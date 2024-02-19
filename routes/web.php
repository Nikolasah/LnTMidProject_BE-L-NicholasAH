<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WorkerController::class, 'ViewAllWorker']);

Route::get('/add/Worker', [WorkerController::class, 'AddWorker']);

Route::post('/store/Worker', [WorkerController::class, 'StoreWorker']);

Route::get('/Worker/{id}', [WorkerController::class, 'ViewWorker']);

Route::get('/update/Worker/{id}', [WorkerController::class, 'viewUpdateWorker']);

Route::patch('/save/update/{id}', [WorkerController::class, 'saveUpdate']);

Route::delete('/delete/Worker/{id}', [WorkerController::class, 'deleteWorker']);
