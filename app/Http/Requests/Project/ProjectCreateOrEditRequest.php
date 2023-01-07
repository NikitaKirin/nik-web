<?php

namespace App\Http\Requests\Project;

use Illuminate\Foundation\Http\FormRequest;

class ProjectCreateOrEditRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'        => ['required', 'string'],
            'annotation'   => ['required', 'string'],
            'description'  => ['required', 'string'],
            'technologies' => ['required', 'string'],
            'demo_link'    => ['nullable', 'url'],
            'code_link'    => ['nullable', 'url'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}