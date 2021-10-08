<?php

namespace App\Http\Requests\Categories;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest {

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
            'name' => 'required|string|min:3|max:50|unique:categories',
            'icon' => 'mimes:svg|max:5120'            
        ];
    }

    public function attributes() {
        return [
            'name' => 'nombre',
            'icon' => 'icono',
        ];
    }

    public function messages() {
        return [
            'name.min' => 'El nombre debe contener al menos 3 caracteres',
            'name.unique' => 'Ya existe otra categoría con este nombre',
            'icon.mimes' => 'El archivo solo puede ser de tipo .svg',
            'icon.max' => 'El archivo debe tener un peso maximo de 5Mb',
        ];
    }

}
