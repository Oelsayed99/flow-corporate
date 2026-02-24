<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'experience_level' => 'required|string|in:student,0-2,3-5,5+',
            'university' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ];
    }
}
