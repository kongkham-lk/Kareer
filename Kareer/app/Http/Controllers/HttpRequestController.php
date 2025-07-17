<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class HttpRequestController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     * @throws ConnectionException
     */
    public function ping(Request $request): JsonResponse
    {
//        dd(config('services.IS_DEVELOPEMENT'));
        $sender = $request->header('X-Sender-App') ?? $request->query('sender');
        $targetURL = config('services.IS_DEVELOPEMENT')
            ? 'http://localhost:3000/callback'
            : 'https://myping-app.onrender.com/callback';
        Log::info("Ping received from: $sender");

        // Send request back in background (non-blocking)
        Http::timeout(1)
            ->withoutVerifying()
            ->withHeaders([ 'X-Sender-App' => 'KAREER App' ])
            ->get($targetURL);

        return response()->json(['message' => 'Ping received', 'sender' => $sender]);
    }
}
