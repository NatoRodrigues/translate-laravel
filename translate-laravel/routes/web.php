<?php

use Illuminate\Support\Facades\Log;
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

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'pt'])) {
        session(['locale' => $locale]);
        session()->save(); // Força a persistência da sessão
        return redirect()->back();
    }
    return redirect()->back();
})->name('setLocale');
