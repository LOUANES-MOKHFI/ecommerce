<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'nom'        => 'required|min:3',
            'prenom'     => 'required|min:3',
            'state_id'   => 'required|exists:states,id',
            'commune_id' => 'required|exists:communes,id',
            'adress'     => 'required|min:3',
            'phone'      => 'required|numeric',
            'fax'        => 'numeric',
            'email'      => 'required|email',
            'message'    => 'required|min:3',
            'typecontact'=> 'required|in:1,2,3',
        ];
    }
}
