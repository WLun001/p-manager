<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'description', 'user_id',
    ];

    /**
     * Company belongs to a user
     */
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
