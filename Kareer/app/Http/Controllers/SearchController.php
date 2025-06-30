<?php

namespace App\Http\Controllers;

use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke()
    {
        // use with() for eager load
        $jobs = Job::with(['employer', 'tags'])->where('title', 'LIKE', '%'.request('q').'%')->get();
        return view('jobs.results', ['jobs' => $jobs]);
    }
}
