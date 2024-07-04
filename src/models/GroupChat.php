<?php

namespace Playbackchat\Balajeeva\models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupChat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'message'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
