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
Route::get('/backoffice/about', [AboutController::class, 'index'])->name('abouts.index');

// create
Route::get('/backoffice/about/create', [AboutController::class, 'create'])->name('abouts.create');
Route::post('/backoffice/about/store', [AboutController::class, 'store'])->name('abouts.store');

// show
Route::get('/backoffice/about/{id}', [AboutController::class, 'show'])->name('abouts.show');

// delete
Route::delete('/backoffice/about/{id}/delete', [AboutController::class, 'destroy'])->name('abouts.destroy');
Route::get('/backoffice/about/deleteAll', [AboutController::class, 'destroyAll'])->name('abouts.destroyAll');

// edit
Route::get('/backoffice/about/{id}/edit', [AboutController::class, 'edit'])->name('abouts.edit');
Route::put('/backoffice/about/{id}/update', [AboutController::class, 'update'])->name('abouts.update');

// ________________________________________________________________________________________________
// SKILLS
Route::get('/backoffice/skills', [SkillController::class, 'index'])->name('skills.index');

// create
Route::get('/backoffice/skills/create', [SkillController::class, 'create'])->name('skills.create');
Route::post('/backoffice/skills/store', [SkillController::class, 'store'])->name('skills.store');

// show
Route::get('/backoffice/skills/{id}', [SkillController::class, 'show'])->name('skills.show');

// delete
Route::delete('/backoffice/skills/{id}/delete', [SkillController::class, 'destroy'])->name('skills.destroy');
Route::get('/backoffice/skills/deleteAll', [SkillController::class, 'destroyAll'])->name('skills.destroyAll');

// edit
Route::get('/backoffice/skills/{id}/edit', [SkillController::class, 'edit'])->name('skills.edit');
Route::put('/backoffice/skills/{id}/update', [SkillController::class, 'update'])->name('skills.update');

// ________________________________________________________________________________________________
// PROJETS
Route::get('/backoffice/projets', [ProjetController::class, 'index'])->name('projets.index');

// create
Route::get('/backoffice/projets/create', [ProjetController::class, 'create'])->name('projets.create');
Route::post('/backoffice/projets/store', [ProjetController::class, 'store'])->name('projets.store');

// show
Route::get('/backoffice/projets/{id}', [ProjetController::class, 'show'])->name('projets.show');

// delete
Route::delete('/backoffice/projets/{id}/delete', [ProjetController::class, 'destroy'])->name('projets.destroy');
Route::get('/backoffice/projets/deleteAll', [ProjetController::class, 'destroyAll'])->name('projets.destroyAll');

// edit
Route::get('/backoffice/projets/{id}/edit', [ProjetController::class, 'edit'])->name('projets.edit');
Route::put('/backoffice/projets/{id}/update', [ProjetController::class, 'update'])->name('projets.update');

// ________________________________________________________________________________________________
// CONTACT
Route::get('/backoffice/contact', [ContactController::class, 'index'])->name('contacts.index');

// create
Route::get('/backoffice/contact/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/backoffice/contact/store', [ContactController::class, 'store'])->name('contacts.store');

// show
Route::get('/backoffice/contact/{id}', [ContactController::class, 'show'])->name('contacts.show');

// delete
Route::delete('/backoffice/contact/{id}/delete', [ContactController::class, 'destroy'])->name('contacts.destroy');
Route::get('/backoffice/contact/deleteAll', [ContactController::class, 'destroyAll'])->name('contacts.destroyAll');

// edit
Route::get('/backoffice/contact/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/backoffice/contact/{id}/update', [ContactController::class, 'update'])->name('contacts.update');