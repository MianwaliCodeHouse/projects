<?php

use App\Http\Controllers\TodoListController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/createTodo',[TodoListController::class,'create'])->name('create.todo');
Route::post('/updateTodo',[TodoListController::class,'update'])->name('update.todo');
Route::get('/getTodos/',[TodoListController::class,'getTodos'])->name('get.todos');
Route::get('/deleteTodo/{id}',[TodoListController::class,'deleteTodo'])->name('delete.todos');
Route::get('/getTodo/{id}',[TodoListController::class,'getTodo'])->name('get.todo');