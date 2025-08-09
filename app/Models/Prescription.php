<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $fillable = [
        'visit_id',
        'medicine_name',
        'dosage',
        'duration',
        'notes',
    ];

    public function visit()
    {
        return $this->belongsTo(Visit::class);
    }
}
