<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmCreateRequest extends FormRequest
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
            'derector' => 'required',
            'actor' => 'required',
            'amount' => 'required',
            'category_id' => 'required',
            'picture' => 'required',
            'time_duration' => 'required',
            'publish_at' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Trường tên là bắt buộc.',
            'derector.required' => 'Trường đạo diễn là bắt buộc.',
            'actor.required' => 'Trường diễn viên là bắt buộc.',
            'amount.required' => 'Trường số tiền là bắt buộc.',
            'type_film.required' => 'Trường loại phim là bắt buộc.',
            'picture.required' => 'Trường hình ảnh là bắt buộc.',
            'time_duration.required' => 'Trường thời lượng là bắt buộc.',
            'publish_at.required' => 'Trường thời gian xuất bản là bắt buộc.'
        ];
    }
}
