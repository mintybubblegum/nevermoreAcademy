<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;

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

Auth::routes();

//R del CRUD
Route::get('/', [GradeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\GradeController::class, 'index']);

//D del CRUD
Route::delete('/delete/{id}', [GradeController::class, 'destroy'])->name('deleteGrade')->middleware('isteacher', 'auth');

//C del CRUD
Route::get('/create', [GradeController::class, 'create'])->name('createGrade')->middleware('isteacher', 'auth');
Route::post('/', [GradeController::class, 'store'])->name('storeGrade')->middleware('isteacher', 'auth');

//U del CRUD
Route::get('/edit/{id}', [GradeController::class, 'edit'])->name('editGrade')->middleware('isteacher', 'auth');
Route::patch('/grade/{id}', [GradeController::class, 'update'])->name('updateGrade')->middleware('isteacher', 'auth');

//Show
Route::get('/show/{id}', [GradeController::class, 'show'])->name('showGrade');