<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|max:16|confirmed', // password_confirmation
            'phone' => ['required', 'regex:/^(03|05|07|08|09)[0-9]{8}$/'],
            'birthday' => 'nullable|date',
        ];
    }

    public function attributes(): array
    {
        return [
          'name' => 'Họ tên',
          'email' => 'Email',
          'password' => 'Mật khẩu',
          'phone' => 'Điện thoại',
          'birthday' => 'Ngày sinh',
        ];
    }
}
