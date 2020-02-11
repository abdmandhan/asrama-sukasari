<?php

namespace App\Http\Controllers;

use App\Model\Goal;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $goals = Goal::all();

        return view('welcome')
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
