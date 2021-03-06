<?php

namespace App\Http\Controllers;

use App\Department;
use App\Notify;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Project;
use App\Reservation;

class UserController extends Controller
{
    public function showRegister()
    {
        $departments = Department::all();
        return view('register', ['departments' => $departments]);
    }
    public function register(Request $request)
    {
        // return $request;

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors(['message' => ['Please fill inputs with correct data']]);
        }
        if ($request['type'] == 2) {
            $user = User::create([
                'name' => $request['name'],
                'username' => $request['username'],
                'password' => Hash::make($request['password']),
                'pure_password' => $request['password'],
                'department_id' => $request['department'],
                'email' => $request['email'],
                'degree' => $request['degree'],
                'role_id' => $request['type']
            ]);
        } else {

            $user = User::create([
                'name' => $request['name'],
                'username' => $request['username'],
                'password' => Hash::make($request['password']),
                'pure_password' => $request['password'],
                'role_id' => $request['type']
            ]);
        }

        return back()->with('done', 'Register done, wait while admin accept register');
    }
    public function login(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors(['message' => ['Please fill inputs with correct data']]);
        }
        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']])) {
            $user = Auth::user();
            if ($user->active) {
                return redirect('/');
            } else
                return back()->withErrors(['message' => ['Please, wait while admin accept register']]);
        } else {
            return back()->withErrors(['message' => ['Please, write correct username or password']]);
        }
    }
    public function showProject($id)
    {
        $project = Project::findOrFail($id);
        $count = 0;
        if (auth()->user())
            $count = Reservation::where('student_id', auth()->user()->id)->where('accept', true)->get()->count();

        $done = true;
        if ($count > 0)
            $done = false;

        return view('projectDetails', ['project' => $project, 'done' => $done]);
    }
    public function showEditAccount($id)
    {
        if (auth()->user()->role_id != 1) {
            if (auth()->user()->id != $id)
                return redirect()->back();
        }
        $degrees = array('Prof. Dr.', 'Ass. Prof. Dr.', 'Lecturer Dr.', 'Lecturer', 'Ass. Lecturer');
        $departments = Department::all();
        $user = User::findOrFail($id);
        return view('editAccount', ['user' => $user, 'departments' => $departments, 'degrees' => $degrees]);
    }
    public function editAccount(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors(['message' => ['Please fill inputs with correct data']]);
        }
        if (isset($request['delete'])) {
            $user = User::findOrFail($request['id']);
            $reservation = $user->reservation()->get();

            foreach ($reservation as $d) {
                $d->delete();
            }
            $stdReservation = $user->stdReservation()->get();

            foreach ($stdReservation as $d) {
                $d->delete();
            }

            $projects = $user->projects()->get();
            foreach ($projects as $d) {
                $d->delete();
            }
            $user->delete();
            return redirect('/');
        }
        if (isset($request['password'])) {
            //return $request['password'];
            $request['pure_password'] = $request['password'];
            $request['password'] = Hash::make($request['password']);
            // return $request['pure_password'];
        }
        $user = User::findOrFail($request['id'])->update($request->all());
        return back()->with('done', 'Updated done');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
    public function showNotify()
    {
        $notifications = Notify::where('student_id', null)
            ->orWhere('student_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        return view('Student.notification', ['notifications' => $notifications]);
    }
}
