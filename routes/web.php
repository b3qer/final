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
Route::get('/test', function () {
    return view('admin.settings');
});
Route::get('/login', function () {
    return view('login');
});
// Route::get('/register', function () {
//     return view('register');
// });
Route::get('/register', 'UserController@showRegister');
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('/logout', 'UserController@logout');

//Route::get('students', 'AdminController@showStudents');
Route::get('projects', 'AdminController@showProjects');
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

Route::get('/admin/restart/system', 'AdminController@restartSystem');

Route::get('project/{id}', 'UserController@showProject');
Route::post('/teacher/project', 'TeacherController@addProject');
// Route::get('/addproject', function () {
//     return view('addProject');
// });
Route::get('/addproject', 'TeacherController@showAddProject');
Route::get('/project/edit/{id}', 'TeacherController@showEditProject');
Route::post('/project/edit', 'TeacherController@editProject');
Route::get('/teacher/myProjects', 'TeacherController@myProjects');
Route::get('/edit/account/{id}', 'UserController@showEditAccount');
Route::post('/edit/account', 'UserController@editAccount');

Route::get('/teacher/reservations', 'TeacherController@showReservations');
Route::post('/teacher/reservation', 'TeacherController@checkReservation');

Route::get('/admin/settings', function () {
    return view('admin.settings');
});

Route::post('/student/add/request', 'TeacherController@addRequest');

Route::get('/student/notification', 'UserController@showNotify');
