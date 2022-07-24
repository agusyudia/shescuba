<?php

namespace App\Http\Controllers;

use App\Models\Trips;
use Illuminate\Http\Request;

class TripsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $trips = Trips::get()->all();
        return view('admin/trips/index', compact('trips'));
    }

    public function create()
    {
        return view('admin/trips/addtrips');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'address' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('upload/trips'), $imageName);

        $trips = new Trips();
        $trips->title = $request->title;
        $trips->address = $request->address;
        $trips->image = $imageName;

        $trips->save();

        return redirect()->route('admin.trips')
            ->with('success', 'Trps has been created successfully.');
    }

    public function edit($id)
    {
        $trips = Trips::findOrFail($id);
        return view('admin/trips/edittrips', compact('trips'));
    }

    public function update(Request $request, $id)
    {
        $trips = Trips::find($id);

        $this->validate($request, [
            'title' => 'required',
            'address' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('upload/trips'), $imageName);

        $trips->title = $request->title;
        $trips->address = $request->address;
        $trips->image = $imageName;
        $trips->save();

        if ($trips) {
            return redirect()
                ->route('admin.trips')
                ->with([
                    'success' => 'Trips has been updated successfully'
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
        $trips = Trips::findOrFail($id);
        $trips->delete();

        if ($trips) {
            return redirect()
                ->route('admin.trips')
                ->with([
                    'success' => 'Trips has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('admin.trips')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
