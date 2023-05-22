<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatController extends Controller
{
    
    public function sendMessage(Request $request)
    {
        $input = $request->input('input');
        $model = 'text-davinci-003';
        $token = env('GPT_API_KEY'); // Replace with your OpenAI API key

        $client = new Client([
            'base_uri' => 'https://api.openai.com/v1/',
            'headers' => [
                'Authorization' => "Bearer $token",
                'Content-Type' => 'application/json',
            ],
        ]);

        $response = $client->post('completions', [
            'json' => [
                'model' => $model,
                'prompt' => $input,
                'max_tokens' => 300,
                'temperature' => 0.5,
            ],
        ]);
        $result = json_decode($response->getBody(), true);
        $output = $result['choices'][0]['text'];
        return response()->json([
            'output' => $output,
        ]);
    }
    public function chatUI() {
        return view('chat');
    }
}
