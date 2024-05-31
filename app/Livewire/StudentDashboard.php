<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Facades\DB;


class StudentDashboard extends Component
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

    public function redirectTo(){
        return redirect()->to('https://www.youtube.com/results?search_query=how+to+make+button+in+tailwind+css');
    }
  
      public function render()
    {
        return view('livewire.student-dashboard');
    }
}
