<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Off extends Model
{
    protected $dates = [
        'off_given',
    ];
    
    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
