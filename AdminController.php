<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
{
    $totalMovies = Movie::count();
    $totalUsers = User::count();

    // الأفلام حسب السنة
    $moviesPerYear = Movie::selectRaw('year, COUNT(*) as total')
        ->groupBy('year')
        ->orderBy('year')
        ->get();
    $years = $moviesPerYear->pluck('year');
    $movieCounts = $moviesPerYear->pluck('total');

    
    $ratingPerYear = Movie::selectRaw('year, AVG(rating) as avg_rating')
        ->join('ratings', 'movies.id', '=', 'ratings.movie_id')
        ->groupBy('year')
        ->orderBy('year')
        ->get();
    $ratingYears = $ratingPerYear->pluck('year');
    $ratingAverages = $ratingPerYear->pluck('avg_rating');

    // نسبة عدد الأفلام حسب تقييم (ممتاز، جيد جدًا، جيد...)
    $ratingDistribution = DB::table('ratings')
        ->selectRaw('rating, COUNT(*) as total')
        ->groupBy('rating')
        ->orderBy('rating', 'desc')
        ->get();
    $ratingLabels = $ratingDistribution->pluck('rating');
    $ratingCounts = $ratingDistribution->pluck('total');

    // المستخدمين حسب الأشهر
    $usersPerMonth = User::selectRaw("DATE_FORMAT(created_at, '%Y-%m') as month, COUNT(*) as total")
        ->groupBy('month')
        ->orderBy('month')
        ->get();
    $userMonths = $usersPerMonth->pluck('month');
    $userCounts = $usersPerMonth->pluck('total');

    return view('dashboard.index', compact(
        'totalMovies', 'totalUsers',
        'years', 'movieCounts',
        'ratingYears', 'ratingAverages',
        'ratingLabels', 'ratingCounts',
        'userMonths', 'userCounts'
    ));
}
}
