<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Guest\Home;

Route::get('/', Home::class)->name('home');
