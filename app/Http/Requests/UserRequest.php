<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'email' => 'required|email|string|max:70|unique:users',
            'idnumber' => 'unique:users'
        ];
    }

    public function attributes() {
        return [
            'phonenumber' => 'numero de telefono',
        ];
    }

    public function messages() {
        return [
            'email.unique' => 'Existe una cuenta con este :attribute',
            'idnumber.unique' => 'Existe una cuenta con esta identificacion',
        ];
    }

}
