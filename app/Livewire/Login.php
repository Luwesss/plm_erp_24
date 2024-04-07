<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

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
        dd('login method called');
        logger('login method called');
        $user = DB::table('users')
            ->where('user_id', $this->userId)
            ->first();

        if ($user && password_verify($this->password, $user->password)) {
            return redirect()->route('trial');
        } else {
            session()->flash('error', 'Invalid user ID or password.');
            return redirect()->back();
        }
    }
}
