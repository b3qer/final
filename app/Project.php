<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'teacher_id', 'department_id', 'std_number', 'field', 'accept', 'note', 'picture','requested'];
    public function projectRequests()
    {
        return $this->hasMany('App\Request' , 'project_id', 'id');
    }
    public function teacher()
    {
        return $this->belongsTo('App\User' , 'teacher_id', 'id');
    }
    public function department()
    {
        return $this->belongsTo('App\Department' , 'department_id', 'id');
    }
}
