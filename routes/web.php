<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\Backend\ClientReviewController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\HomePageController;
use App\Http\Controllers\Backend\InformationController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Models\ClientReview;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::controller(DashboardController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard','index')->name('admin-dashboard');
    Route::get('/admin/logout','destroy')->name('admin.logout');
});

Route::controller(ProfileController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/admin-profile','index')->name('admin.profile');
    Route::post('/admin-update-profile','updateProifle')->name('update-admin-profile');
    Route::get('/admin-password-change','changePassword')->name('change-password');
    Route::post('/admin-password-update','updatePassword')->name('update-admin-password');
});

Route::controller(HomePageController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/home-page','index')->name('update.home');
    Route::post('/update-home-page-data/{id}','updateData')->name('update-home-page-data');
});

Route::controller(ServiceController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/all-services-page','allService')->name('all.service');
    Route::get('/create-services-page','createService')->name('create.service');
    Route::post('/store-services','storeService')->name('store.service');
    Route::get('/edit-services/{id}','editService')->name('edit.service');
    Route::post('/update-services/{id}','updateService')->name('update.service');
    Route::post('/delete-services/{id}','deleteService')->name('delete-data');
});

Route::controller(ProjectController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/all-project-page','index')->name('all.projects');
    Route::get('/create-project-page','create')->name('create.project');
    Route::post('/store-project','store')->name('store.project');
    Route::get('/edit-project/{id}','editProject')->name('edit.project');
    Route::post('/update-project/{id}','updateProject')->name('update.project');
    Route::post('/delete-project/{id}','deletProject')->name('delete-project-data');
});

Route::controller(CourseController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/all-courses-page','index')->name('all.courses');
    Route::get('/create-courses-page','create')->name('create.courses');
    Route::post('/store-courses','store')->name('store.course');
    Route::get('/edit-course/{id}','edit')->name('edit.course');
    Route::post('/update-course/{id}','update')->name('update.course');
    Route::post('/delete-course/{id}','delete')->name('delete-course');
});

Route::controller(InformationController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/information-page','edit')->name('update.info');
    Route::post('/update-information-page/{id}','updateData')->name('update.info.data');
});

Route::controller(FooterController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/footer-page','edit')->name('footer.edit');
    Route::post('/update-footer-page/{id}','update')->name('update.footer');
});
Route::controller(ClientReviewController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/all-review-page','allLists')->name('all.review');
    Route::get('/create-review-page','create')->name('create.review');
    Route::post('/store-review','store')->name('store.review');
    Route::get('/edit-review/{id}','edit')->name('edit.review');
    Route::post('/update-review/{id}','update')->name('update.review');
    Route::post('/update-client-data/{id}','delete')->name('delete-client-data');
});
Route::controller(ContactController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/contact-list-page','list')->name('contact.lists');
    Route::post('/delete-contact-data/{id}','delete')->name('delete-contact');
});

Route::controller(AuthenticateController::class)->group(function(){
    Route::get('/admin','admin')->name('admin');
    Route::get('/admin-registration','registration')->name('admin-registration');
    Route::get('/admin-forget-password','forgetPassword')->name('admin-forget-password');
});
