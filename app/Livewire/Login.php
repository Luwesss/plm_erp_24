<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Login extends Component
{
    public $userId;
    public $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {
        $user = DB::table('users')
            ->where('user_id', $this->userId)
            ->where('password', $this->password) 
            ->first();

        if ($user) {
            Session::put('user_id', $user->user_id);
            return redirect()->route('mainScreen');
        } else {
            session()->flash('error', 'Invalid user ID or password.');
            return redirect()->back();
        }
    }
}
