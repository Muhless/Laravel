<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeController extends Controller
{
    public function index(){
        $data = Employee::all();
        return view('datapegawai',compact('data'));
    }
}
