<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserInsert extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //给表单校验请求类 授权
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    //设置表单请求规则
    public function rules()
    {
        return [
            //用户名不能为空规则 |   users 当操作的表
            "username"=>"required|regex:/\w{4,16}/|unique:users",
            //密码规则
            "password"=>"required|regex:/\w{6,18}/",
            //确认密码规则
            "repassword"=>"required|regex:/\w{6,18}/|same:password",
            //邮箱规则
            "email"=>"required|email|unique:users",
            //电话规则
            "phone"=>"required|regex:/\d{11}/|unique:users",




        ];
    }

    //自定义显示错误消息
    public function messages(){
        return [
            "username.required"=>"用户名不能为空",
            "username.regex"=>"用户名必须是4-16位任意的数字字母或者下划线",
            "username.unique"=>"用户名重复",
            "password.required"=>"密码不能为空",
            "password.regex"=>"密码必须是6-18位任意的数字字母或者下划线",
            "repassword.required"=>"确认密码不能为空",
            "repassword.regex"=>"确认密码必须是6-18位任意的数字字母或者下划线",
            "repassword.same"=>"两次密码不一致",
            "email.required"=>"邮箱不能为空",
            "email.email"=>"请填写正确的邮箱格式",
            "email.unique"=>"邮箱重复",
            "phone.required"=>"电话不能为空",
            "phone.regex"=>"请填写正确的电话格式",
            "phone.unique"=>"电话重复",
                ];
    }
}
