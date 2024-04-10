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
use App\Livewire\Modulemanage;
use App\Livewire\Permissions;
use App\Livewire\Mainscreen;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);

Route::get('/login', Login::class);

Route::get('/moduleAdmin', Moduleadmin::class);

Route::get('/superAdminAccountManagement', Saam::class);

Route::get('/userList', Userslist::class);

Route::get('/permissions', Permissions::class);

Route::get('/roleCreation', Rolecreation::class);

Route::get('/rolesList', roleslist::class);

Route::get('/superAdmin', Superadmin::class);

Route::get('/editRoles', Editroles::class);

Route::get('/usersList', Userslist::class);

Route::get('/moduleManage', Modulemanage::class);

Route::get('/mainScreen', Mainscreen::class)->name('mainScreen');
