<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurgeryLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'surgery_id',
        'item_used',
        'quantity',
        'remarks',
    ];

    public function surgery()
    {
        return $this->belongsTo(Surgery::class);
    }
}
