<?php

namespace App\Http\Requests;

use Dingo\Api\Http\FormRequest;


class StoreFruitRequest extends FormRequest
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
            'name'      => 'required|unique:fruits',
            'color'     => 'required|alpha',
            'weight'    => 'required|numeric',
            'delicious' => 'required|boolean'
        ];
    }

}
