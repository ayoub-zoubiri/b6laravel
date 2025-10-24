<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


// Route::get('', function () {
//     return view('home');
// });

// Route::get('/edit', function () {
//     return view('edit');
// });

// Route::get('/ajout', function () {
//     return view('ajout');
// });
// Route::get('/list', function () {
//     return view('list');
// });
// Route::get('/employe', function () {
//     return view('employe');
// });

Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
Route::post('/employees',  [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/create',  [EmployeeController::class, 'create'])->name('employees.create');
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');
Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

