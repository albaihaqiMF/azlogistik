<?php

use App\Helpers\Helpers;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Comments;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::view('button', 'question.button')->name('button');
Route::view('design', 'question.design')->name('design');
Route::view('movie', 'question.movie')->name('movie');
Route::view('card', 'question.card')->name('card');
Route::get('comments', Comments::class)->name('comment');

Route::get('project', function () {
    $projects = Project::with('categories')->get();

    return $projects;
});

require __DIR__ . '/auth.php';
