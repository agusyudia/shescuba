<?php

namespace App\Http\Controllers;

use App\Models\DiveTrips;
use App\Models\ImageTrips;
use Illuminate\Http\Request;

class DiveTripsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $divetrips = DiveTrips::get()->all();
        return view('admin/divetrips/index', compact('divetrips'));
    }

    public function create()
    {
        return view('admin/divetrips/addtrips');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'available' => 'required',
            'price' => 'required',
            'kode_level' => 'required',
            'water_entry' => 'required',
            'water_conditions' => 'required',
            'tumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time() . '.' . $request->tumbnail->extension();
        $request->tumbnail->move(public_path('upload/tumbnail'), $imageName);

        $divetrips = new DiveTrips();
        $divetrips->title = $request->title;
        $divetrips->description = $request->description;
        $divetrips->price = $request->price;
        $divetrips->available = $request->available;
        $divetrips->kode_level_dive = $request->kode_level;
        $divetrips->water_entry = $request->water_entry;
        $divetrips->water_conditions = $request->water_conditions;
        $divetrips->tumbnail = $imageName;

        $divetrips->save();

        return redirect()->route('admin.divetrip')
            ->with('success', 'Dive Trips has been created successfully.');
    }

    public function edit($id)
    {
        $divetrips = DiveTrips::findOrFail($id);
        return view('admin/divetrips/edittrips', compact('divetrips'));
    }

    public function update(Request $request, $id)
    {
        $divetrips = DiveTrips::find($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'available' => 'required',
            'price' => 'required',
            'kode_level' => 'required',
            'water_entry' => 'required',
            'water_conditions' => 'required',
            'tumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time() . '.' . $request->tumbnail->extension();
        $request->tumbnail->move(public_path('upload/tumbnail'), $imageName);

        $divetrips->title = $request->title;
        $divetrips->description = $request->description;
        $divetrips->price = $request->price;
        $divetrips->available = $request->available;
        $divetrips->kode_level_dive = $request->kode_level;
        $divetrips->water_entry = $request->water_entry;
        $divetrips->water_conditions = $request->water_conditions;
        $divetrips->tumbnail = $imageName;
        $divetrips->save();

        if ($divetrips) {
            return redirect()
                ->route('admin.divetrip')
                ->with([
                    'success' => 'Dive Course has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

    public function delete($id)
    {
        $divetrips = DiveTrips::findOrFail($id);
        $divetrips->delete();

        if ($divetrips) {
            return redirect()
                ->route('admin.divetrip')
                ->with([
                    'success' => 'Team has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('admin.divetrip')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }

    public function addimage($id)
    {
        $divetrips = DiveTrips::findOrFail($id);
        return view('admin/divetrips/addimage', compact('divetrips'));
    }

    public function postimage(Request $request)
    {
        $this->validate($request, [
            'id_trips' => 'required',
            'filenames' => 'required',
            'filenames.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $files = [];
        if ($request->hasfile('filenames')) {
            foreach ($request->file('filenames') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('upload/imagetrips'), $name);
                $files[] = $name;
            }
        }
        // dd($request->all());
        $file = new ImageTrips();
        $file->id_trips = $request->id_trips;
        $file->filenames = implode('|', $files);
        $file->save();

        return redirect()->route('admin.divetrip')->with('success', 'Data Your files has been successfully added');
    }
}
