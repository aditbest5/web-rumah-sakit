<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AppointmentController;




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

// Read
Route::get('/', [HomeController::class, 'utama']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/appointment', [HomeController::class, 'appointment']);
Route::post('/appointment/store', [HomeController::class, 'tambah']);

Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/single-blog', [HomeController::class, 'singleBlog']);
Route::get('/contact', [HomeController::class, 'contact']);




Route::middleware(['auth'])->group(function () {
    // Read
    Route::get('/admin', [AdminController::class, 'main']);
    Route::get('/admin/spesialis', [AdminController::class, 'indexSpesialis']);
    Route::get('/admin/dokter', [AdminController::class, 'indexDokter']);

    Route::get('/admin/spesialis/create', [AdminController::class, 'create']);
    Route::post('/admin/spesialis/store', [AdminController::class, 'store']);
    Route::get('/admin/spesialis/{spesialis_id}/info', [AdminController::class, 'show']);
    // Update
    Route::get('/admin/spesialis/{spesialis_id}/update', [AdminController::class, 'updateForm']);
    Route::put('/admin/spesialis/{spesialis_id}', [AdminController::class, 'update']);
    // Delete
    Route::delete('/admin/spesialis/{spesialis_id}/delete', [AdminController::class, 'destroy']);



    Route::get('/admin/dokter/create', [AdminController::class, 'createDokter']);
    Route::post('/admin/dokter/store', [AdminController::class, 'storeDokter']);
    Route::get('/admin/dokter/{dokter_id}/info', [AdminController::class, 'showDokter']);
    // Update
    Route::get('/admin/dokter/{dokter_id}/update', [AdminController::class, 'updateFormDokter']);
    Route::put('/admin/dokter/{dokter_id}', [AdminController::class, 'updateDokter']);
    // Delete
    Route::delete('/admin/dokter/{dokter_id}/delete', [AdminController::class, 'destroyDokter']);
    Route::get('/admin/checkup', [AppointmentController::class, 'tampil']);



    //Profile
    Route::resource('pasien', PasienController::class)->only(['index', 'update']);
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
