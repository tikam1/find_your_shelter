<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProperty extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'district' => 'required|max:225',
            'vdc_mun' => 'required',
            'ward' => 'required',
            'house' => 'required',
            'rooms' => 'required',
            'rent' => 'required',
            'tid' => 'required',
            'aid' => 'required',
            'features' => 'required',
            'notes' => 'required',
            'owner' => 'required',
            'contact' => 'required',
            'address' => 'required',
        ];
    }
}
