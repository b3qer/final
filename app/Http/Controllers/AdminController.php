<?php

namespace App\Http\Controllers;

use App\Department;
use App\Notify;
use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\Reservation;
use Auth;
use Validator;

class AdminController extends Controller
{
   public function dashboard()
   {
      $students = User::where('role_id', 3)->where('active', true)->get()->count();
      $teachers = User::where('role_id', 2)->where('active', true)->get()->count();
      $projects = Project::where('accept', true)->where('requested', false)->get()->count();
      return view('admin.main', ['students' => $students, 'teachers' => $teachers, 'projects' => $projects]);
   }
    public function showStudents()
    {
       $students = User::where('role_id', 3)->orderBy('created_at', 'desc')->where('active', true)->get();
       return view('admin.students', ['students' => $students]);
    }
    public function showProjects()
    {
       $projects = Project::where('accept', true)->orderBy('created_at', 'desc')->where('requested', false)->get();
       return view('projects', ['projects' => $projects]);
    }
    public function showRequestStudents()
    {
       $students = User::where('role_id' , 3)->orderBy('created_at', 'desc')->where('active', false)->get();
       return view('admin.requestStudents', ['students'=> $students]);
    }
    public function acceptStudent(Request $request)
    {
       $std = User::findOrFail($request['id'])->update(['active' => true]);
       return back()->with('done', 'Accepted Done');
    }
    public function showRequestTeachers()
    {
       $teachers = User::where('role_id' , 2)->orderBy('created_at', 'desc')->where('active', false)->get();
       return view('admin.requestTeachers', ['teachers'=> $teachers]);
    }
    public function acceptTeacher(Request $request)
    {
       $teacher = User::findOrFail($request['id'])->update(['active' => true]);
       return back()->with('done', 'Accepted Done');
    }

    public function showRequestProjects()
    {
       $projects = Project::where('accept' , false)->orderBy('created_at', 'desc')->get();
       return view('admin.requestProjects', ['projects'=> $projects]);
    }
    public function acceptProject(Request $request)
    {
       $project = Project::findOrFail($request['id'])->update(['accept' => true]);
       return back()->with('done', 'Accepted Done');
    }
    public function showTeachers()
    {
       $teachers = User::where('role_id', 2)->orderBy('created_at', 'desc')->where('active', true)->get();
       return view('admin.teachers', ['teachers' => $teachers]);
    }
    public function showDepartments()
    {
       $departments = Department::OrderBy('created_at', 'desc')->get();
       return view('admin.department', ['departments' => $departments]);
    }
    public function deleteDepartment($id)
    {
       Department::findOrFail($id)->delete();
       return back()->with('done', 'Delete Done');
    }
    public function addDepartment(Request $request)
    {
      Department::create([
         'name' => $request['name']
      ]);
      return back();
    }
    public function restartSystem()
    {
       Department::truncate();
       Project::truncate();
       Reservation::truncate();
       Notify::truncate();
       User::truncate();
       User::create([
         'name' => 'admin',
         'username' => 'admin',
         'password' => Hash::make('123'),
         'pure_password'=> '123',
         'role_id' => 1,
         'department_id' => null,
         'degree' => null,
         'email' => null,
         'active' => true
       ]);
       Auth::logout();
       return redirect('/');
    }
    public function showReservations()
    {
        //auth user id
        $reservations = Reservation::Where('accept', false)->orderBy('created_at', 'desc')->get();
        return view('requests', ['reservations' => $reservations]);
    }
    public function checkReservation(Request $request)
    {
        // return $request;
        $reservation = Reservation::findOrFail($request['id']);
        Notify::create([
            'title' => 'Accept Your Request',
            'content' => 'Your Request for '.$reservation->title.' Project With '.$reservation->teacher->name,
            'student_id' => $reservation->student_id
        ]);
        $reservation->update(['accept' => true]);
        $project = $reservation->project()->first()->update(['requested' => true]);
        return back()->with('done', 'Reservation done');
    }
    public function showResults()
    {
       $reservations = Reservation::where('accept', true)->orderBy('created_at', 'desc')->get();
       return view('admin.results', ['reservations' => $reservations]);
    }
}
