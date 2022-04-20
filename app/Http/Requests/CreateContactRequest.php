<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateContactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'contact' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Họ và Tên không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Định dạng Email không đúng. Ví dụ abc@gmail.com',
            'phone.required' => 'Số điện thoại không được để trống',
            'contact.required' =>  'Nội dung liên hệ không được để trống'
        ];
    }
}
