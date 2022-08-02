<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $galerys = Galery::get()->all();
        return view('admin/galery/index', compact('galerys'));
    }

    public function create()
    {
        return view('admin/galery/addgalery');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'filenames' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $imageName = time() . '.' . $request->filenames->extension();
        $request->filenames->move(public_path('upload/galery'), $imageName);

        $galery = new Galery();
        $galery->filenames = $imageName;

        $galery->save();

        return redirect()->route('admin.galery')
            ->with('success', 'Galery has been created successfully.');
    }

    public function delete($id)
    {
        $galery = Galery::findOrFail($id);
        $galery->delete();

        if ($galery) {
            return redirect()
                ->route('admin.galery')
                ->with([
                    'success' => 'Galery has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('admin.galery')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
