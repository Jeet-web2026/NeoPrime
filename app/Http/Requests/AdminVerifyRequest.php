<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminVerifyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'admin-email' => 'required|email',
            'admin-password' => 'required|min:8',
        ];
    }

    public function messages(): array
    {
        return [
            'admin-email.required' => 'Email is required',
            'admin-email.email' => 'Email must be a valid email address',
            'admin-password.required' => 'Password is required',
            'admin-password.min' => 'Password must be at least 8 characters',
        ];
    }
}
