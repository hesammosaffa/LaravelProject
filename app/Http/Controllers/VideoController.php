<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
use App\Models\Video;
use Illuminate\Http\Request;

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
        return view('videos.create');
    }

    public function store(StoreVideoRequest $request)
    {
        Video::create($request->all());
        return redirect()->route('index')->with('alart', __('messages.success'));
    }

    public function show(Request $request, video $video)
    {
        return view('videos.show', compact('video'));
    }

    public function edit(video $video)
    {
        return view('videos.edit', compact('video'));
    }

    public function update(Request $request, video $video)
    {
        $video->update($request->all());

        return redirect()->route('videos.show', $video->slug)->with('alart', __('messages.video_edited'));
    }
}
