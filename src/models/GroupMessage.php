<?php

namespace Playbackchat\Balajeeva\models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupMessage extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = ['chat_room_id', 'user_id', 'content','filename','originalfilename','read','parent_id'];

    public function groupChat()
    {
        return $this->belongsTo(ChatRoom::class,'chat_room_id');
    }

    public function chatuser()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
