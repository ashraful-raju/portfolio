<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'sometimes', 'string'],
            'title' => ['string', 'nullable'],
            'about' => ['string', 'nullable'],

            'skill-title' => ['string', 'nullable'],
            'skill-about' => ['string', 'nullable'],

            'contact' => ['array', 'nullable']

        ];
    }

    function processData()
    {
        $data = [];

        foreach ($this->validated() as $key => $value) {
            $data["user-$key"] = $value;
        }

        return $data;
    }
}
