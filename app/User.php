<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'city',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //define database relationship

    /**
     * User has one or many tasks
     */
    public function tasks(){
        return $this->hasMany('App\Models\Task');
    }

    /**
     * User has one or many comments
     */
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    /**
     * User belongs to one role
     */
    public function role(){
        return $this->belongsTo('App\Models\Role');
    }

    /**
     * User has one or many companies
     */
    public function companies(){
        return $this->hasMany('App\Models\Company');
    }
}
