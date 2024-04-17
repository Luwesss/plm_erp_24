<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Mainscreen extends Component
{
    public $financeAccess = [];
    public $registrarAccess = [];
    public $differentAccess = [];
    public $hrAccess = [];
    public $acadAccess = [];
    public $userId;
    public $roles;

    public function mount()
    {
        $this->userId = Session::get('user_id');
        if ($this->userId) {
            $this->loadUserRoles();
            $this->loadAccessData();
        }
    }

    private function loadUserRoles()
    {
        $roles = DB::table('user_roles')
            ->where('user_id', $this->userId)
            ->pluck('role_id');
        $this->roles = $roles;
    }

    private function loadAccessData()
    {
        $roles = $this->roles;

        $financeQuery = DB::table('roles')
            ->whereIn('role_id', $roles)
            ->select('role_name', 'General Ledger', 'Financial Reporting', 'Project Cost Accounting', 'Purchasing', 'Inventory', 'Accounts Receivables', 'Cash Management/Billing', 'Accounts Payable', 'Budgeting', 'Procurement Management and Monitoring System', 'PLM Asset and Supplies Inventory System')
            ->get();
        $this->financeAccess = $this->formatAccessData($financeQuery);

        $consolidatedFinanceAccess = [
            "General Ledger" => "0",
            "Financial Reporting" => "0",
            "Project Cost Accounting" => "0",
            "Purchasing" => "0",
            "Inventory" => "0",
            "Accounts Receivables" => "0",
            "Cash Management/Billing" => "0",
            "Accounts Payable" => "0",
            "Budgeting" => "0",
            "Procurement Management and Monitoring System" => "0",
            "PLM Asset and Supplies Inventory System" => "0"
        ];
        
        foreach ($this->financeAccess as $modules) {
            foreach ($modules as $module => $access) {
                if ($access === "1") {
                    $consolidatedFinanceAccess[$module] = "1";
                }
            }
        }
        
        $this->financeAccess = $consolidatedFinanceAccess;

        $registrarQuery = DB::table('roles')
            ->whereIn('role_id', $roles)
            ->select('role_name', 'Academic Admission and Testing Support', 'Student Information', 'Enrollment')
            ->get();
        $this->registrarAccess = $this->formatAccessData($registrarQuery);

        $consolidatedRegistrarAccess = [
            "Academic Admission and Testing Support" => "0",
            "Student Information" => "0",
            "Enrollment" => "0"
        ];

        foreach ($this->registrarAccess as $modules) {
            foreach ($modules as $module => $access) {
                if ($access === "1") {
                    $consolidatedRegistrarAccess[$module] = "1";
                }
            }
        }

        $this->registrarAccess = $consolidatedRegistrarAccess;

        $differentQuery = DB::table('roles')
            ->whereIn('role_id', $roles)
            ->select('role_name', 'Student Portal', 'Faculty Portal', 'Employee Portal', 'DRS', 'Alumni Portal', 'Discipline Module', 'Scholarship', 'Students Affair (Organization)', 'Clinic Portal', 'Library Module', 'Guidance Module', 'Legal Affairs Module')
            ->get();
        $this->differentAccess = $this->formatAccessData($differentQuery);

        $consolidatedDifferentAccess = [
            "Student Portal" => "0",
            "Faculty Portal" => "0",
            "Employee Portal" => "0",
            "DRS" => "0",
            "Alumni Portal" => "0",
            "Discipline Module" => "0",
            "Scholarship" => "0",
            "Students Affair (Organization)" => "0",
            "Clinic Portal" => "0",
            "Library Module" => "0",
            "Guidance Module" => "0",
            "Legal Affairs Module" => "0"
        ];

        foreach ($this->differentAccess as $modules) {
            foreach ($modules as $module => $access) {
                if ($access === "1") {
                    $consolidatedDifferentAccess[$module] = "1";
                }
            }
        }

        $this->differentAccess = $consolidatedDifferentAccess;

        $hrQuery = DB::table('roles')
            ->whereIn('role_id', $roles)
            ->select('role_name', 'Recruitment/Selection/Placement/Personnel Records', 'Learning and Development/Employee Self Services/Others')
            ->get();
        $this->hrAccess = $this->formatAccessData($hrQuery);

        $consolidatedHRAccess = [
            "Recruitment/Selection/Placement/Personnel Records" => "0",
            "Learning and Development/Employee Self Services/Others" => "0"
        ];

        foreach ($this->hrAccess as $modules) {
            foreach ($modules as $module => $access) {
                if ($access === "1") {
                    $consolidatedHRAccess[$module] = "1";
                }
            }
        }

        $this->hrAccess = $consolidatedHRAccess;

        $acadQuery = DB::table('roles')
            ->whereIn('role_id', $roles)
            ->select('role_name', 'Student Performance / Student Services')
            ->get();
        $this->acadAccess = $this->formatAccessData($acadQuery);

        $consolidatedAcadAccess = [
            "Student Performance / Student Services" => "0"
        ];

        foreach ($this->acadAccess as $modules) {
            foreach ($modules as $module => $access) {
                if ($access === "1") {
                    $consolidatedAcadAccess[$module] = "1";
                }
            }
        }

        $this->acadAccess = $consolidatedAcadAccess;
    }

    private function formatAccessData($data)
    {
        $accessData = [];
        foreach ($data as $row) {
            $accessData[$row->role_name] = (array) $row;
        }
        return $accessData;
    }

    public function render()
    {
        return view('livewire.mainscreen');
    }
}
