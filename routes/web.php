<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/forgotPassword', function () {
    return view('forgotPassword');
});

// User files layouts
Route::get('/dashboard', function () {
    return view('user.dashboard');
});

Route::get('/members', function () {
    return view('user.members');
});

Route::get('/addUser', function () {
    return view('user.addUser');
});

Route::get('/profile', function () {
    return view('user.profile');
});

Route::get('/compose', function () {
    return view('user.compose');
});

Route::get('/inbox', function () {
    return view('user.inbox');
});

Route::get('/bank', function () {
    return view('user.bank');
});

Route::get('/noticeBoard', function () {
    return view('user.noticeBoard');
});

Route::get('/projects', function () {
    return view('user.projects');
});

Route::get('/reports', function () {
    return view('user.reports');
});
// User files layouts



// common layouts files
Route::get('/fullcalender', function () {
    return view('layouts.fullcalender');
});

Route::get('/icons', function () {
    return view('layouts.icons');
});

Route::get('/blank', function () {
    return view('layouts.blank');
});

Route::get('/invoice', function () {
    return view('layouts.invoice');
});

Route::get('/error-404', function () {
    return view('layouts.error-404');
});

Route::get('/error-500', function () {
    return view('layouts.error-500');
});

Route::get('/error504', function () {
    return view('layouts.error504');
});
// common layouts files



// admin page layouts
Route::get('/admin_dashboard', function () {
    return view('admin.admin_dashboard');
});

Route::get('/admin_members', function () {
    return view('admin.admin_members');
});

Route::get('/admin_addUser', function () {
    return view('admin.admin_addUser');
});

Route::get('/admin_login', function () {
    return view('admin.admin_login');
});

Route::get('/admin_forgotPassword', function () {
    return view('admin.admin_forgotPassword');
});

Route::get('/admin_profile', function () {
    return view('admin.admin_profile');
});

Route::get('/admin_compose', function () {
    return view('admin.admin_compose');
});

Route::get('/admin_inbox', function () {
    return view('admin.admin_inbox');
});

Route::get('/admin_reports', function () {
    return view('admin.admin_reports');
});
// admin page layouts
