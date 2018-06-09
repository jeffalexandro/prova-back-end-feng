<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'name', 'description', 'category', 'basePoints', 'startDate', 'endDate', 'isActive', 'alreadyAnswered'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    
    public function questions()
    {
        return $this->hasMany('App\Question');
    }    
    
}
