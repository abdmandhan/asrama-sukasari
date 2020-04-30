<?php

namespace App\Http\Controllers;

use App\Model\Activity;
use App\Model\Blog;
use App\Model\Goal;
use App\Model\Impression;
use App\Model\Team;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $goals = Goal::all();
        $activities = Activity::all();
        $teams = Team::all();
        $impressions = Impression::all();

        return view('welcome')
            ->with('impressions', $impressions)
            ->with('activities', $activities)
            ->with('teams', $teams)
            ->with('goals', $goals);
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function blogs()
    {
        $blogs = Blog::paginate(5);

        return view('blogs/blogs')
            ->with('blogs', $blogs);
    }

    public function blog()
    {
        return view('blogs/blog');
    }
}
