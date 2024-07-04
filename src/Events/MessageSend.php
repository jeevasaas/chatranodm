<?php

namespace Playbackchat\Balajeeva\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Playbackchat\Balajeeva\models\GroupChat;

class MessageSend
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $username;
    public $message;
    /**
     * Create a new event instance.
     */
    public function __construct($user_id, $message)
    {
        $newMessage = new GroupChat();
        $newMessage->user_id = $user_id;
        $newMessage->message = $message;
        $newMessage->save();

        $this->message = $message;
        $this->username = User::find($user_id)->name;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('my-channel'),
        ];
    }
}
