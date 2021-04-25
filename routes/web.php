<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AllController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

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

// frontend
// all controller 
Route::get('/', [AllController::class, 'index'])->name('home');

// backend
Route::get('/backoffice/index', function () {
    return view('backoffice.index');
})->name('admin');

// CRUD
// ABOUT
// read
Route::get('/admin/about', [AboutController::class, 'index'])->name('abouts.index');

// create
Route::get('/admin/about/create', [AboutController::class, 'create'])->name('abouts.create');
Route::post('/admin/about/store', [AboutController::class, 'store'])->name('abouts.store');

// show
Route::get('/admin/about/{id}', [AboutController::class, 'show'])->name('abouts.show');

// delete
Route::delete('/admin/about/{id}/delete', [AboutController::class, 'destroy'])->name('abouts.destroy');
Route::get('/admin/about/deleteAll', [AboutController::class, 'destroyAll'])->name('abouts.destroyAll');

// edit
Route::get('/admin/about/{id}/edit', [AboutController::class, 'edit'])->name('abouts.edit');
Route::put('/admin/about/{id}/update', [AboutController::class, 'update'])->name('abouts.update');

// ________________________________________________________________________________________________
// SKILLS
Route::get('/admin/skills', [SkillController::class, 'index'])->name('skills.index');

// create
Route::get('/admin/skills/create', [SkillController::class, 'create'])->name('skills.create');
Route::post('/admin/skills/store', [SkillController::class, 'store'])->name('skills.store');

// show
Route::get('/admin/skills/{id}', [SkillController::class, 'show'])->name('skills.show');

// delete
Route::delete('/admin/skills/{id}/delete', [SkillController::class, 'destroy'])->name('skills.destroy');
Route::get('/admin/skills/deleteAll', [SkillController::class, 'destroyAll'])->name('skills.destroyAll');

// edit
Route::get('/admin/skills/{id}/edit', [SkillController::class, 'edit'])->name('skills.edit');
Route::put('/admin/skills/{id}/update', [SkillController::class, 'update'])->name('skills.update');

// ________________________________________________________________________________________________
// PROJETS
Route::get('/admin/projets', [ProjetController::class, 'index'])->name('projets.index');

// create
Route::get('/admin/projets/create', [ProjetController::class, 'create'])->name('projets.create');
Route::post('/admin/projets/store', [ProjetController::class, 'store'])->name('projets.store');

// show
Route::get('/admin/projets/{id}', [ProjetController::class, 'show'])->name('projets.show');

// delete
Route::delete('/admin/projets/{id}/delete', [ProjetController::class, 'destroy'])->name('projets.destroy');
Route::get('/admin/projets/deleteAll', [ProjetController::class, 'destroyAll'])->name('projets.destroyAll');

// edit
Route::get('/admin/projets/{id}/edit', [ProjetController::class, 'edit'])->name('projets.edit');
Route::put('/admin/projets/{id}/update', [ProjetController::class, 'update'])->name('projets.update');

// ________________________________________________________________________________________________
// CONTACT
Route::get('/admin/contact', [ContactController::class, 'index'])->name('contacts.index');

// create
Route::get('/admin/contact/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/admin/contact/store', [ContactController::class, 'store'])->name('contacts.store');

// show
Route::get('/admin/contact/{id}', [ContactController::class, 'show'])->name('contacts.show');

// delete
Route::delete('/admin/contact/{id}/delete', [ContactController::class, 'destroy'])->name('contacts.destroy');
Route::get('/admin/contact/deleteAll', [ContactController::class, 'destroyAll'])->name('contacts.destroyAll');

// edit
Route::get('/admin/contact/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/admin/contact/{id}/update', [ContactController::class, 'update'])->name('contacts.update');