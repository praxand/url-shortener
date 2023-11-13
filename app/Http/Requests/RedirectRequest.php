<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RedirectRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'password' => 'required|string|max:255',
        ];
    }
}
