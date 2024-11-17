<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CinemaUpdateRequest extends FormRequest
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
        $id = $this->route('cinema');
        return [
            'location_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'cinema_code' => ['required', 'string', 'max:255', Rule::unique('cinemas')->ignore($id)->whereNull('deleted_at')],
        ];
    }

    public function attributes()
    {
        return [
            'location_id' => 'Quận, huyện',
            'name' => 'Tên rạp phim',
            'email' => 'Email',
            'phone' => 'Số điện thoại',
            'address' => 'Địa chỉ',
            'cinema_code' => 'Mã rạp phim',
        ];
    }
}
