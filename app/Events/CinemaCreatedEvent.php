<?php

namespace App\Events;

use App\Models\Cinema;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CinemaCreatedEvent
{
    use Dispatchable, SerializesModels;

    public $cinema;

    /**
     * Create a new event instance.
     */
    public function __construct(Cinema $cinema)
    {
        $this->cinema = $cinema;
    }   
}
