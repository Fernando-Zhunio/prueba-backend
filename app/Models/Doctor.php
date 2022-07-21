<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'specialty',
        'email',
        'phone',
        'address',
        'city',
        'state',
    ];

    public function appointments()
    {
        return $this->hasMany('App\Models\appointment');
    }

    public function lastAppointment()
    {
        return $this->hasOne('App\Models\appointment')->latest();
    }
}
