<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class,'indexHome'])->name('home');
Route::get('/about',[WebController::class, 'indexAbout'])->name('about');
Route::get('/projects',[WebController::class, 'indexProjects',])->name('projects');
Route::get('/projects/cav', [WebController::class, 'showCav'])->name('show.cav');
Route::get('/projects/cultured-dc', [WebController::class, 'showDC'])->name('show.dc');
Route::get('/projects/other', [WebController::class, 'showOther'])->name('show.other');
