<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'text', 'type'
    ];

    protected $hidden = [
        'form_id', 'created_at', 'updated_at',
    ];

    
    public function form()
    {
        return $this->belongsTo('App\Form');
    }

    public function options()
    {
        return $this->hasMany('App\Option');
    }
}
