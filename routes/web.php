<?php

use App\Http\Controllers\BelajarController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [BelajarController::class, "index"]);
Route::get("/create", [BelajarController::class, "create"]);
Route::post("/store", [BelajarController::class, "store"]);
Route::get("/update", [BelajarController::class, "index"]);
Route::delete("/delete", [BelajarController::class, "delete"]);
Route::get("/create/{id}", [BelajarController::class, "create"]);
