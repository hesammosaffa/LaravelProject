<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->take(6)->get();
        $mostPopularVideos = Video::all()->random(6);
        $mostViewVideos = Video::all()->random(6);
        //dd($videos);
        return view('index', compact('videos','mostPopularVideos','mostViewVideos'));
    }
}
