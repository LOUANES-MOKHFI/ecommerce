<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeivsRequest extends FormRequest
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
            'fonction'   => 'required|min:3',
            'Fname'      => 'required',
            'Lname'      => 'required',

           // 'wilaya'     => 'required|exists:states,id',
            //'ville'      => 'required|exists:communes,id',

            'email'      => 'required|email',
            'phone'      => 'required|numeric',
            'brand_id'   => 'required|exists:brands,id',
            'product_id' => 'required|exists:products,id',
            'color'      => 'required',
            'format'     => 'required',
            'surfaces'   => 'required',
            'm_carrees'  => 'required',
            'message'    => 'nullable|min:10|max:255'
        ];
    }
}
