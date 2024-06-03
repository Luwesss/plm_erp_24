<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class EmployeeDashboard extends Component
{
    public $userId;
    public $roles;
    public $password;
    public $role;

    public function mount()
    {
        $this->userId = Session::get('user_id');
        $this->password = Session::get('password');
        $this->role = Session::get('role_id');

        if ($this->userId) {
            $this->loadUserRoles();
        }
    }

    private function loadUserRoles()
    {
        $roles = DB::table('user_roles')
            ->where('user_id', $this->userId)
            ->pluck('role_id');
        $this->roles = $roles;
    }

    public function EmpRedirect(){
        Session::put('user_id', $this->userId);
        $hashedPassword = bcrypt($this->password); 
        return redirect()->to('https://hr-lnd.plmerp24.cloud/test?id='.$this->userId.'&password='.$hashedPassword);
    }
    public function render()
    {
        return view('livewire.employee-dashboard');
    }
}
