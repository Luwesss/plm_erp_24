<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RolesList extends Component
{
    public $searchToken = '';
    public function render()
    {
        return view('livewire.roles-list');
    }

    public function getAllRoles(){
        $query = DB::table('roles')->where('role_id', 'like', '%'.$this->searchToken.'%')->get();
        return $query;
    }
    public function getRolePermission($role_id){
        $query = DB::table('role_permissions')->where('role_id', $role_id)->first();
        return $query;
    }

}
