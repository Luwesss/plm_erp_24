<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Superadmin extends Component
{

    public $accountId;
    public $roleId;

    public function render()
    {
        return view('livewire.superadmin');
    }

    
    //checkAccount logic
    public function checkAccount(){
        //$user = DB::table('users')->where('user_id', $this->userId)->where('password', $this->password);
    }

    public function getAllAccounts(){
        $user = DB::table('users')->get();
        return $user;
    }
    public function getAllRoles(){
        $user = DB::table('roles')->get();
        return $user;
    }


}
