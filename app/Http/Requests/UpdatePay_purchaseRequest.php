<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePay_purchaseRequest extends FormRequest
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
            'pay'              => '',
            'balance_purchase' => '',
            'status' => 'in:purchase,payment',
            'user_id'          => '',
            'branch_id'        => '',
            'purchase_id'      => '',
        ];
    }
}
