<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressStoreUpdate extends FormRequest
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
            'city_id' => ['required', 'exists:cities,id'],
            'address' => ['required', 'string', 'min:3' ,'max:255'],
            'district' => ['required', 'string', 'min:3', 'max:50'],
            'number' => ['required', 'string', 'min:1', 'max:10']
        ];
    }
}
