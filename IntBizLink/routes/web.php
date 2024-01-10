<?php

use App\Http\Controllers\AdminPanelControllers\AdminPanelController;
use App\Http\Controllers\BusinessShowCaseControllers\BusinessShowCaseController;
use App\Http\Controllers\ClientPanelControllers\ClientPanelController;
use App\Http\Controllers\SuperAdminPanelControllers\SuperAdminPanelController;
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

Route::get('/',[BusinessShowCaseController::class,'homePage'])->name('home.page');
Route::get('/contact',[BusinessShowCaseController::class,'contactPage'])->name('contact.page');
Route::post('/contact/submit',[BusinessShowCaseController::class,'contactFormSubmit'])->name('contact.form.submit');
Route::get('/client-login',[BusinessShowCaseController::class,'clientLoginPage'])->name('client.login.page');


Route::get('/client-panel/home', [ClientPanelController::class,'clientDashboard'])->name('client.dashboard');

Route::get('/admin-panel/home', [AdminPanelController::class, 'adminDashboard'])->name('admin.dashboard');

Route::get('/super-admin-panel/home', [SuperAdminPanelController::class, 'superDashboard'])->name('super.admin.dashboard');
