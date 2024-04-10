<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Userslist extends Component
{

    public $searchToken = '';
    public $temp = false;

    public function render()
    {
        return view('livewire.userslist'    );
    }

    public function getAllUserInfo(){
        $query = DB::table('users')->distinct('user_id')->where('user_id', 'like', '%'.$this->searchToken.'%')->get();
        return $query;
    }

    public function getAllUserRoles($userId){
        $array = array();
        $query = DB::table('user_roles')->where('user_id', $userId)->get();
        foreach($query as $role){
            array_push($array, DB::table('roles')->where('role_id', $role->role_id)->first());
        }
        return $array;
    }

    public function updatingSearch(){
        //$this->js('window.location.reload()'); 
    }

}
