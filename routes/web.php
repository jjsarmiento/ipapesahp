<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/*
	Make sure you have PHP installed and is set into environment path variable
	SERVE COMMAND : php -S localhost:8080 -t public/
*/

/*
$app->get('/', function () use ($app)
    return $app->version();
});
*/

// EMPLOYEE ROUTES -- START

$app->group(['middleware' => 'auth'], function () use ($app) {
	// Get employee list
	$app->get("/employees", "MasterController@SelectEmployeeList");

	// Get specific employee details
	$app->get("/employee={employee_id}", "MasterController@SelectEmployeeDetails");

	// Search for employees
	$app->post("/employees", "MasterController@SearchEmployee");

	// Update specific employee details
	$app->put('/employees','MasterController@UpdateEmployeeDetails');
	// Update specific employee details (Alternative route when used by Web app)
	$app->post('/employeeUpdate','MasterController@UpdateEmployeeDetails');

	// Delete specific employee from database
	$app->delete('/employees','MasterController@DeleteEmployee');
	// Delete specific employee from database (Alternative route when used by Web app)
	$app->post('/employeeDelete','MasterController@DeleteEmployee');
});

// EMPLOYEE ROUTES -- END
//php -S localhost:8080 -t .public/