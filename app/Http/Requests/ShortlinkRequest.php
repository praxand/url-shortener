<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShortlinkRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'original_link' => 'required|url',
            'password' => 'nullable|string|min:8|max:255',
            'expires_at' => 'nullable|date',
        ];
    }
}
