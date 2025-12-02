<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RecommendationService;

class RecommendationController extends Controller
{
    public function show($userId)
    {
        $recommendations = RecommendationService::getRecommendations($userId);
        return view('recommendations', compact('recommendations'));
    }
}
