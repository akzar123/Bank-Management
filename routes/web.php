<?php

use App\student;
use App\loan;
use App\branch;
use App\accounts;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
	
    return view('index');
});
Route::get('Adminlogin', function () {
	
    return view('Adminlogin');
});
Route::get('Userlogin', function () {
	
    return view('Userlogin');
});
Route::get('applyloan', function () {
	if(session('name'))
	{
		$res = loan::all();
		return view('applyloan',compact('res'));
	}
	else
	{
		return view('Userlogin');
	}
	
    
});
Route::post('addloanqry','homecontroller@addloanqry');
Route::get('addacc', function () {
	
        	if(session('name'))
	{
		$res = accounts::all();
		return view('addacc',compact('res'));
	}
	else
	{
		return view('Adminlogin');
	}
});

Route::post('/addaccqry','admincontroller@addaccqry');

Route::get('viewacc', function () {
	
        	if(session('name'))
	{
		$res = accounts::all();
		return view('viewacc',compact('res'));
	}
	else
	{
		return view('Adminlogin');
	}
});
Route::get('addbranch', function () {
	
    	if(session('name'))
	{
		$res = branch::all();
		return view('addbranch',compact('res'));
	}
	else
	{
		return view('Adminlogin');
	}
});
Route::post('/addbranchqry','admincontroller@addbranchqry');

Route::get('viewbranch', function () {
	
        	if(session('name'))
	{
		$res = branch::all();
		return view('viewbranch',compact('res'));
	}
	else
	{
		return view('Adminlogin');
	}
});
Route::get('viewloanapp', function () {
	
       	if(session('name'))
	{
		$res = loan::all();
		return view('viewloanapp',compact('res'));
	}
	else
	{
		return view('Adminlogin');
	}
});
Route::get('welcome', function () {
	if(session('name'))
	{
		return view('welcome');
	}
	else
	{
		return view('Adminlogin');
	}
});

Route::post('/adminLogin','admincontroller@adminLogin');

Route::get('/adminlogout','admincontroller@adminlogout');

Route::get('userwelcome', function () {
	if(session('name'))
	{
		return view('userwelcome');
	}
	else
	{
		return view('Userlogin');
	}
});

Route::post('/userLogin','homecontroller@userLogin');

Route::get('/alogout','homecontroller@alogout');

Route::get('form', function () {
	$res = student::all();
    return view('form',compact('res'));
});
Route::post('data',function(){
	$res = student::all();
	return view('data',compact('res'));
});
Route::post('addqry','homecontroller@addqry');

Route::get('editacc/{id}','admincontroller@editacc');

Route::post('editaccqry','admincontroller@editaccqry');

Route::get('deleteacc/{id}','admincontroller@deleteacc');

Route::get('editbranch/{id}','admincontroller@editbranch');

Route::post('editbranchqry','admincontroller@editbranchqry');

Route::get('deletebranch/{id}','admincontroller@deletebranch');

