<?php

use App\Livewire\Site\Principal\Home;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', Home::class)->name('home');

Route::get('/principal', function () {
    return redirect()->to('/admin');
})->name('admin');

