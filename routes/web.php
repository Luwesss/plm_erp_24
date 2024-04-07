<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Login;
use App\Livewire\Saam;
use App\Livewire\Userslist;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);

Route::get('/login', Login::class);

Route::get('/saam', Saam::class);

Route::get('/ul', Userslist::class);
