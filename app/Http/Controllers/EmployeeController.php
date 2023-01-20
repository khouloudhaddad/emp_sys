<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function test(Request $request)
    {
        $salary = $request->salary;
        $name = $request->name;
        $employees = Employee::where('salary','>=', $salary)
        ->where('name','like','%'. $name.'%')
        ->orderBy('bonus')
        ->limit(3)->get();

        dd($employees);
    }
}
