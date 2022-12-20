<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Models\Subject;
use App\Models\Video;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Subject::class);
        $subjects = Subject::paginate(10);
        return view('subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Subject::class);
        $header = __('subjects.create_subject');
        return view('subjects.create', compact('header'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubjectRequest $request)
    {
        $this->authorize('create', Subject::class);
        Subject::create($request->validated());
        return redirect()->route('subjects.index')->with('success', __('subjects.created_successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        $this->authorize('view', $subject);
        $videos = Video::where('subject_id', $subject->id)->paginate(10);
        $header = __('videos.of_subject') . ' ' . $subject->name;
        return view('videos.display', compact('videos', 'header'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        $this->authorize('update', $subject);
        $header = __('subjects.edit_subject');
        return view('subjects.edit', compact('subject', 'header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubjectRequest  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $this->authorize('update', $subject);
        $subject->update($request->validated());
        return redirect()->route('subjects.index')->with('success', __('subjects.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $this->authorize('delete', $subject);
        $subject->delete();
        return redirect()->route('subjects.index')->with('success', __('subjects.deleted_successfully'));
    }
}
