<?php

namespace App\Livewire;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
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
        

    }

    public function getAllAccounts(){
        $user = DB::table('users')->get();
        return $user;
    }
    public function getAllRoles(){
        $user = DB::table('roles')->get();
        return $user;
    }

    public function redirectToAllUsers(){
        return redirect()->route("usersList");
    }

    public function getAllUserRoles(){
        $query = DB::table('user_roles')->where('user_id', $this->accountId)->get();
        return $query;
    }
    public function getAllRolePermissions(){
        $array = array();
        $query = DB::table('user_roles')->where('user_id', $this->accountId)->get();
        foreach($query as $row){
            $query = DB::table('role_permissions')->where('role_id', $row->role_id)->first();
            $query2 = DB::table('module_roles')->where('role_id', $row->role_id)->first();
            if($query2)
                $query2 = DB::table('available_modules')->where('module_id', $query2->module_id)->first()->name;
            else
                if($row->role_id == "SUPER_ADMIN")
                    $query2 = "ALL";
                else
                    $query2 = "NONE";
            array_push($array,array($query, $query2));
        }
        return $array;
    }

    public function getModuleName($role){
        $query = DB::table('module_roles')->where('role_id', $role)->first();
        $query = DB::table('available_modules')->where('module_id', $query->module_id)->first();
        return $query;
    }

    public function saveGlobal(){
        session_start();
        if($this->accountId != null)
            $_SESSION['account_id'] = $this->accountId;
        else
            $_SESSION['account_id'] = "NONE SELECTED";
    }

}
