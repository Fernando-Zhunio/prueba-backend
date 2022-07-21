<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'type',
        'status',
        'description',
        'observation',
        'pet_id',
        'client_id',
        'doctor_id',
    ];

    public function pet()
    {
        return $this->belongsTo('App\Models\Pet');
    }

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor');
    }
}
