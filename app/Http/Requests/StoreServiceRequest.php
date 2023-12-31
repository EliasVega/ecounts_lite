<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            'code'            => 'required|max:20',
            'name'            => 'required|max:100',
            'price'           => 'required',
            'status'          => '',
            'category_id'     => 'required',
            'unit_measure_id' => 'required'
        ];
    }
}
