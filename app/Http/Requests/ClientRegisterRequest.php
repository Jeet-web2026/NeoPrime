<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'client-email' => 'required|email|unique:client_registers,email',
            'client-name' => 'required|string',
            'client-address' => 'required',
            'client-address-second' => 'required',
            'client-country' => 'required|string',
            'client-state' => 'required|string',
            'client-city' => 'required|string',
            'client-zip' => 'required|numeric'
        ];
    }

    public function messages(): array
    {
        return  [
            'client-email.required' => 'Email Required',
            'client-email.email' => 'Email Should be a valid email',
            'client-email.unique' => 'Email already exist',
            'client-name.required' => 'Name required',
            'client-address.required' => 'Address required',
            'client-address-second.required' => 'Address 2 required',
            'client-country.required' => 'Country Required',
            'client-state.required' => 'State required',
            'client-city.required' => 'City required',
            'client-zip.required' => 'Pincode required',
            'client-zip.numeric' => 'Valid pincode required'
        ];
    }
}
