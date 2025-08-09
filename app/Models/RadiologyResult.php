<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RadiologyResult extends Model
{
    use HasFactory;
    protected $fillable = [
        'request_id',
        'image_path',
        'report',
        'technician_id',
        'uploaded_at',
    ];

    public function request()
    {
        return $this->belongsTo(RadiologyRequest::class, 'request_id');
    }

    public function technician()
    {
        return $this->belongsTo(RadiologyTechnician::class, 'technician_id');
    }
}
