<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:35',
            'email' => 'required|email|max:35',
            'phone' => 'required|string|max:18',
            'message' => 'required|string|max:500',
            'company' => 'max:0' // honeypot
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone number is required',
            'message.required' => 'Message is required',
        ];
    }
}
