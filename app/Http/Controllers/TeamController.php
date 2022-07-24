<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $teams = Team::get()->all();
        return view('admin/team/index', compact('teams'));
    }

    public function create()
    {
        return view('admin/team/addteam');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'link_twitter' => 'required',
            'link_instagram' => 'required',
            'link_facebook' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('upload/team'), $imageName);

        $team = new Team();
        $team->name = $request->name;
        $team->position = $request->position;
        $team->description = $request->description;
        $team->link_twitter = $request->link_twitter;
        $team->link_instagram = $request->link_instagram;
        $team->link_facebook = $request->link_facebook;
        $team->image = $imageName;

        $team->save();

        return redirect()->route('admin.team')
            ->with('success', 'Team has been created successfully.');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin/team/editteam', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::find($id);

        $this->validate($request, [
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'link_twitter' => 'required',
            'link_instagram' => 'required',
            'link_facebook' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('upload/team'), $imageName);

        $team->name = $request->name;
        $team->position = $request->position;
        $team->description = $request->description;
        $team->link_twitter = $request->link_twitter;
        $team->link_instagram = $request->link_instagram;
        $team->link_facebook = $request->link_facebook;
        $team->image = $imageName;
        $team->save();

        if ($team) {
            return redirect()
                ->route('admin.team')
                ->with([
                    'success' => 'Team has been updated successfully'
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
        $team = Team::findOrFail($id);
        $team->delete();

        if ($team) {
            return redirect()
                ->route('admin.team')
                ->with([
                    'success' => 'Team has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('admin.team')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
