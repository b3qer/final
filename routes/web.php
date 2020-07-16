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
    return view('main');
})->name('home');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', 'UserController@showRegister');
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('/logout', 'UserController@logout');

//Route::get('students', 'AdminController@showStudents');
Route::get('projects', 'AdminController@showProjects');

Route::get('project/{id}', 'UserController@showProject');

Route::post('/student/add/request', 'TeacherController@addRequest');

Route::get('/student/notification', 'UserController@showNotify');

Route::middleware(['auth'])->group(function () {
    Route::get('/edit/account/{id}', 'UserController@showEditAccount');
    Route::post('/edit/account', 'UserController@editAccount');
});
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', 'AdminController@dashboard');

    Route::get('/admin/request/students', 'AdminController@showRequestStudents');
    Route::post('/admin/accept/student', 'AdminController@acceptStudent');

    Route::get('/admin/request/teachers', 'AdminController@showRequestTeachers');
    Route::post('/admin/accept/teacher', 'AdminController@acceptTeacher');

    Route::get('/admin/request/projects', 'AdminController@showRequestProjects');
    Route::post('/admin/accept/project', 'AdminController@acceptProject');

    Route::get('/admin/students', 'AdminController@showStudents');
    Route::get('/admin/teachers', 'AdminController@showTeachers');

    Route::get('/admin/departments', 'AdminController@showDepartments');
    Route::post('/admin/departments', 'AdminController@addDepartment');
    Route::get('/admin/delete/department/{id}', 'AdminController@deleteDepartment');

    Route::get('/admin/reservations', 'AdminController@showReservations');
    Route::post('/admin/reservation', 'AdminController@checkReservation');

    Route::get('/admin/results', 'AdminController@showResults');

    Route::get('/admin/restart/system', 'AdminController@restartSystem');
    Route::get('/admin/settings', function () {
        return view('admin.settings');
    });
});
Route::middleware(['auth', 'isTeacher'])->group(function () {
    Route::get('/addproject', 'TeacherController@showAddProject');
    Route::get('/project/edit/{id}', 'TeacherController@showEditProject');
    Route::post('/project/edit', 'TeacherController@editProject');
    Route::get('/teacher/myProjects', 'TeacherController@myProjects');
    
    Route::get('/teacher/notification', 'TeacherController@showNotification');
    

    Route::post('/teacher/project', 'TeacherController@addProject');

    
});
