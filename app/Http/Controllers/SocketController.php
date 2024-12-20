<?php

namespace App\Http\Controllers;

use App\Events\Example;
use App\Events\MessageSent;
use Illuminate\Http\Request;

class SocketController extends Controller
{
    public function receive(Request $request) {
        $response = 'failed';
        $code = 400;
        try {
            broadcast(new Example($request->all()));
            $response = 'Event Broadcasted';
            $code = 200;
        } catch (\Throwable $th) {
            $response = $th->getMessage() ?? 'Something went wrong!';
            $code = $th->getCode() ?? 500;
            info('EVENT_TRIGGER_FAILED', [$response]);
        }

        return response()->json($response, $code);
    }
}
