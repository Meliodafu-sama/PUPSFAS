<?php

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

Route::get('/', function () {
    return view('welcome');
});

//DASHBOARDS
Route::get('/admin/dashboard','Admin\DashboardController@show');
//Add Announcement - Route
Route::get('/admin/addannouncement','Admin\AnnouncementController@addAnnounce');
//Update Announcement - Route
Route::get('/admin/updateannouncement','Admin\AnnouncementController@updateAnnounce');
//View Announcement - Route
Route::get('/admin/viewannouncement','Admin\AnnouncementController@viewAnnounce');
//View Banner - Route
Route::get('/admin/banner','Admin\BannerController@show');
//Pending Sponsor - Route
Route::get('/admin/individual','Admin\PendingSponsorController@individual');
//Individual Sponsor - Route
Route::get('/admin/company','Admin\PendingSponsorController@company');
//About Us - Route
Route::get('/admin/aboutus','Admin\AboutusController@aboutus');
//Contact Us - Route
Route::get('/admin/contactus','Admin\ContactusController@show');