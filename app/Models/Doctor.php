<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'specialization',
        'verified',
    ];

    // Relasi ke Appointments
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
