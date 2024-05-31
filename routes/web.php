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
use App\Livewire\StudentDashboard;
use App\Livewire\EmployeeDashboard;

Route::get('/', Login::class);

Route::get('/counter', Counter::class);

// Route::get('/login', Login::class);
Route::post('/login', [Login::class, 'login']);

Route::get('/moduleAdmin', Moduleadmin::class);

Route::get('/userCreation', Saam::class);

Route::get('/userList', Userslist::class); //done

Route::get('/permissions', Permissions::class); //is not needed anymore

Route::get('/roleCreation', Rolecreation::class); //done

Route::get('/rolesList', roleslist::class); //done

Route::get('/superAdmin', Superadmin::class);

Route::get('/editRoles', Editroles::class); //done

Route::get('/usersList', Userslist::class); //done

Route::get('/moduleManage', Modulemanage::class);

Route::get('/mainScreen', Mainscreen::class)->name('mainScreen');

Route::get('/studentdashboard', StudentDashboard::class)->name('studentdashboard');

Route::get('/employeedashboard', EmployeeDashboard::class)->name('employeedashboard');