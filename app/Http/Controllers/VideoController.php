<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckVerifyEmail;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{

    public function index()
    {
        $videos = Video::all();

        return view('video', [
            'videos' => $videos
        ]);
    }

    public function create()
    {
    
        $categories = Category::all();
        return view('videos.create', compact('categories'));
    }

    public function store(StoreVideoRequest $request)
    {
        $request->user()->videos()->create($request->all());
        return redirect()->route('index')->with('alart', __('messages.success'));
    }

    public function show(Request $request, video $video)
    {
        return view('videos.show', compact('video'));
    }

    public function edit(video $video)
    {
        $categories = Category::all();
        return view('videos.edit', compact('video', 'categories'));
    }

    public function update(UpdateVideoRequest $request, video $video)
    {
        $video->update($request->all());

        return redirect()->route('videos.show', $video->slug)->with('alart', __('messages.video_edited'));
    }
}
