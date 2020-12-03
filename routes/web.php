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
    return view('welcome');
});

#**************Admin***********************

Route::get('/avatar', function () {
    return view('Admin/Avatar');
});


Route::get('/college', function () {
    return view('Admin/Colloge');
});


Route::get('/department', function () {
    return view('Admin/Department');
});


Route::get('/index', function () {
    return view('Admin/index');
});


Route::get('/sseq', function () {
    return view('Admin/SSEQ');
});


Route::get('/ssexam', function () {
    return view('Admin/SSExam');
});

Route::get('/ssquestion', function () {
    return view('Admin/SSQuestion');
});

Route::get('/sstesolution', function () {
    return view('Admin/SSTESolution');
});

Route::get('/sstexam', function () {
    return view('Admin/SSTExam');
});

Route::get('/staffsubject', function () {
    return view('Admin/StaffSubjec');
});

Route::get('/studentsubject', function () {
    return view('Admin/StudentSubject');
});

Route::get('/subject', function () {
    return view('Admin/Subject');
});

Route::get('/university', function () {
    return view('Admin/University');
});

Route::get('/user', function () {
    return view('Admin/User');
});

