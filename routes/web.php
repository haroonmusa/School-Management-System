<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students/index', [StudentController::class,'create'])->name('students.index');
Route::post('/students', [StudentController::class,'store'])->name('students.store');
Route::get('/students/{student}/edit', [StudentController::class,'edit'])->name('students.edit');
Route::put('/students/{student}/update', [StudentController::class,'update'])->name('students.update');
Route::delete('/students/{student}/delete', [StudentController::class,'destroy'])->name('students.destroy');
