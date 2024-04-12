<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Editroles extends Component
{

    public $accountId;
    public $got = false;

    public function render()
    {
        return view('livewire.editroles');
    }
    public function getAllRoles(){
        $query = DB::table('roles')->get();
        return $query;
    }
    public function clearGlobal(){
        session_unset();
        session_destroy();
    }
    public function getAllUserRoles(){
        $query = DB::table('user_roles')->where('user_id', $this->accountId)->get();
        return $query;
    }
    public function updateRoles(){
    }
}
