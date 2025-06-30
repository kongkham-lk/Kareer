<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // use with() for eager load
        $jobs = Job::with(['employer', 'tags'])->latest();

        return view('jobs.index', [
            'featuredJobs' => $jobs->get()->groupBy('featured')[1],
            'jobs' => $jobs->paginate(10),
            'tags' => Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attribute = $request->validate([
            'title' => ['required'],
            'location' => ['required'],
            'salary' => ['required'],
            'type' => ['required', Rule::in(['Full Time', 'Part Time', 'Contract', 'Internship / Co-op'])],
            'url' => ['required', 'active_url'],
            'featured' => ['accepted'], // accept both true/false or on/off (for checkbox)
            'tags' => ['nullable'],
        ]);

        $attribute['featured'] = $request->has('featured');
        $tags = explode(',', $attribute['tags']);

        $job = Auth::user()->employer->jobs()->create(Arr::except($attribute, ['tags']));

        if ($attribute['tags'] ?? false) { // if nth then false
            foreach (explode(',', $attribute['tags']) as $tag) {
                $job->tag(trim($tag));
            }
        }
        return redirect('/');
    }
}
