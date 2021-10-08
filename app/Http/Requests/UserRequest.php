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
            'idnumber' => 'unique:users',
            'password' => 'required|string|min:6|max:20|confirmed',
        ];
    }

    public function attributes() {
        return [
            'password' => 'contraseñas',
            'phonenumber' => 'numero de telefono',
        ];
    }

    public function messages() {
        return [
            'password.confirmed' => 'Las :attribute no coinciden',
            'password.min' => 'Las :attribute deben contener al menos 6 caracteres',
            'email.unique' => 'Existe una cuenta con este :attribute',
        ];
    }

}
