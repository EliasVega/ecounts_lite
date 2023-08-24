<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCashoutRequest extends FormRequest
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

            'admin'       => 'required',
            'reason'      => 'required',
            'payment'     => 'required',
            'admin_id'    => 'required',
            'sale_box_id' => '',
            'user_id'     => '',
            'branch_id'   => ''
        ];
    }
}
