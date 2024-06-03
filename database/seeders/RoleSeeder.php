<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = 0;
        DB::table('login_roles')->insert([
         ['id' => $role++, 'role' => 'Regular Student'],
         ['id' => $role++, 'role' => 'Regular Employee'],
         ['id' => $role++, 'role' => 'Accounting Office Staff'],
         ['id' => $role++, 'role' => 'VP of Finance'],
         ['id' => $role++, 'role' => 'Senior Computer Operator'],
         ['id' => $role++, 'role' => 'Budgeting Office Staff'],
         ['id' => $role++, 'role' => 'Treasurer\'s Office Staff'],
         ['id' => $role++, 'role' => 'Property and Supply Office Staff'],
         ['id' => $role++, 'role' => 'Head of Accounting'],
         ['id' => $role++, 'role' => 'OVFP View'],
         ['id' => $role++, 'role' => 'Purchasing Admin'],
         ['id' => $role++, 'role' => 'Inventory User'],
         ['id' => $role++, 'role' => 'Proj Cost Admin'],
         ['id' => $role++, 'role' => 'Proj cost user'],
         ['id' => $role++, 'role' => 'Section Heads and Canvassers'],
         ['id' => $role++, 'role' => 'Head of the Procurement Office'],
         ['id' => $role++, 'role' => 'Procurement Users'],
         ['id' => $role++, 'role' => 'Asset Management user'],
         ['id' => $role++, 'role' => 'Supplies Management User'],
         ['id' => $role++, 'role' => 'Student Perf Admin'],
         ['id' => $role++, 'role' => 'College Chairperson'],
         ['id' => $role++, 'role' => 'Registrar'],
         ['id' => $role++, 'role' => 'Part-Time Faculty'],
         ['id' => $role++, 'role' => 'Full-Time Faculty'],
         ['id' => $role++, 'role' => 'College Dean'],
         ['id' => $role++, 'role' => 'Faculty Admin'],
         ['id' => $role++, 'role' => 'HR Admin'],
         ['id' => $role++, 'role' => 'Department Head'],
         ['id' => $role++, 'role' => 'Hr Employee'],
         ['id' => $role++, 'role' => 'Alumni Admin'],
         ['id' => $role++, 'role' => 'Alumni'],
         ['id' => $role++, 'role' => 'OPA'],
         ['id' => $role++, 'role' => 'OSDS Staff'],
         ['id' => $role++, 'role' => 'Osds Dean'],
         ['id' => $role++, 'role' => 'College Dean'],
         ['id' => $role++, 'role' => 'USO'],
         ['id' => $role++, 'role' => 'OSDS Secretariat'],
         ['id' => $role++, 'role' => 'Student Officer'],
         ['id' => $role++, 'role' => 'Nurse'],
         ['id' => $role++, 'role' => 'Doctor'],
         ['id' => $role++, 'role' => 'Library Admin'],
         ['id' => $role++, 'role' => 'Counselor'],
         ['id' => $role++, 'role' => 'Counselor Head'],
         ['id' => $role++, 'role' => 'Legal Admin'],
         ['id' => $role++, 'role' => 'L&D Admin'],
         ['id' => $role++, 'role' => 'HR Chief'],
         ['id' => $role++, 'role' => 'Recruitment Admin'],
         ['id' => $role++, 'role' => 'Personnel Management Admin'],
         ['id' => $role++, 'role' => 'Compensation and Benefits Admin'],
         ['id' => $role++, 'role' => 'Recruitment Staff'],
         ['id' => $role++, 'role' => 'Admission Admin'],
        ]);
    }
}
