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
use App\Livewire\Dashboard;
use App\Livewire\Payables;
use App\Livewire\Tracking;
use App\Livewire\PayablesAdd;
use App\Livewire\PayablesView;
use App\Livewire\FoldersMain;
use App\Livewire\Notifications;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);

Route::get('/login', Login::class);

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

Route::get('/dashboard', Dashboard::class);

Route::get('/payables', Payables::class);

Route::get('/payables/add', PayablesAdd::class);

Route::get('/payables/view', PayablesView::class);

Route::get('/tracking', Tracking::class);

Route::get('/folders/main', FoldersMain::class);

Route::get('/notifications', Notifications::class);