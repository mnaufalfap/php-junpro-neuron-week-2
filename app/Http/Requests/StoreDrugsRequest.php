<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDrugsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'drugs_id' => 'required|unique:drugs,drugs_id|min:6|max:6',
            'drugs_name' => 'required',
            'drugs_class' => 'required',
            'drugs_type' => 'required',
            'drugs_unit' => 'required',
            'drugs_prices' => 'required',
        ];
    }
}
