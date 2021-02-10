<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommandeRequest extends FormRequest
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
            'states_id' => 'required|exists:states,id',
            'mobile'   => 'required|numeric|min:9',
            'commune'  => 'required|string|min:1',
            'code_postal'=> 'required|numeric|min:3',
            'comment'    => 'nullable|min:3',
        ];
    }
}
