<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InputProperty extends FormRequest
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
            "judul"=>"required|unique:property,judul",
            "deskripsi"=>"required",
            "harga"=>"required",
            "panjang"=>"required",
            "lebar"=>"required",
            "foto"=>"required"
        ];
    }

    public function messages(){
        return [
        "judul.required"=>"judul property harus diisi",
        "judul.unique"=>"judul property sudah ada. silahkan cari yang lain",
        "deskripsi.required"=>"deskripsi property harus diisi",
        "harga.required"=>"harga property harus diisi",
        "panjang.required"=>"panjang property harus diisi",
        "lebar.required"=>"lebar property harus diisi",
        "foto.required"=>"foto wajib di sertakan minimal 1"
        ];
    }
}
