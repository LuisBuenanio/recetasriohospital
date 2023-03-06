<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PacienteController;
use App\Http\Controllers\Admin\MedicamentoController;
use App\Http\Controllers\Admin\Gruposcie10Controller;
use App\Http\Controllers\Admin\Subgruposcie10Controller;
use App\Http\Controllers\Admin\Categoriascie10Controller;
use App\Http\Controllers\Admin\Diagnosticoscie10Controller;
use App\Http\Controllers\Admin\RecetaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PdfController;
use App\Http\Controllers\Admin\ImprimirRecetaController;
use App\Http\Controllers\Admin\ExampleController;
use App\Http\Controllers\Admin\MedicamentoRecetaController;




Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

 Route::resource('users', UserController::class)->except('show')->names('admin.users');

 Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('medicamento', MedicamentoController::class)->except('show')->names('admin.medicamento');


Route::resource('gruposcie10', Gruposcie10Controller::class)->except('show')->names('admin.gruposcie10');
Route::resource('subgruposcie10', Subgruposcie10Controller::class)->except('show')->names('admin.subgruposcie10');
Route::resource('categoriascie10', Categoriascie10Controller::class)->except('show')->names('admin.categoriascie10');
Route::resource('diagnosticoscie10', Diagnosticoscie10Controller::class)->except('show')->names('admin.diagnosticoscie10');


Route::resource('paciente', PacienteController::class)->except('show')->names('admin.paciente');


Route::resource('receta', RecetaController::class)->names('admin.receta');
Route::post('/receta/getPacientes/','App\Http\Controllers\Admin\RecetaController@getPacientes')->name('admin.receta.getPacientes');
Route::post('/receta/getDiagnosticoscie10/','App\Http\Controllers\Admin\RecetaController@getDiagnosticoscie10')->name('admin.receta.getDiagnosticoscie10');


Route::get('/imprimir/{id}', [ImprimirRecetaController::class, 'imprimirpdf'])->name('admin.imprimirpdf');

Route::post('receta/{id}/medicamentos', [MedicamentoRecetaController::class, 'store'])->name('admin.receta.medicamentos.store');

Route::post('/receta/agregar-medicamento', [RecetaController::class, 'agregarMedicamento']);
/* Route::get('/buscar/pacientes', [BuscarPacienteController::class, 'pacientes'])->name('admin.buscar.pacientes');
 

Route::get('buscar', [BuscarPacienteController::class, 'index'])->name('search');
Route::get('autocomplete', [BuscarPacienteController::class, 'autocomplete'])->name('autocomplete');

Route::get('/','App\Http\Controllers\EmployeesController@index');

Route::post('/employees/getEmployees/','App\Http\Controllers\EmployeesController@getEmployees')->name('employees.getEmployees');

Route::get('/example/{id}', [ExampleController::class, 'show'])->name('example.show'); */