<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'annotation',
        'description',
        'technologies',
        'demo_link',
        'code_link',
    ];
}