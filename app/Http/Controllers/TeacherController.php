<?php

namespace App\Http\Controllers;

use App\Notify;
use Illuminate\Http\Request;
use App\Project;
use App\Request as AppRequest;
use Validator;
use App\User;
use App\Reservation;
use App\Department;


class TeacherController extends Controller
{
    public function showAddProject()
    {
        $departments = Department::all();
        return view('addProject', ['departments' => $departments]);
    }
    public function addProject(Request $request)
    {
        // return $request;

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'field' => 'required',
            'note' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors(['message' => ['Please fill inputs with correct data']]);
        }
        $request['teacher_id'] = auth()->user()->id;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $request['picture'] =  '/images' . '/' . $name;
        }

       $project = Project::create($request->all());
       Notify::create([
            'title' => 'New Project Added',
            'content' => 'Title : '.$project->title.', Supervisor : '.$project->teacher->name
       ]);
        return back()->with('done', 'Uploaded done, wait while admin accept project');
    }
    public function showEditProject($id)
    {
        $departments = Department::all();
        $project = Project::findOrFail($id);
        if ($project->teacher_id != auth()->user()->id)
            return redirect()->back();
        return view('Teacher.editProject', ['project' => $project, 'departments' => $departments]);
    }

    function editProject(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'field' => 'required',
            'note' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors(['message' => ['Please fill inputs with correct data']]);
        }
        if (isset($request['delete'])) {
            Project::findOrFail($request['id'])->delete();
            return redirect('/teacher/myProjects');
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $request['picture'] =  '/images' . '/' . $name;
        }

        $project = Project::findOrFail($request['id'])->update($request->all());
        return back()->with('done', 'Updated done');
    }
    public function myProjects()
    {
        //auth user id
        $projects = auth()->user()->projects()->where('accept', true)->get();
        return view('Teacher.myProjects', ['projects' => $projects]);
    }
    public function showReservations()
    {
        //auth user id
        $reservations = auth()->user()->reservation()->where('accept', false)->get();
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
    public function addRequest(Request $request)
    {
        $names = "";
        if (isset($request['name1']))
            $names .= $request['name1'];
        if (isset($request['name2']))
            $names .= ", " . $request['name2'];
        if (isset($request['name3']))
            $names .= ", " . $request['name3'];
        if (isset($request['name4']))
            $names .= ", " . $request['name4'];
        if (isset($request['name5']))
            $names .= ", " . $request['name5'];

        Reservation::create([
            'teacher_id' => $request['teacher_id'],
            'project_id' => $request['project_id'],
            'student_id' => auth()->user()->id,
            'std_names' => $names

        ]);
        return back()->with('done', 'Reservation done');
    }
    public function showNotification()
    {
        $notification = auth()->user()->reservation()->where('accept', true)->with(['project'])->get();
        return view('teacher.notification', ['notification' => $notification]);
    }
}
