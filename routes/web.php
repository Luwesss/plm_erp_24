<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Login;
use App\Livewire\Saam;
use App\Livewire\Moduleadmin;
use App\Livewire\Rolecreation;
use App\Livewire\Roleslist;
use App\Livewire\Superadmin;
use App\Livewire\Editroles;
use App\Livewire\Userslist;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);

Route::get('/login', Login::class);

Route::get('/moduleadmin', Moduleadmin::class);

Route::get('/saam', Saam::class);

Route::get('/rc', Rolecreation::class);

Route::get('/rl', roleslist::class);

Route::get('/sa', Superadmin::class);

Route::get('/er', Editroles::class);

Route::get('/ul', Userslist::class);