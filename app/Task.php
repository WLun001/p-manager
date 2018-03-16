<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'project_id',
        'user_id',
        'company_id',
        'hours',
        'days',
    ];

    /**
     * Task belongs to a user
     */
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Task belongs to a project
     */
    public function project(){
        return $this->belongsTo('App\Models\Project');
    }

    /**
     * Task belongs to a company
     */
    public function company(){
        return $this->belongsTo('App\Models\Company');
    }
}
