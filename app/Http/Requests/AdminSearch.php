<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminSearch extends FormRequest
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
            'district' => 'required|alpha|min:2',
            'vdc_mun' => 'required|string|min:2',
            'ward' => 'required|numeric|min:1',
            'house' => 'required|numeric|min:1',
        ];
    }
}
