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

Route::get('/klant/gegevens/{info}', [ContactController::class, 'klantGegevens'])->name('klant.gegevens')->middleware(['auth', 'verified']);

Route::get('/klanten/list', [ContactController::class, 'klantenList'])->name('contact.klantenList')->middleware(['auth', 'verified']);
Route::get('/contacts/list', [ContactController::class, 'contactList'])->name('contact.contactsList')->middleware(['auth', 'verified']);
Route::get('/conversation/list', [ContactController::class, 'conversationList'])->name('contact.conversationList')->middleware(['auth', 'verified']);


Route::get('/contacts/addList/{info}', [ContactController::class, 'addList'])->name('contact.addList')->middleware(['auth', 'verified']);
Route::get('/contacts/add/{info}/{company}', [ContactController::class, 'add'])->name('contact.add')->middleware(['auth', 'verified']);


Route::get('/conversation/{info}', [ContactController::class, 'conversation'])->name('contact.conversation')->middleware(['auth', 'verified']);


Route::get('/contacts/index', [ContactController::class, 'index'])->name('contact.index')->middleware(['auth', 'verified']);
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contact.store')->middleware(['auth', 'verified']);

Route::get('/klanten/edit/{info}', [ContactController::class, 'klantenEdit'])->name('klanten.edit')->middleware(['auth', 'verified']);
Route::put('/klanten/update/{info}', [ContactController::class, 'klantenUpdate'])->name('klanten.update')->middleware(['auth', 'verified']);

Route::get('/contacts/edit/{info}', [ContactController::class, 'contactEdit'])->name('contacts.edit')->middleware(['auth', 'verified']);
Route::put('/contacts/update/{info}', [ContactController::class, 'contactUpdate'])->name('contacts.update')->middleware(['auth', 'verified']);

Route::get('/contacts/delete/{info}', [ContactController::class, 'delete'])->name('contacts.delete')->middleware(['auth', 'verified']);


Route::post('/conversation/store/{info}', [ContactController::class, 'conversationStore'])->name('contact.conversationStore')->middleware(['auth', 'verified']);

Route::get('/conversation/edit/{info}', [ContactController::class, 'conversationEdit'])->name('conversation.edit')->middleware(['auth', 'verified']);
Route::put('/conversation/update/{info}', [ContactController::class, 'conversationUpdate'])->name('conversation.update')->middleware(['auth', 'verified']);

Route::get('/dashboard', [ContactController::class, 'counter'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
