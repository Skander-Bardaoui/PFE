<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Conges extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_name',
        'start_date',
        'end_date',
        'reason',
    ];

}
