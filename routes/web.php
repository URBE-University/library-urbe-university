<?php

use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('/databases', [WebController::class, 'databases'])->name('databases');
Route::get('/training-and-docs', [WebController::class, 'docs'])->name('docs');
Route::get('/newsletter', [WebController::class, 'newsletters'])->name('newsletters');
Route::get('/about', [WebController::class, 'about'])->name('about');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/document/new', \App\Http\Livewire\Document\Create::class)->name('document.create');
    Route::get('/newsletter/new', \App\Http\Livewire\Newsletter\Create::class)->name('newsletter.create');
    Route::get('/url/new', \App\Http\Livewire\Url\Create::class)->name('url.create');
});
