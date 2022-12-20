<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Http\Requests\SearchVideoRequest;
use App\Models\Video;
use App\Models\Subject;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Video::class);

        $hour = date('H');
        if ($hour < 12) {
            $greeting = __('greetings.morning');
        } else if ($hour >= 12 && $hour < 19) {
            $greeting = __('greetings.afternoon');
        } else {
            $greeting = __('greetings.evening');
        }

        $videos = request('query') ? Video::where('description', 'like', '%' . request('query') . '%')
        -> orderBy('id', 'desc')->paginate(10) : Video::orderBy('id', 'desc')->paginate(10);

        return view('videos.index', compact('videos', 'greeting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Video::class);
        $subjects = Subject::all();
        $header = __('videos.create_video');
        $lastWeek = Video::max('week');
        return view('videos.create', compact('subjects', 'header', 'lastWeek'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVideoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVideoRequest $request)
    {
        $this->authorize('create', Video::class);
        Video::create($request->validated());
        return redirect()->route('videos.index')->with('success', __('videos.created_successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        $this->authorize('view', $video);
        return view('videos.show', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        $this->authorize('update', $video);
        $subjects = Subject::all();
        $header = __('videos.edit_video');
        return view('videos.edit', compact('video', 'subjects', 'header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVideoRequest  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVideoRequest $request, Video $video)
    {
        $this->authorize('update', $video);
        $video->update($request->validated());
        return redirect()->route('videos.index')->with('success', __('videos.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $this->authorize('delete', $video);
        $video->delete();
        return redirect()->route('videos.index')->with('success', __('videos.deleted_successfully'));
    }
}
