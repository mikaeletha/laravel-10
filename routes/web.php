<?php

use App\Http\Controllers\Admin\SupportController;
use Illuminate\Support\Facades\Route;
use Psy\SuperglobalsEnv;

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

// Lista tudo
Route::get('/supports', [SupportController::class, 'index'])->name('support.index');
// Criar
Route::get('/supports/create', [SupportController::class, 'create'])->name('support.create');
Route::post('/supports/create', [SupportController::class, 'store'])->name('support.store');
// Lista detalhes do item 
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('support.show');
// Editar
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('support.edit');
Route::put('/supports/{id}/edit', [SupportController::class, 'update'])->name('support.update');
// Remover
Route::delete('/supports/{id}', [SupportController::class, 'delete'])->name('support.delete');