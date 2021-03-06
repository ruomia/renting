<?php

namespace App\Http\Requests\weixin;

use Illuminate\Foundation\Http\FormRequest;

class TuizuRequest extends FormRequest
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
            'username'=>' required ',
            'phone'=>' required ',
            'idcard'=>' required ',
            'address'=>' required ',
            'reason'=>' required ',
        ];
    }
    public function messages(){

        return [
            'username.required'=>'名字 不能为空',
            'phone.required'=>'手机号 不能为空',
            'idcard.required'=>'身份证 不能为空',
            'address.required'=>'地址 不能为空',
            'reason.required'=>'退租原因不能为空',

        ];
    }
}
