<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
      protected $fillable = [
            'emp_name',
            'dob',
            'phone',
            
      ];
    use HasFactory;
}
