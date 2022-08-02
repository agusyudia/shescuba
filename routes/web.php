<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DiveCourseController;
use App\Http\Controllers\DiveTripsController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [WebsiteController::class, 'index'])->name('index');
Route::get('/divecourse', [WebsiteController::class, 'divecourse'])->name('divecourse');
Route::get('/divecoursedetail/{id}', [WebsiteController::class, 'divecoursedetail'])->name('divecoursedetail');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/divetrip', [WebsiteController::class, 'divetrip'])->name('divetrip');
Route::get('/galery', [WebsiteController::class, 'galery'])->name('galery');
Route::get('/divetripdetail/{id}', [WebsiteController::class, 'divetripdetail'])->name('divetripdetail');

Auth::routes();
// halaman admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

// halaman divecourse
Route::get('/admin/divecourse', [DiveCourseController::class, 'index'])->name('admin.divecourse');
Route::get('/admin/divecourse/create', [DiveCourseController::class, 'create'])->name('admin.addcourse');
Route::post('/admin/divecourse/create', [DiveCourseController::class, 'post'])->name('admin.addcourse.post');
Route::get('/admin/divecourse/edit/{id}', [DiveCourseController::class, 'edit'])->name('admin.editcourse');
Route::put('/admin/divecourse/edit/{id}', [DiveCourseController::class, 'update'])->name('admin.editcourse.put');
Route::delete('/admin/divecourse/delete/{id}', [DiveCourseController::class, 'delete'])->name('admin.deletecourse');

Route::get('/admin/divecourse/addimage/{id}', [DiveCourseController::class, 'addimage'])->name('admin.addimagecourse');
Route::post('/admin/divecourse/postimage', [DiveCourseController::class, 'postimage'])->name('admin.addimagecourse.post');

// halaman Dive trips
Route::get('/admin/divetrip', [DiveTripsController::class, 'index'])->name('admin.divetrip');
Route::get('/admin/divetrip/create', [DiveTripsController::class, 'create'])->name('admin.addtrips');
Route::post('/admin/divetrip/create', [DiveTripsController::class, 'post'])->name('admin.addtrips.post');
Route::get('/admin/divetrip/edit/{id}', [DiveTripsController::class, 'edit'])->name('admin.edittrips');
Route::put('/admin/divetrip/edit/{id}', [DiveTripsController::class, 'update'])->name('admin.edittrips.put');
Route::delete('/admin/divetrip/delete/{id}', [DiveTripsController::class, 'delete'])->name('admin.deletetrips');

Route::get('/admin/divetrip/addimage/{id}', [DiveTripsController::class, 'addimage'])->name('admin.addimagetrips');
Route::post('/admin/divetrip/postimage', [DiveTripsController::class, 'postimage'])->name('admin.addimagetrips.post');

// halaman trips
Route::get('/admin/trip', [TripsController::class, 'index'])->name('admin.trips');
Route::get('/admin/trip/create', [TripsController::class, 'create'])->name('admin.trip.addtrips');
Route::post('/admin/trip/create', [TripsController::class, 'post'])->name('admin.trip.addtrips.post');
Route::get('/admin/trip/edit/{id}', [TripsController::class, 'edit'])->name('admin.trip.edittrips');
Route::put('/admin/trip/edit/{id}', [TripsController::class, 'update'])->name('admin.trip.edittrips.put');
Route::delete('/admin/trip/delete/{id}', [TripsController::class, 'delete'])->name('admin.trip.deletetrips');

// halaman team
Route::get('/admin/team', [TeamController::class, 'index'])->name('admin.team');
Route::get('/admin/team/create', [TeamController::class, 'create'])->name('admin.addteam');
Route::post('/admin/team/create', [TeamController::class, 'post'])->name('admin.addteam.post');
Route::get('/admin/team/edit/{id}', [TeamController::class, 'edit'])->name('admin.editteam');
Route::put('/admin/team/edit/{id}', [TeamController::class, 'update'])->name('admin.editteam.put');
Route::delete('/admin/team/delete/{id}', [TeamController::class, 'delete'])->name('admin.deleteteam');

// halaman Galery
Route::get('/admin/galery', [GaleryController::class, 'index'])->name('admin.galery');
Route::get('/admin/galery/create', [GaleryController::class, 'create'])->name('admin.addgalery');
Route::post('/admin/galery/create', [GaleryController::class, 'post'])->name('admin.addgalery.post');
Route::delete('/admin/galery/delete/{id}', [GaleryController::class, 'delete'])->name('admin.deletegalery');
