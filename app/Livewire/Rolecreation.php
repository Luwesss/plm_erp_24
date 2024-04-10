<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Rolecreation extends Component
{

    public $roleName, $roleExtension, $table, $permissionGranted;
    public $modifyRoleId, $modifyRoleName, $modifyTable, $modifyAccess;
    public $selectedRole;
    public function render()
    {
        return view('livewire.rolecreation');
    }
    public function describeRoles(){
        $query = DB::select('DESCRIBE roles');
        return $query;
    }
    public function getAllPermissions(){
        $query = DB::table('permissions')->get();
        return $query;
    }

    public function addRole(){
        $query = DB::table('available_modules')->where('name', $this->table)->first();
        $module_id = "";
        if($query){ 
            $module_id = $query->module_id;
        }
        $role_id = $module_id."_".$this->roleExtension;
        if($this->table == "All Tables"){
            $role_id = "SUPER_ADMIN_".$this->roleExtension;
            DB::table('roles')->insert(
                array(
                    'role_id' => $role_id, 'role_name' => $this->roleName, 
                    'Academic Admission and Testing Support' => '1', 'Accounts Payable' => '1', 
                    'Accounts Receivables' => '1', 'Alumni Portal' => '1', 'Budgeting' => '1', 
                    'Cash Management/Billing' => '1', 'Clinic Portal' => '1', 'Discipline Module'=> '1', 
                    'DRS' => '1', 'Employee Portal'=> '1', 'Enrollment' => '1', 'Faculty Portal' => '1', 
                    'Financial Reporting' => '1', 'General Ledger' => '1', 'Guidance Module' => '1', 
                    'Inventory'=> '1', 'Learning and Development/Employee Self Services/Others'=> '1', 
                    'Legal Affairs Module'=> '1', 'Library Module'=> '1', 
                    'PLM Asset and Supplies Inventory System' => '1', 
                    'Procurement Management and Monitoring System'=>'1', 
                    'Project Cost Accounting'=> '1', 'Purchasing' => '1', 
                    'Recruitment/Selection/Placement/Personnel Records' => '1', 'Scholarship' => '1', 
                    'Students Affair (Organization)' => '1', 'Student Information' => '1', 
                    'Student Performance / Student Services' => '1', 'Student Portal' => '1'
                ));
        }else{
            DB::table('roles')->insert(array('role_id' => $role_id, 'role_name' => $this->roleName, $this->table => '1'));
        }
        DB::table('role_permissions')->insert(array('role_id' => $role_id, 'permission_id' => $this->permissionGranted));
        if($this->table != "All Tables")
            DB::table('module_roles')->insert(array('module_id' => $module_id, 'role_id' => $role_id));

        $this->roleExtension = $this->permissionGranted = $this->table = $this->roleName = '';
    }

    public function getAllRoles(){
        $query = DB::table('roles')->get();
        return $query;
    }

    public function deleteRole(){
        if($this->selectedRole != null){
            //DB::table('users')->update(array('active' => 0));
            $query = DB::table('user_roles')->where('role_id', $this->selectedRole)->get();
            if(count($query) > 0){
                $user_id = $query[0]->user_id;
                $query = DB::table('roles')->where('role_id', $this->selectedRole)->delete();
                if($query){ 
                    $query = DB::table('user_roles')->where('user_id', $user_id)->get();
                    if(count($query) > 0){

                    }else{  
                        DB::table('user_roles')->insert(array('user_id' => $user_id, 'role_id' => "Default"));
                    }
                }else{

                }
            }else{
                DB::table('roles')->where('role_id', $this->selectedRole)->delete();
            }
        }
    }


    public function updateModify(){
        if($this->modifyRoleId != null){
            $query = DB::table('roles')->where('role_id', $this->modifyRoleId)->first();
            $this->modifyRoleName = $query->role_name;
            if($query->role_id == "Default"){
                $this->modifyTable = "Default";
            }else{
                if(strpos($query->role_id, "SUPER_ADMIN")!== false){
                    $this->modifyTable = "All Tables";
                }else{   
                    $query = DB::table('module_roles')->where('role_id', $this->modifyRoleId)->first();
                    $query = DB::table('available_modules')->where('module_id', $query->module_id)->first();
                    $this->modifyTable = $query->name;
                }
            }
            $query = DB::table('role_permissions')->where('role_id', $this->modifyRoleId)->first();
            $this->modifyAccess = $query->permission_id;
        }

    }

    public function implementUpdateModify(){
        if($this->modifyRoleId != null){
            if($this->modifyTable == "All Tables"){
                DB::table('roles')->where('role_id', $this->modifyRoleId)->update(array('Academic Admission and Testing Support' => '1', 'Accounts Payable' => '1', 'Accounts Receivables' => '1', 'Alumni Portal' => '1', 'Budgeting' => '1', 'Cash Management/Billing' => '1', 'Clinic Portal' => '1', 'Discipline Module'=> '1', 'DRS' => '1', 'Employee Portal'=> '1', 'Enrollment' => '1', 'Faculty Portal' => '1', 'Financial Reporting' => '1', 'General Ledger' => '1', 'Guidance Module' => '1', 'Inventory'=> '1', 'Learning and Development/Employee Self Services/Others'=> '1', 'Legal Affairs Module'=> '1', 'Library Module'=> '1', 'PLM Asset and Supplies Inventory System' => '1', 'Procurement Management and Monitoring System'=>'1', 'Project Cost Accounting'=> '1', 'Purchasing' => '1', 'Recruitment/Selection/Placement/Personnel Records' => '1', 'Scholarship' => '1', 'Students Affair (Organization)' => '1', 'Student Information' => '1', 'Student Performance / Student Services' => '1', 'Student Portal' => '1'));
            }else{
                DB::table('roles')->where('role_id', $this->modifyRoleId)->update(
                    array(
                        'Academic Admission and Testing Support' => '0', 'Accounts Payable' => '0', 
                        'Accounts Receivables' => '0', 'Alumni Portal' => '0', 'Budgeting' => '0', 
                        'Cash Management/Billing' => '0', 'Clinic Portal' => '0', 'Discipline Module'=> '0', 
                        'DRS' => '0', 'Employee Portal'=> '0', 'Enrollment' => '0', 'Faculty Portal' => '0', 
                        'Financial Reporting' => '0', 'General Ledger' => '0', 'Guidance Module' => '0', 
                        'Inventory'=> '0', 'Learning and Development/Employee Self Services/Others'=> '0', 
                        'Legal Affairs Module'=> '0', 'Library Module'=> '0', 
                        'PLM Asset and Supplies Inventory System' => '0', 
                        'Procurement Management and Monitoring System'=>'0', 
                        'Project Cost Accounting'=> '0', 'Purchasing' => '0', 
                        'Recruitment/Selection/Placement/Personnel Records' => '0', 'Scholarship' => '0', 
                        'Students Affair (Organization)' => '0', 'Student Information' => '0', 
                        'Student Performance / Student Services' => '0', 'Student Portal' => '0'
                    ));
            }

            if($this->modifyTable == "All Tables"){
                DB::table('role_permissions')->where('role_id', $this->modifyRoleId)->update(array('permission_id' => $this->modifyAccess));
            }
            else{
                DB::table('roles')->where('role_id', $this->modifyRoleId)->update(array('role_name' => $this->modifyRoleName, `$this->modifyTable` => '1'));
                DB::table('role_permissions')->where('role_id', $this->modifyRoleId)->update(array('permission_id' => $this->modifyAccess));
            }
        }
    }

}
