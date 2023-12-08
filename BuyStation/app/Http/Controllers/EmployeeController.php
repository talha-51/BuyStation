<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index(Request $req)
    {
        $employee = DB::table('employees')->where('employee_id', $req->session()->get('employee_id'))->first();
        return view('employee.employeeHome')->with('employee', $employee);
    }
}
