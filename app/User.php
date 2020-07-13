<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'pure_password',
        'picture', 'department_id', 'degree','active','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function studentRequests()
    {
        return $this->hasMany('App\Request' , 'student_id', 'id');
    }
    public function department()
    {
        return $this->belongsTo('App\Department' , 'department_id', 'id');
    }
    public function projects()
    {
        return $this->hasMany('App\Project' , 'teacher_id', 'id');
    }
    public function reservation()
    {
        return $this->hasMany('App\Reservation' , 'teacher_id', 'id');
    }
}
