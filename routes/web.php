<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[App\Http\Controllers\BlogController::class, "index"])->name("index");

Route::post("/edit",[App\Http\Controllers\BlogController::class, "edit"]);
Route::get("/edit",function(){return redirect("/");});

Route::post("/delete",[App\Http\Controllers\BlogController::class, "delete"]);
Route::get("/delete",function(){return redirect("/");});

Route::get("/new",function(){return view("guest.create");});

Route::post("/create",[App\Http\Controllers\BlogController::class, "create"]);
Route::post("/change",[App\Http\Controllers\BlogController::class, "change"]);
Route::post("/del_data",[App\Http\Controllers\BlogController::class, "del_data"]);
