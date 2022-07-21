<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'name',
        'type',
        'breed',
        'age',
        'weight',
        'height',
        'color',
        'description',
        'observation',
        'image',
        'user_id',
    ];
    use HasFactory;

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function appointments()
    {
        return $this->hasMany('App\Models\Appointment');
    }
}
