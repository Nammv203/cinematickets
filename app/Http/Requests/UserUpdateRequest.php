<?php

namespace App\Rules;

use App\Models\CinemaRoom;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CinemaRoomCodeUniqueRule implements ValidationRule
{
    protected $cinema_id;

    protected $room_code;


    protected $room_id;

    public function __construct($cinema_id, $room_code, $room_id)
    {
        $this->cinema_id = $cinema_id;
        $this->room_code = $room_code;
        $this->room_id = $room_id;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        try {
            $cinemaId = $this->cinema_id;
            $roomCode = $this->room_code;
            $roomId = $this->room_id;

            $roomCodeOfCinemaExists = CinemaRoom::where('cinema_id',$cinemaId)
                ->where('room_code',$roomCode)
                ->when($roomId, function ($query, $roomId) {
                    return $query->where('id','!=',$roomId);
                })
                ->exists();

    }
    }
}