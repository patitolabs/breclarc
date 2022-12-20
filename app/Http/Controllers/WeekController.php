<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class WeekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Video::class);
        $lastWeek = Video::max('week');
        return view('weeks.index', compact('lastWeek'));
    }

    public function show(Request $request, $week)
    {
        $this->authorize('viewAny', Video::class);
        $videos = Video::where('week', $week)->get();
        $header = __('videos.of_week') . ' ' . $week;
        return view('videos.display', compact('videos', 'header'));
    }
}
