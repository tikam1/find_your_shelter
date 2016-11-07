<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProperty extends FormRequest
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
            'district' => 'required|alpha|min:5',
            'vdc_mun' => 'required|string|min:5',
            'ward' => 'required|numeric|min:1',
            'house' => 'required|numeric|min:1',
            'rooms' => 'required|numeric|min:1',
            'rent' => 'required|numeric|min:3',
            'tid' => 'required',
            'aid' => 'required',
            'features' => 'nullable',
            'notes' => 'nullable',
            'owner' => 'required|string|min:4',
            'address' => 'required|string|min:5',
            'contact' => 'required|numeric|min:10'
        ];
    }
}
