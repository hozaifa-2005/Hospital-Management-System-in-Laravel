<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receptionist extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'desk_number',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
