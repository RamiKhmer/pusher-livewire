<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserRegisterBroadcast implements ShouldBroadcast
{
    
    public $name;

  public function __construct($name)
  {
      $this->name = $name;
  }


  public function broadcastAs()
  {
      return 'user-register-event';
  }

    public function broadcastOn(): array
    {
        return [
            new Channel('popup-channel'),
        ];
    }
}
