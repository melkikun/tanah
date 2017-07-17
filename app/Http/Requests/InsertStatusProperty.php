<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertStatusProperty extends FormRequest
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
            "jual"=>"required|min:1.00"
        ];
    }

    public function messages(){
        return [
            "jual.required"=>"harga jual harus diisi",
            "jual.min"=>"harga jual harus lebih besar dari 0"
        ];
    }
}
