<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIndicatorRequest extends FormRequest
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
            'name'                    => 'required|max:4',
            'nit'                     => 'required|max:12',
            'dv'                      => 'required|max:2',
            'resolution'              => 'required|max:20',
            'date_from'               => 'required',
            'date_to'                 => 'required',
            'prefix'                  => 'required',
            'from'                    => 'required',
            'to'                      => 'required',
            'softwareI_id'            => 'required',
            'pin'                     => 'required|max:6',
            'technical_key'           => 'required',
            'document_version'        => 'required',
            'form_version'            => 'required',
            'country_code'            => 'required',
            'country'                 => 'required',
            'currency'                => 'required',
            'economic_activity'       => 'required',
            'postal_code'             => 'required',
            '>mercantil_registration' => 'required'
        ];
    }
}
