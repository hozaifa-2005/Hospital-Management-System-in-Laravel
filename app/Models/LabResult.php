<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabResult extends Model
{
    use HasFactory;
    protected $fillable = [
        'request_id',
        'result_data',
        'technician_id',
        'uploaded_at',
    ];


    public function request()
    {
        return $this->belongsTo(LabRequest::class, 'request_id');
    }

    public function technician()
    {
        return $this->belongsTo(LabTechnician::class, 'technician_id');
    }
}
