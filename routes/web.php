<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::group(['prefix' => 'admin','as'=>'admin.','middleware' => ['checkrole:admin', 'auth']], function ()
{
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/perfil', function () {
        return view('admin.perfil');
    })->name('perfil');

    Route::get('/edit-perfil', function() {
        return view('admin.edit-perfil');
    })->name('edit-perfil');
});

Route::get('/detalhes', function() {
    return view('home.detalhes');
})->name('detalhes');

Route::get('/contactos', function() {
    return view('home.contactos');
})->name('contactos');

Route::get('/404', function() {
    return view('error.404');
})->name('404');

Route::get('/user', function() {
    return view('pages.user');
})->name('user');
