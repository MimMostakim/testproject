<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin-company','CompanyController@index')->name('admin-company');
Route::get('/add-company','CompanyController@addCompany')->name('add-company');
Route::post('/save-company','CompanyController@saveCompany')->name('save-company');
Route::get('/edit-company/{id}', 'CompanyController@editCompany')->name('edit-company');
Route::post('/update-company', 'CompanyController@Updatecompany')->name('update-company');
Route::get('/delete-company/{id}', 'CompanyController@DeleteCompany')->name('delete-company');

Route::get('/admin-employee','EmployeController@index')->name('admin-employee');
Route::get('/add-employee','EmployeController@addEmployee')->name('add-employee');
Route::post('/save-employee','EmployeController@saveEmployee')->name('save-employee');
Route::get('/edit-employee/{id}', 'EmployeController@editEmployee')->name('edit-employee');
Route::post('/update-employee', 'EmployeController@UpdateEmployee')->name('update-employee');
Route::get('/delete-employee/{id}', 'EmployeController@DeleteEmployee')->name('delete-employee');
