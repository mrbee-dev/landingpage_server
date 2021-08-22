<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LandingpageRequest extends FormRequest
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
            'fullname'  => 'required',
            'email'     => 'required|email',
            'phone'     => 'required|alpha_num|size:10',
            'content'   => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Vui lòng nhập Họ và Tên',
            'email.required'    => 'Vui lòng nhập Email',
            'email.email'       => 'Email không đúng định dạng',
            'phone.required'    => 'Vui lòng nhập Số Điện Thoại',
            'phone.size'        => 'Số Điện Thoại không đúng định dạng',
            'phone.alpha_num'   => 'Số Điện Thoại không đúng định dạng',
            'content.required'  => 'Vui lòng nhập Nội Dung',
        ];
    }
}
