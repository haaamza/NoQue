<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('pLogin','ApiController@patientLogin');
Route::post('pSignup','ApiController@patientSignUp');
Route::get('getDoctors','ApiController@getDoctors');
Route::post('dLogin','ApiController@doctorLogin');
Route::get('dAppointments','ApiController@getAppointments_d');
Route::get('getDoctorAppointments','ApiController@getDoctorAppointments');
Route::get('getPatients','ApiController@getPatients');
Route::post('mAppointment','ApiController@makeAppointment');
Route::get('pPrescriptions','ApiController@getPrescription');
Route::post('dPrescription','ApiController@makePrescription');
Route::get('getReSchedule','ApiController@reScheduleGetAppointment');
Route::post('updateAppointment','ApiController@updateAppointment');
