<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePayinvoiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pay'             => '',
            'balance_invoice' => '',
            'status' => 'in:invoice,advance',
            'user_id'         => '',
            'branch_id'       => '',
            'invoice_id'      => '',
        ];
    }
}
