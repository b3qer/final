<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = ['project_id', 'student_id', 'std_names', 'accept'];

    public function student()
    {
        return $this->belongsTo('App\User' , 'student_id', 'id');
    }
    public function project()
    {
        return $this->belongsTo('App\Project' , 'project_id', 'id');
    }
}
