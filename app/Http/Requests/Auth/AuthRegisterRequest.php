<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class AuthRegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:8',
            'email' => 'required|email',
            'password' => ['required', Password::min(8)->mixedCase()->letters()->numbers()->symbols()],
        ];
    }
}
