<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackSubmitRequest extends FormRequest
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
            "nama"=>"required",
            "email"=>"required|email",
            "subject"=>"required",
            "message"=>"required"
        ];
    }

    public function messages(){
        return [
        "nama.required"=>"nama harus diisi",
        "email.required"=>"email harus diisi",
        "email.email"=>"email harus valid",
        "subject.required"=>"subject harus diisi",
        "message.required"=>"message harus diisi",
        ];
    }
}
