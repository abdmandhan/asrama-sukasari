<?php

namespace App\Http\Controllers;

use App\Model\Activity;
use App\Model\Goal;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $goals = Goal::all();
        $activities = Activity::all();

        return view('welcome')
            ->with('activities', $activities)
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
}
