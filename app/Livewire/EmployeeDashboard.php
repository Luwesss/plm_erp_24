<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class EmployeeDashboard extends Component
{
    public $userId;
    public $roles;

    public function mount()
    {
        $this->userId = Session::get('user_id');
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
    public function render()
    {
        return view('livewire.employee-dashboard');
    }
}
