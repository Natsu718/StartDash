<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'grade_index')->name('grade_index');
    Route::get('/{grade}', 'class_index')->name('class_index');
    Route::get('/{grade}/{classx}', 'name_index')->name('name_index');
    Route::get('/{grade}/{classx}/{user}', 'index')->name('index');
    Route::get('/posts/create','create')->name('create');
    Route::get('/posts/{post}','show')->name('show');
    Route::post('/posts','store')->name('store');
    Route::get('/posts/{post}/edit', 'edit')->name('edit');
    Route::put('/posts/{post}', 'update')->name('update');
    Route::delete('/posts/{post}','delete')->name('delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/users/{user}', [UserController::class,'index']);

require __DIR__.'/auth.php';

// / -> 学年選択画面
// /{grade} -> クラス選択画面
// /{grade}/{class} -> ユーザー択画面
// /{grade}/{class}/{user} ->日づけ選択画面
// /{grade}/{class}/{user}/{post} -> 日記画面
