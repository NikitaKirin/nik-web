<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class WorkExperience extends Model
{
    use AsSource;

    protected $fillable = [
        'start_date',
        'end_date',
        'company_name',
        'position',
        'description',
        'hidden',
    ];

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = Carbon::make($value)->toDate();
    }

    public function setEndDateAttribute($value)
    {
        if (is_null($value)) {
            $this->attributes['end_date'] = $value;
        } else {
            $this->attributes['end_date'] = Carbon::make($value)->toDate();
        }
    }

}