<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:200'],
            'company' => ['nullable', 'string', 'max:100'],
            'message' => ['required', 'string', 'min:20', 'max:2000'],
            'budget'  => ['nullable', 'string', 'in:under_10k,10k_50k,50k_100k,over_100k,not_sure'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'name'    => 'namn',
            'email'   => 'e-postadress',
            'company' => 'företag',
            'message' => 'meddelande',
            'budget'  => 'budget',
        ];
    }
}
