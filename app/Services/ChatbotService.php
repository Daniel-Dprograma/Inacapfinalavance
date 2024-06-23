<?php

namespace App\Services;

use OpenAI\Client;

class ChatbotService
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getResponse($message)
    {
        try {
            $response = $this->client->completions()->create([
                'model' => 'text-davinci-003', // o el modelo que prefieras
                'prompt' => $message,
                'max_tokens' => 150,
            ]);

            return $response['choices'][0]['text'];
        } catch (\Exception $e) {
            throw new \Exception('Error al obtener la respuesta del chatbot: ' . $e->getMessage());
        }
    }
}
