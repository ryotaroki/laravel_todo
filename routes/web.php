<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/todo', function () {
//     return view('todolist');
// });
Route::get('/', [TodoController::class, 'index'])->name('todo.init');
Route::post('/add', [TodoController::class, 'add'])->name('todo.add');
