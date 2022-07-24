<?php

namespace App\Http\Controllers;

use App\Models\DiveCourse;
use App\Models\DiveTrips;
use App\Models\Team;
use App\Models\Trips;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $divecourses = DiveCourse::get()->all();
        $trips = Trips::get()->all();
        $teams = Team::get()->all();
        return view('website/index', compact('divecourses', 'trips', 'teams'));
    }

    public function divecourse($id)
    {
        $divecourses = DiveCourse::get()->all();
        $courses = DiveCourse::findOrFail($id);
        return view('website/divecourse', compact('courses', 'divecourses'));
    }
    public function contact()
    {
        $divecourses = DiveCourse::get()->all();
        return view('website/contactus', compact('divecourses'));
    }
    public function divetrip()
    {
        $divetrips = DiveTrips::get()->all();
        $divecourses = DiveCourse::get()->all();
        return view('website/divetrip', compact('divecourses', 'divetrips'));
    }
    public function divetripdetail($id)
    {
        $divetrips = DiveTrips::findOrFail($id);
        $divecourses = DiveCourse::get()->all();
        return view('website/divetripdetail', compact('divecourses', 'divetrips'));
    }
}
