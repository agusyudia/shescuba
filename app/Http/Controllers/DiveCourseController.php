<?php

namespace App\Http\Controllers;

use App\Models\DiveCourse;
use App\Models\ImageCourse;
use Illuminate\Http\Request;

class DiveCourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $divecourses = DiveCourse::get()->all();
        return view('admin/divecourse/index', compact('divecourses'));
    }

    public function create()
    {
        return view('admin/divecourse/addcourse');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'tumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time() . '.' . $request->tumbnail->extension();
        $request->tumbnail->move(public_path('upload/tumbnail'), $imageName);

        $divecourse = new DiveCourse;
        $divecourse->title = $request->title;
        $divecourse->description = $request->description;
        $divecourse->duration = $request->duration;
        $divecourse->price = $request->price;
        $divecourse->tumbnail = $imageName;

        $divecourse->save();
        return redirect()->route('admin.divecourse')
            ->with('success', 'Dive Course has been created successfully.');
    }

    public function edit($id)
    {
        $divecourse = DiveCourse::findOrFail($id);
        return view('admin/divecourse/editcourse', compact('divecourse'));
    }

    public function update(Request $request, $id)
    {
        $divecourse = DiveCourse::find($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'tumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time() . '.' . $request->tumbnail->extension();
        $request->tumbnail->move(public_path('upload/tumbnail'), $imageName);

        $divecourse->title = $request->title;
        $divecourse->description = $request->description;
        $divecourse->duration = $request->duration;
        $divecourse->price = $request->price;
        $divecourse->tumbnail = $imageName;
        $divecourse->save();

        if ($divecourse) {
            return redirect()
                ->route('admin.divecourse')
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
        $divecourse = DiveCourse::findOrFail($id);
        $divecourse->delete();

        if ($divecourse) {
            return redirect()
                ->route('admin.divecourse')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('post.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }

    public function addimage($id)
    {
        $divecourse = DiveCourse::findOrFail($id);
        return view('admin/divecourse/addimage', compact('divecourse'));
    }

    public function postimage(Request $request)
    {
        $this->validate($request, [
            'id_course' => 'required',
            'filenames' => 'required',
            'filenames.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $filenames = array();
        if ($filenames = $request->file('filenames')) {
            foreach ($filenames as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('upload/imagecourse'), $name);
                $files[] = $name;
            }
        }
        // dd($request->all());
        $file = new ImageCourse();
        $file->id_course = $request->id_course;
        $file->filenames = implode('|', $files);
        $file->save();

        return redirect()->route('admin.divecourse')->with('success', 'Data Your files has been successfully added');
    }
}
