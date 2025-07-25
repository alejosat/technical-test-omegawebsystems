<?php

namespace App\Service;

use Illuminate\Support\Facades\Http;

class ServiceApi
{

    private string $url;

    public function handle()
    {
        $this->url = env('API_URL');

        $response = Http::get($this->url);

        if (!$response->ok()) {
            return response()->json([
                'sucess' => false,
                'message' => "Error al conectarse a la API $this->url"
            ], 500);
        }
        return $response->json();
    }
}
