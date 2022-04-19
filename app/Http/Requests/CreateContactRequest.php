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
            'HọvàTên' => 'required',
            'email' => 'required|email',
            'Sốđiệnthoại' => 'required',
            'Nộidungliênhệ' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'HọvàTên.required' => 'Họ và Tên không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Định dạng Email không đúng. Ví dụ abc@gmail.com',
            'Sốđiệnthoại.required' => 'Số điện thoại không được để trống',
            'Nộidungliênhệ.required' =>  'Nội dung liên hệ không được để trống'
        ];
    }
}
