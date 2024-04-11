<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Route;

class Saam extends Component
{

    public $user_id;
    public $password;
    public $confirmPassword;
    public $selectedAccount;

    public function render()
    {
        return view('livewire.saam');
    }

    public function addUser(){
        if($this->password == $this->confirmPassword){
            $result = DB::table('users')->where('user_id', $this->user_id)->first();
            if($result){

            }else{
                DB::table('users')->insert(array('user_id' => $this->user_id, 'password' => $this->password));
                DB::table('user_roles')->insert(array('user_id' => $this->user_id));
                $this->user_id = '';
                $this->password = '';
                $this->confirmPassword = '';
            }
        }
    }

    public function disableAccount(){
        if($this->selectedAccount != null){
            //DB::table('users')->update(array('active' => 0));
            DB::table('users')->where('user_id', $this->selectedAccount)->delete();
        }
    }
    public function getAllUserInfo(){
        $query = DB::table('users')->get();
        return $query;
    }

}
