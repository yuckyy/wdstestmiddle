<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = false;//disable timestamp
    protected $fillable = [
        'reviewer',
        'email',
        'review',
        'rating',
        'employee',
        'employees_position',
        'unique_employee_number',
        'company',
        'company_description'
    ];
}
