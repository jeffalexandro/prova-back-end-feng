<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'text', 'value'
    ];

    protected $hidden = [
        'question_id', 'created_at', 'updated_at',
    ];

    
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
