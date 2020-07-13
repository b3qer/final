<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name'];
    public function teachers()
    {
        return $this->hasMany('App\User' , 'department_id', 'id');
    }
    public function projects()
    {
        return $this->hasMany('App\Project' , 'department_id', 'id');
    }
}
