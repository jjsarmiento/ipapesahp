<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Employee;

class MasterController extends Controller {

    private $ERR;

    public function __construct(){
        $this->ERR = [];
    }

    public function SelectEmployeeList(Request $request){
        return response()->json(Employee::all(), 200, [], JSON_PRETTY_PRINT);
    }

    public function SelectEmployeeDetails($employee_id){
        return response()->json(Employee::find($employee_id), 200, [], JSON_PRETTY_PRINT);
    }

    public function InsertEmployee(Request $request){
        return response()->json(Employee::create($request->all()));
    }

    public function UpdateEmployeeDetails(Request $request){
        // Find employee with ID
        $employee = Employee::find($request->ID);
        // Edit employee details from `POST || PUT` data -- START
        $employee->EMPLOYEE_CODE    = $request->EMPLOYEE_CODE;
        $employee->NAME_FIRST       = $request->NAME_FIRST;
        $employee->NAME_MID         = $request->NAME_MID;
        $employee->NAME_LAST        = $request->NAME_LAST;
        $employee->ADDRESS_CURR     = $request->ADDRESS_CURR;
        $employee->ADDRESS_PERM     = $request->ADDRESS_PERM;
        $employee->CONTACT_NUM_1    = $request->CONTACT_NUM_1;
        $employee->CONTACT_NUM_2    = $request->CONTACT_NUM_2;
        $employee->CONTACT_NUM_3    = $request->CONTACT_NUM_3;
        $employee->EMAIL_PERSONAL   = $request->EMAIL_PERSONAL;
        $employee->EMAIL_COMPANY    = $request->EMAIL_COMPANY;
        $employee->SKYPE_ID         = $request->SKYPE_ID;
        $employee->DATE_HIRED       = $request->DATE_HIRED;
        $employee->DATE_REGULARIZED = $request->DATE_REGULARIZED;
        $employee->DATE_RESIGNED    = $request->DATE_RESIGNED;
        $employee->PROFILE_PIC      = $request->PROFILE_PIC;
        $employee->SL_YEARLY        = $request->SL_YEARLY;
        $employee->VL_YEARLY        = $request->VL_YEARLY;
        $employee->STATUS_ID        = $request->STATUS_ID;
        $employee->POSITION_ID      = $request->POSITION_ID;
        $employee->NATIONALITY      = $request->NATIONALITY;
        $employee->BIRTHDATE        = $request->BIRTHDATE;
        $employee->JLPT_LEVEL       = $request->JLPT_LEVEL;
        $employee->REMARKS          = $request->REMARKS;
        $employee->CREATED_BY       = $request->CREATED_BY;
        $employee->UPDATE_BY        = $request->UPDATE_BY;
        $employee->CREATED_AT       = $request->CREATED_AT;
        $employee->UPDATED_AT       = $request->UPDATED_AT;
        $employee->DELFLG           = $request->DELFLG;
        $employee->save();
        // Edit employee details from `POST || PUT` data -- END
        return response()->json(Employee::find($request->ID), 200, [], JSON_PRETTY_PRINT);
    }

    public function DeleteEmployee(Request $request){
        return var_dump($request->all());
    }
}
