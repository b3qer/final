<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['project_id', 'student_id', 'std_names', 'accept', 'teacher_id'];

    public function student()
    {
        return $this->belongsTo('App\User' , 'student_id', 'id');
    }
    public function project()
    {
        return $this->belongsTo('App\Project' , 'project_id', 'id');
    }
}
