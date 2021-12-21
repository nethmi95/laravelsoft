<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{

    //Get all employees
    public function Index(){
        $Employeedata = Employee::all();
    
       return view('IndexEmployee')->with('Employeedata',$Employeedata);
    }

    //Save Employee
    public function Save(Request $request){

        $employee = new Employee;

        $this->validate($request,[
            'EmployeeName'=>'required',
            'EmployeeAddress'=>'required',
            'Designation'=>'required',
            'DateOfJoined'=>'required',
            'BasicSalary'=>'required',
            'ContactNumber'=>'required',
            'DepartmentId'=>'required',
            'ContractPeriodExpireDate'=>'required',
        ]);
        $employee->EmployeeName = $request->EmployeeName;
        $employee->EmployeeAddress = $request->EmployeeAddress;
        $employee->Designation = $request->Designation;
        $employee->DateOfJoined = $request->DateOfJoined;
        $employee->BasicSalary = $request->BasicSalary;
        $employee->ContactNumber = $request->ContactNumber;
        $employee->DepartmentId = $request->DepartmentId;
        $employee->ContractPeriodExpireDate = $request->ContractPeriodExpireDate;
        $employee->save();

        $Employeedata = Employee::all();
    
       return view('IndexEmployee')->with('Employeedata',$Employeedata);
    
    }

    //Delete Employee
    public function Delete($EmployeeId){
        $Employee = Employee::find($EmployeeId);
        $Employee->delete();
    
        return redirect()->back();
    }
    
    //Get pdate Employee Data
    public function UpdateView($EmployeeId){
        $Employee = Employee::find($EmployeeId);
    
       return view('UpdateEmployee')->with('Employee',$Employee);
    }

    // Update Employee Data
    public function UpdateData(Request $request , $id){

        $EmployeeData = Employee::find($id);

        $this->validate($request,[
            'EmployeeName'=>'required',
            'EmployeeAddress'=>'required',
            'Designation'=>'required',
            'DateOfJoined'=>'required',
            'BasicSalary'=>'required',
            'ContactNumber'=>'required',
            'DepartmentId'=>'required',
            'ContractPeriodExpireDate'=>'required',
        ]);
        $EmployeeData->EmployeeName = $request->EmployeeName;
        $EmployeeData->EmployeeAddress = $request->EmployeeAddress;
        $EmployeeData->Designation = $request->Designation;
        $EmployeeData->DateOfJoined = $request->DateOfJoined;
        $EmployeeData->BasicSalary = $request->BasicSalary;
        $EmployeeData->ContactNumber = $request->ContactNumber;
        $EmployeeData->DepartmentId = $request->DepartmentId;
        $EmployeeData->ContractPeriodExpireDate = $request->ContractPeriodExpireDate;
        $EmployeeData->save();

        

        $Employeedata = Employee::all();
        return view('IndexEmployee')->with('Employeedata',$Employeedata);
    }
}
