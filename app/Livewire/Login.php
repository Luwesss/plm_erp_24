<?php
namespace App\Livewire;

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

    public function login(Request $request){
        $incomingFields = $request->validate([
            'loginuserid'=>'required',
            'loginpassword'=>'required'
        ]);
        $user = DB::table('new_users')
                ->where('user_id', $incomingFields['loginuserid'])
                ->where('password', $incomingFields['loginpassword']) 
                ->first();

        if ($user->usertype == 'student'){
            Session::put('user_id', $user->user_id);

            return redirect()->route('studentdashboard');
        }else if ($user->usertype == 'employee'){
            Session::put('user_id', $user->user_id);
            
            return redirect()->route('employeedashboard');
        }
        else {
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
