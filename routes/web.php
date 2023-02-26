<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Administrator routes
Route::group(['middleware' => ['jwt.auth', 'role:administrator', 'scope:manage-users,manage-roles,manage-customers,manage-invoices,manage-payments']], function () {
    Route::get('/users', 'UserController@index');
    Route::post('/users', 'UserController@store');
    Route::put('/users/{id}', 'UserController@update');
    Route::delete('/users/{id}', 'UserController@destroy');

    Route::get('/roles', 'RoleController@index');
    Route::post('/roles', 'RoleController@store');
    Route::put('/roles/{id}', 'RoleController@update');
    Route::delete('/roles/{id}', 'RoleController@destroy');

    Route::get('/customers', 'CustomerController@index');
    Route::post('/customers', 'CustomerController@store');
    Route::put('/customers/{id}', 'CustomerController@update');
    Route::delete('/customers/{id}', 'CustomerController@destroy');

    Route::get('/invoices', 'InvoiceController@index');
    Route::post('/invoices', 'InvoiceController@store');
    Route::put('/invoices/{id}', 'InvoiceController@update');
    Route::delete('/invoices/{id}', 'InvoiceController@destroy');

    Route::get('/payments', 'PaymentController@index');
    Route::post('/payments', 'PaymentController@store');
    Route::put('/payments/{id}', 'PaymentController@update');
    Route::delete('/payments/{id}', 'PaymentController@destroy');
});