<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    protected $dates = [
        'leave_start',
        'leave_end',
    ];

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
