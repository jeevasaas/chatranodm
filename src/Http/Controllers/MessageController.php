<?php

namespace Playbackchat\Balajeeva\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Playbackchat\Balajeeva\models\GroupChat;

class MessageController extends Controller
{
    public function index()
    {
        return view('ChatApp::ChatApp');
    }

    public function send(Request $request){
        GroupChat::create($request->all());
    }
}
