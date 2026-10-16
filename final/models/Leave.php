<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'leave_date',
        'duration',
        'note',
        'priority',
        'leave_type',
        'validation',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
