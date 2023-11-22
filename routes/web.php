<?php
use App\Http\Controllers\EventController;
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

Route::get('/evaluation', [PageController::class, 'evaluation'])->name('evaluation');
Route::get('/view/{member}', [PageController::class, 'view'])->name('view');
Route::post('/view/{member}/remarks', [PageController::class, 'viewstore'])->name('viewstore');

Route::get('/adminmembers', [PageController::class, 'adminmembers'])->name('adminmembers');

Route::get('/attendance', [PageController::class, 'attendance'])->name('attendance');

Route::get('/edit/{member}', [PageController::class, 'edit'])->name('edit');
Route::put('/edit/{member}/update', [PageController::class, 'update'])->name('update');

Route::get('/annualfee', [PageController::class,'annualfee'])->name('annualfee');
Route::get('/fundraiser', [PageController::class, 'fundraiser'])->name('fundraiser');
Route::post('/fundraiser', [PageController::class, 'fundstore'])->name('fundstore');
Route::get('/treasury', [PageController::class, 'treasury'])->name('treasury');

Route::get('/addmember', [PageController::class, 'addmember'])->name('addmember');
Route::post('/addmember', [PageController::class, 'store'])->name('store');

Route::get('/proposal', [PageController::class, 'proposal'])->name('proposal');
Route::post('/proposal', [PageController::class, 'propstore'])->name('propstore');

Route::get('/registration', [PageController::class, 'registration'])->name('registration');
Route::post('/registration', [PageController::class, 'regstore'])->name('regstore');

Route::controller(EventController::class)->group(function () {
    Route::get('/adminhome', 'index')->name('event.get');
    Route::post('/adminhome', 'store')->name('event.store');
});

Route::get('/adminmemo', [PageController::class, 'adminmemo'])->name('adminmemo');
Route::post('/adminmemo', [PageController::class, 'memostore'])->name('memostore');
