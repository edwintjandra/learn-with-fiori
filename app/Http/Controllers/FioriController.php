<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;

class FioriController extends Controller
{
    public function index(){
        return view('fiori.index');
    }

    public function handleMessage(Request $request){
        try {
            $response = Http::withHeaders([
                "Content-Type" => "application/json",
                "Authorization" => "Bearer " . env('OPEN_API_KEY')
            ])->post('https://api.openai.com/v1/chat/completions', [
                //gpt model
                "model" =>"gpt-3.5-turbo-16k" ,
                "messages" => [
                    [
                        "role" => "user",
                        "content" => $request->prompt
                    ]
                ],
                "temperature" => 0,
                "max_tokens" => 2048
            ]) ;

            $responseBody = $response->body();
            $decodedResponse = json_decode($responseBody, true);

            if (isset($decodedResponse['choices'][0]['message']['content'])) {
                return $decodedResponse['choices'][0]['message']['content'];
            } else {
                return response()->json(['error' => 'Invalid response structure', 'response' => $decodedResponse], 500);
            }

         } catch (Throwable $e) {
            return "Chat GPT Limit Reached. This means too many people have used this demo this month and hit the FREE limit available. You will need to wait, sorry about that.";
        }
    }
}
