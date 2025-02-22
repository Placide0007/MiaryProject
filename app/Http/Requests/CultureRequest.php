<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CultureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required','string','max:255'],
            'description' => ['required','string','max:6000'],
            'image' => ['nullable','mimes:png,jpg,gif','max:20000'],
            'audio' => ['nullable', 'mimes:mp3,wav,ogg', 'max:20000'],
        ];
    }
}


