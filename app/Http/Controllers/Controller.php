<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

abstract class Controller
{
    //
    
    public function updateRoles(Request $request){
        dump($request->input('check_list'));
    }
}
