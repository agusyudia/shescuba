<?php

namespace App\Http\Controllers;

use App\Models\DiveCourse;
use App\Models\DiveTrips;
use App\Models\Galery;
use App\Models\Team;
use App\Models\Trips;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $trips = Trips::get()->all();
        $teams = Team::get()->all();
        return view('website/index', compact('trips', 'teams'));
    }

    public function divecourse()
    {
        $divecourses = DiveCourse::get()->all();
        return view('website/divecourse', compact('divecourses'));
    }
    public function divecoursedetail($id)
    {
        $divecourses = DiveCourse::findOrFail($id);
        return view('website/divecoursedetail', compact('divecourses'));
    }
    public function contact()
    {
        return view('website/contactus');
    }
    public function galery()
    {
        $galerys = Galery::get()->all();
        return view('website/galery', compact('galerys'));
    }
    public function divetrip()
    {
        $divetrips = DiveTrips::get()->all();
        return view('website/divetrip', compact('divetrips'));
    }
    public function divetripdetail($id)
    {
        $divetrips = DiveTrips::findOrFail($id);
        return view('website/divetripdetail', compact('divetrips'));
    }
}
