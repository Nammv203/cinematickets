<?php

namespace App\Listeners;

use App\Events\CinemaRoomCreatedEvent;
use App\Models\CinemaRoom;
use App\Models\CinemaRoomChair;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CinemaRoomCreatedListener
{
    public $cinemaRoom;

    /**
     * Create the event listener.
     */
    public function __construct(CinemaRoom $cinemaRoom)
    {
        $this->cinemaRoom = $cinemaRoom;
    }

    /**
     * Handle the event.
     */
    public function handle(CinemaRoomCreatedEvent $event): void
    {
        try {
            $cinemaRoom = $event->cinemaRoom;

            for ($c = 0; $c < 80; $c++) {
                CinemaRoomChair::create([
                    'cinema_room_id' => $cinemaRoom->id,
                    'chair_code' => str_pad($c + 1, 2, "0", STR_PAD_LEFT),
                    'chair_type' => intdiv($c, 20), // 0 - 19 return 0, 20 - 39 return 1...
                    'amount' => 0
                ]);
            }
        } catch (\Throwable $exception) {
            dd($exception);
            logger($exception->getMessage());
        }
    }
}
