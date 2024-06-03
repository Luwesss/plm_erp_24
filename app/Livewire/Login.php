<?php
namespace App\Livewire;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class Login extends Component
{
    public $userId;
    public $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'loginuserid' => 'required',
            'loginpassword' => 'required'
        ]);

        $user = DB::table('login_users')
            ->where('id', $incomingFields['loginuserid'])
            ->where('password', $incomingFields['loginpassword'])
            ->first();

        if ($user) {
            Session::put('user_id', $user->id);
            Session::put('user_type', $user->usertype);
            Session::put('password', $user->password);
            Session::put('role_id', $user->role_id);

            if ($user->usertype == 'student') {
                return redirect()->route('studentdashboard');
            } elseif ($user->usertype == 'employee') {
                return redirect()->route('employeedashboard');
            }
        } else {
            session()->flash('error', 'Invalid user ID or password.');
            return redirect()->back();
        }
    }
    // public function login()
    // {
    //     $user = DB::table('users')
    //         ->where('user_id', $this->userId)
    //         ->where('password', $this->password) 
    //         ->first();

    //    
    // }

    public function updateProperty()
    {
        return redirect()->route('mainScreen');
    }
}