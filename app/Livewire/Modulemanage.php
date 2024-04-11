<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Modulemanage extends Component
{
    public $userId;
    public $moduleName;
    public $roleId;
    public $oldRoleId;
    public function render()
    {
        return view('livewire.modulemanage');
    }

    public function describeRoles(){
        $query = DB::select('DESCRIBE roles');
        return $query;
    }
    public function getAllPermissions(){
        $query = DB::table('permissions')->get();
        return $query;
    }
    public function clearGlobal(){
        session_unset();
        session_destroy();
    }
    public function getModuleRoles(){
        $query = array();
        if($this->moduleName != null){
            $query = DB::table('available_modules')->where('name', $this->moduleName)->first();
            if($query)
                $query = DB::table('roles')->where('role_id', 'like', $query->module_id."%")->get();
            else
                $query = array();
        }
        return $query;
    }
    public function implementUpdate(){
        DB::table('user_roles')->where('user_id', $this->userId)->where('role_id', $this->oldRoleId)->update(array('role_id' => $this->roleId));
        $this->oldRoleId = $this->roleId;
        $this->moduleName = $this->roleId = "";
    }

}
