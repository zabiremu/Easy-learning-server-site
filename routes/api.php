<?php

use App\Http\Controllers\Backend\ChartController;
use App\Http\Controllers\Backend\ClientReviewController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\HomePageController;
use App\Http\Controllers\Backend\InformationController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\ServiceController;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// chart controller
Route::get('/chart-data',[ChartController::class,'index']);

// client review
Route::get('/client-review',[ClientReviewController::class,'index']);

// contact from
Route::post('/contact',[ContactController::class,'index']);

// course 
Route::get('/home-course',[CourseController::class,'homePage']);
Route::get('/all/course',[CourseController::class,'allCourse']);
Route::get('/course-details/{courseID}',[CourseController::class,'courseDetails']);

// footer
Route::get('/footer-details',[FooterController::class,'index']);

// Infotmation
Route::get('/info-details',[InformationController::class,'index']);

// Infotmation
Route::get('/all-services',[ServiceController::class,'index']);

// Project
Route::get('/all-projects',[ProjectController::class,'allProjects']);
Route::get('/home-page-projects',[ProjectController::class,'homeProject']);
Route::get('/home-page-projects-details/{projectID}',[ProjectController::class,'projectDetails']);


// Home Page etc
Route::get('/home-title',[HomePageController::class,'homeTitle']);
Route::get('/home-tech',[HomePageController::class,'homeTech']);
Route::get('/home-page-summary',[HomePageController::class,'homeSummary']);
Route::get('/home-page-video-description',[HomePageController::class,'videoDesc']);