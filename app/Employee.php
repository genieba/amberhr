<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'full_name',
        'email',
        'birth_date',
        'start_date',
        'annual_leave',
    ];

    protected $dates = [
        'birth_date',
        'start_date',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($lead) {
            $lead->full_name = $lead->first_name . ' ' . $lead->last_name;
        });
    }
    
    public function vacations()
    {
        return $this->hasMany('App\Vacation');
    }

    public function offs()
    {
        return $this->hasMany('App\Off');
    }
}
