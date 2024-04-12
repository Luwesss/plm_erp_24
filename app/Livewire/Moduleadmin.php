<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Moduleadmin extends Component
{

    public $moduleName;
    public $userId;
    public $roleId;
    public function render()
    {
        return view('livewire.moduleadmin');
    }
    public function describeRoles(){
        $query = DB::select('DESCRIBE roles');
        return $query;
    }

    public function getAllFilteredAcc($filter){
        $module =  DB::table('available_modules')->where('name', $this->moduleName)->first();
        if($module != null){
            if($filter == ""){
                $users= DB::table('users')
                        ->join('user_roles', 'user_roles.user_id', '=', 'users.user_id')
                        ->join('roles', 'roles.role_id', '=', 'user_roles.role_id')
                        ->where('roles.role_id', '!=', "SUPER_ADMIN")
                        ->where('roles.role_id', 'not like', "%_ADMIN")
                        ->where('roles.role_id', 'like', $module->module_id."%")
                        ->select('users.user_id', 'roles.role_name', 'roles.role_id')
                        ->get();
            }else{
                $users = array();
            }
        }else{
            $users = array();
        }
        return $users;
    }

    public function update($id, $role){
        session_start();
        $_SESSION['Module_userid'] = $id;
        $_SESSION['Module_roleid'] = $role;
    }

    public function remove($id, $role){
        DB::table('user_roles')->where('user_id', $id)->where('role_id', $role)->delete();
    }

}
