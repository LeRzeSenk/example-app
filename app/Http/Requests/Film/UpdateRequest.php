<?php

namespace App\Http\Requests\Film;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'status' => 'required|integer',
            'poster_url' => 'mimes:jpeg,jpg,bmp,png',
            'genre_ids' => 'nullable',
            'genre_ids.*' => 'required|integer|exists:genres,id',
        ];
    }
}
