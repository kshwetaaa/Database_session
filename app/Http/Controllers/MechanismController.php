<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MechanismController extends Controller
{
    public function index(){
        $data  = Mechanism::with('machine', 'parts')->get();
        return view('machinedetails', ['data'=>$data]);
    }
}
