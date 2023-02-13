<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PacienteController;
use App\Http\Controllers\Admin\TipoMedicamentoController;
use App\Http\Controllers\Admin\MedicamentoController;
use App\Http\Controllers\Admin\TipoAdministracionController;
use App\Http\Controllers\Admin\AdministracionController;
use App\Http\Controllers\Admin\AlergiaController;
use App\Http\Controllers\Admin\Gruposcie10Controller;
use App\Http\Controllers\Admin\Subgruposcie10Controller;
use App\Http\Controllers\Admin\Categoriascie10Controller;
use App\Http\Controllers\Admin\Diagnosticoscie10Controller;
use App\Http\Controllers\Admin\RecetaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PdfController;



Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

 Route::resource('users', UserController::class)->except('show')->names('admin.users');

 Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('tipomedicamento', TipoMedicamentoController::class)->except('show')->names('admin.tipomedicamento');
Route::resource('medicamento', MedicamentoController::class)->except('show')->names('admin.medicamento');

Route::resource('tipoadministracion', TipoAdministracionController::class)->except('show')->names('admin.tipoadministracion');
Route::resource('administracion', AdministracionController::class)->except('show')->names('admin.administracion');

Route::resource('alergia', AlergiaController::class)->except('show')->names('admin.alergia');

Route::resource('gruposcie10', Gruposcie10Controller::class)->except('show')->names('admin.gruposcie10');
Route::resource('subgruposcie10', Subgruposcie10Controller::class)->except('show')->names('admin.subgruposcie10');
Route::resource('categoriascie10', Categoriascie10Controller::class)->except('show')->names('admin.categoriascie10');
Route::resource('diagnosticoscie10', Diagnosticoscie10Controller::class)->except('show')->names('admin.diagnosticoscie10');


Route::resource('paciente', PacienteController::class)->except('show')->names('admin.paciente');

Route::resource('receta', RecetaController::class)->names('admin.receta');

Route::resource('pdf', PdfController::class)->names('admin.pdf');

/* Route::get('/admin/receta/{recetum}', [App\Http\Controllers\Admin\RecetaController::class, 'show']);
 */
/* Route::get('/receta/generate-pdf', [RecetaController::class, 'generatePDF']); */

/* Route::get('/employee/pdf', [EmployeeController::class, 'createPDF']); */