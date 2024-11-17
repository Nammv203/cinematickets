<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => ['required', 'regex:/^(03|05|07|08|09)[0-9]{8}$/'],
            'password' => 'required|string|min:6|max:16',
            'birthday' => 'required',
            'role_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên người dùng',
            'email' => 'Email',
            'phone' => 'Số điện thoại',
            'password' => 'Mật khẩu',
            'birthday' => 'Ngày sinh',
            'role_id' => 'Vai trò',
        ];
    }
}
