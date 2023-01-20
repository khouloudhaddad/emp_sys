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
        $employee = Employee::find($id);

        return redirect()->route('employee.show', [$employee.id]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function showEmployee(Request $request)
    {
        $employee = Employee::find($request->id);
        dd($employee->toArray());
    }
}
