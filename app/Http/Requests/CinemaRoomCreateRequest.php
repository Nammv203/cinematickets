<?php

namespace App\Http\Requests;

use App\Rules\CinemaRoomCodeUniqueRule;
use Illuminate\Foundation\Http\FormRequest;

class CinemaRoomCreateRequest extends FormRequest
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
        $cinema_id = request('cinema_id');
        $room_code = request('room_code');

        return [
            'cinema_id' => 'required|integer|exists:cinemas,id',
            'room_code' => ['required','string','max:255', new CinemaRoomCodeUniqueRule($cinema_id, $room_code,null)],
        ];
    }

    public function attributes()
    {
        return [
          'cinema_id' => 'Rạp phim',
          'room_code' => 'Mã phòng',
        ];
    }
}
