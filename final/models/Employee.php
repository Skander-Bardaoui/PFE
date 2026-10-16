<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'position',
        'email',
        'seniority',
        'status',
        'bank_account',
        'cin',
        'mobile',
        'work_mobile',
        'cnss_number',
        'employee_note',
        'leave_rights',
        'token_leave_days',
        'token_sick_leave_days',
        'start_time',
        'user_id', 
    ];

    public function employeeUser()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function employeeContact()
    {
        return $this->belongsTo(Contact::class,'contact_id');
    }

    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }
}
