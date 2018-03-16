<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'company_id',
        'user_id',
        'days',
    ];

    /**
     * Project belongs to a company
     */
    public function company(){
        return $this->belongsTo('App\Models\Company');
    }

    /**
     * Project belongs to a user
     */
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
