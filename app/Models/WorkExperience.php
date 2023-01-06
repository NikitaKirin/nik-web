<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $fillable = [
        'start_date',
        'end_date',
        'company_name',
        'position',
        'description',
        'hidden',
    ];
}