<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;
class EventTiggerController extends Controller
{
    
    public function sendMessage()
	{
	    $message = 'Hoi Hoi Hoi';
	    event(new MessageSent($message));
	    return response()->json(['status' => 'Message Sent!']);
	}
}
