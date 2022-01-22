<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMeetingRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|min:3|max:255',
            'desc' => 'nullable|string|max:16000',
            'meeting_at' => 'required|date',
        ];
    }
}
