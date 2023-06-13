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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/create.category', function () {
        return view('create.category');
    })->name('create.category');

    Route::get('/edit.category', function () {
        return view('edit.category');
    })->name('edit.category');
    

    //Foros

    Route::get('/forums', function () {
        return view('forum.index');
    })->name('forums');

    Route::get('/view.forum', function () {
        return view('forum.view');
    })->name('view.forum');

    Route::get('/create.forum', function () {
        return view('forum.create');
    })->name('create.forum');

    Route::get('/edit.forum', function () {
        return view('forum.edit');
    })->name('edit.forum');

    Route::get('/create.forum', function () {
        return view('forum.delete');
    })->name('create.forum');

    

});
