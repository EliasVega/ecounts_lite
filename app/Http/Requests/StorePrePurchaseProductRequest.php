<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrePurchaseProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'document' => 'string|max:20',
            'invoice_code'=>'string|max:20',
            'generation_date'=> 'required|date',
            'due_date' => 'required|date',
            'items' => 'numeric',
            'total' => 'required|numeric',
            'total_iva' => 'required|numeric',
            'total_pay' => 'required|numeric',
            'pay' => '',
            'balance' => 'numeric',
            'start_date' => 'date',
            'retention' => 'numeric',
            'status' => 'in:active,debit_note,credit_note,adjustment_note',
            'branch_id' => 'integer',
            'supplier_id' => 'integer',
            'payment_form_id' => 'required|integer',
            'payment_method_id' => 'required',
            'percentage_id' => 'nullable|integer',
            'voucher_type_id' => 'integer'
        ];
    }
}
