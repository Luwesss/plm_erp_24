<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Login;
use App\Livewire\Saam;
use App\Livewire\Roleslist;
use App\Livewire\Superadmin;
use App\Livewire\Editroles;
use App\Livewire\Userslist;
use App\Livewire\Modulemanage;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);

Route::get('/login', Login::class);

Route::get('/saam', Saam::class);

Route::get('/rl', roleslist::class);

Route::get('/sa', Superadmin::class);

Route::get('/er', Editroles::class);

Route::get('/ul', Userslist::class);

Route::get('/ma', Modulemanage::class);
