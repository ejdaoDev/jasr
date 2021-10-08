<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest {

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
            'name' => 'required|string|max:100|unique:products',
            'image' => 'max:10240',
            ];
    }

    public function attributes() {
        return [
            'name' => 'nombre',
            'image' => 'imagen principal',
        ];
    }

    public function messages() {
        return [            
            'name.unique' => 'No pueden haber dos productos con el mismo nombre',
            'image.max' => 'El archivo debe tener un peso maximo de 10Mb',
        ];
    }

}
