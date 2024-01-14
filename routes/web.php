<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
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

Route::get('/klanten/list', [ContactController::class, 'klantenList'])->name('contact.klantenList')->middleware(['auth', 'verified']);
Route::get('/contacts/list', [ContactController::class, 'contactList'])->name('contact.contactsList')->middleware(['auth', 'verified']);

Route::get('/contacts/addList/{info}', [ContactController::class, 'addList'])->name('contact.addList')->middleware(['auth', 'verified']);
Route::get('/contacts/add/{info}/{company}', [ContactController::class, 'add'])->name('contact.add')->middleware(['auth', 'verified']);

Route::get('/contacts/index', [ContactController::class, 'index'])->name('contact.index')->middleware(['auth', 'verified']);
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contact.store')->middleware(['auth', 'verified']);

Route::get('/klanten/edit/{info}', [ContactController::class, 'klantenEdit'])->name('klanten.edit')->middleware(['auth', 'verified']);
Route::put('/klanten/update', [ContactController::class, 'klantenUpdate'])->name('klanten.update')->middleware(['auth', 'verified']);

Route::get('/contacts/edit/{info}', [ContactController::class, 'contactEdit'])->name('contacts.edit')->middleware(['auth', 'verified']);
Route::put('/contacts/update', [ContactController::class, 'contactUpdate'])->name('contacts.update')->middleware(['auth', 'verified']);

Route::get('/contacts/delete/{info}', [ContactController::class, 'delete'])->name('contacts.delete')->middleware(['auth', 'verified']);

Route::get('/dashboard', [ContactController::class, 'counter'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
