<?php

namespace App\Http\Requests\WorkExperience;

use Illuminate\Foundation\Http\FormRequest;

class WorkExperienceCreateOrEditRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'start_date'   => ['required'],
            'end_date'     => ['nullable'],
            'company_name' => ['required', 'string'],
            'position'     => ['required', 'string'],
            'description'  => ['required', 'string'],
            'hidden'       => ['required', 'boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}