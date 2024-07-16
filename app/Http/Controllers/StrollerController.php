<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stroller;

class StrollerController extends Controller
{
    public function index()
    {
        $strollers = Stroller::all();
        return view('admin.pages.baby.stroller.index')->with('strollers', $strollers);
    }

    public function create()
    {
        return view('admin.pages.baby.stroller.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Stroller::create($input);
        return redirect('admin/stroller')->with('flash_message', 'stroller Added!');
    }

    public function show($id)
    {
        $stroller = Stroller::find($id);
        return view('admin.pages.baby.stroller.show')->with('stroller', $stroller);
    }

    public function edit($id)
    {
        $stroller = Stroller::find($id);
        return view('admin.pages.baby.stroller.edit')->with('stroller', $stroller);
    }

    public function update(Request $request, $id)
    {
        $stroller = Stroller::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $stroller->update($input);
        return redirect('admin/stroller')->with('flash_message', 'stroller Updated!');
    }

    public function destroy($id)
    {
        Stroller::destroy($id);
        return redirect('admin/stroller')->with('flash_message', 'stroller Deleted!');
    }
}
