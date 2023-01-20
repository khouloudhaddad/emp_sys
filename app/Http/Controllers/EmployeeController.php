<?php

namespace App\Http\Controllers;

use App\Jobs\ComputeSalary;
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
        $employee = Employee::find($request->id);

        ComputeSalary::dispatch($employee);
    }
}
