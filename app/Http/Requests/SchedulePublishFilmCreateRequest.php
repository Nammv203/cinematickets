<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchedulePublishFilmCreateRequest extends FormRequest
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
            'film_id' => 'required|exists:films,id',
            'cinema_room_id' => 'required|exists:cinema_rooms,id',
            'show_date' => 'required|date',
            'show_time' => 'required|date_format:H:i',
            'ticket_price' => 'required|integer|digits_between:1,10',
            'description' => 'nullable|string',
            'status' => 'required|in:0,1',
        ];
    }

    public function attributes(): array
    {
        return [
            'film_id' => 'Phim',
            'cinema_room_id' => 'Phòng chiếu',
            'show_date' => 'Ngày chiếu',
            'show_time' => 'Giờ chiếu',
            'ticket_price' => 'Giá vé',
            'description' => 'Mô tả',
            'status' => 'Trạng thái',
        ];
    }
}
