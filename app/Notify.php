<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notify extends Model
{
    protected $fillable = ['title', 'content', 'project_id', 'student_id'];
}
