<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function verifyUser(Request $req)
    {
        $result = DB::table('employees')->where('employee_username', $req->employee_username)->where('employee_password', $req->employee_password)->first();

        if ($result) {
            $req->session()->put('employee_id', $result->employee_id);
            return redirect()->route('employee.index');
        } else {
            $req->session()->flash('msg', 'Incorrect Username or Password');
            return redirect()->route('login.index');
        }
    }

    public function logout(Request $req)
    {
        $req->session()->forget('employee_id');
        return redirect()->route('login.index');
    }
}
