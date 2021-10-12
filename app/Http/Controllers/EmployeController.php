<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('admin.employee.employee',[
            'emploies'=>$employees
        ]);
    }

    public  function addEmployee(){
        return view('admin.employee.add-employee');
    }

    public function saveEmployee(Request $request){
        $employee = new Employee();
        $employee->emp_firstname = $request->emp_firstname;
        $employee->emp_lastname = $request->emp_lastname;
        $employee->emp_comname = $request->emp_comname;
        $employee->emp_email = $request->emp_email;
        $employee->emp_phone = $request->emp_phone;
        $employee->save();

        return back()->with('message','Employee Information Saved Sucessfully');

    }
}
