<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RecommendationService
{
    public static function getRecommendations($userId)
    {
$response = Http::timeout(10)->get('http://127.0.0.1:5000/recommendations', [
    'user_id' => $userId,
]);

        return $response->successful() ? $response->json() : [];
    }
}
