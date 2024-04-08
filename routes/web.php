<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Login;
use App\Livewire\Saam;
use App\Livewire\Moduleadmin;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);

Route::get('/login', Login::class);

Route::get('/moduleadmin', Moduleadmin::class);
