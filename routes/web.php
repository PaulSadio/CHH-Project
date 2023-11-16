<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'signin'])->name('signin');
Route::get('/adminproposal', [PageController::class, 'adminproposal'])->name('adminproposal');
Route::get('/admin', [PageController::class, 'admin'])->name('admin');
Route::get('/member', [PageController::class, 'member'])->name('member');
Route::get('/announcement', [PageController::class, 'announcement'])->name('announcement');
Route::get('/registration', [PageController::class, 'registration'])->name('registration');
Route::get('/proposal', [PageController::class, 'proposal'])->name('proposal');
Route::get('/annualfee', [PageController::class,'annualfee'])->name('annualfee');
Route::get('/fundraiser', [PageController::class, 'fundraiser'])->name('fundraiser');
Route::get('/evaluation', [PageController::class, 'evaluation'])->name('evaluation');
Route::get('/adminmembers', [PageController::class, 'adminmembers'])->name('adminmembers');
Route::get('/adminmemo', [PageController::class, 'adminmemo'])->name('adminmemo');
Route::get('/treasury', [PageController::class, 'treasury'])->name('treasury');
Route::get('/attendance', [PageController::class, 'attendance'])->name('attendance');
Route::get('/addmember', [PageController::class, 'addmember'])->name('addmember');
Route::get('/view', [PageController::class, 'view'])->name('view');