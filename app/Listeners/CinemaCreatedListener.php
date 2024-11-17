<?php

namespace App\Listeners;

use App\Events\CinemaCreatedEvent;
use App\Models\Cinema;
use App\Models\CinemaRoom;
use App\Models\CinemaRoomChair;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class CinemaCreatedListener
{
    public $cinema;

    /**
     * Create the event listener.
     */
    public function __construct(Cinema $cinema)
    {
        $this->cinema = $cinema;
    }

    /**
     * Action auto create cinema_rooms and cinema_room_chairs.
     */
    public function handle(CinemaCreatedEvent $event): void
    {
        try {
            $cinema = $event->cinema;

            DB::beginTransaction();

            // add 10 room to cinema
            for ($i = 0; $i < 10; $i++) {
                $cinemaRoom = new CinemaRoom();
                $cinemaRoom->cinema_id = $cinema->id;
                $cinemaRoom->room_code = str_pad($i + 1, 3, "0", STR_PAD_LEFT);
                $cinemaRoom->description = 'Lorem';
                $cinemaRoom->save();

                // add 80 seat to a room
                $cinemaRoomChairs = [];
                for ($c = 0; $c < 80; $c++) {
                    $cinemaRoomChairs[] = new CinemaRoomChair([
                        'chair_code' => str_pad($c + 1, 3, "0", STR_PAD_LEFT),
                        'chair_type' => intdiv($c,20), // 0 - 19 return 0, 20 - 39 return 1...
                        'amount' => 0
                    ]);
                }
                $cinemaRoom->cinemaRoomChairs()->saveMany($cinemaRoomChairs);
                DB::commit();
            }
        } catch (\Throwable $th) {
            logger($th->getMessage());
            DB::rollBack();
        }
    }

//    private function getChairType($chairNumber)
//    {
//        if ($chairNumber < 20) {
//            return 0; // hang ghe A
//        } elseif ($chairNumber < 40) {
//            return 1;
//        } elseif ($chairNumber < 60) {
//            return 2;
//        }
//        return 3;
//    }
}
