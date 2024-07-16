<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blazer;

class BlazerController extends Controller
{
    public function index()
    {
        $blazers = Blazer::all();
        return view('admin.pages.men.blazer.index')->with('blazers', $blazers);
    }

    public function create()
    {
        return view('admin.pages.men.blazer.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Blazer::create($input);
        return redirect('admin/blazer')->with('flash_message', 'blazer Added!');
    }

    public function show($id)
    {
        $blazer = Blazer::find($id);
        return view('admin.pages.men.blazer.show')->with('blazer', $blazer);
    }

    public function edit($id)
    {
        $blazer = Blazer::find($id);
        return view('admin.pages.men.blazer.edit')->with('blazer', $blazer);
    }

    public function update(Request $request, $id)
    {
        $blazer = Blazer::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $blazer->update($input);
        return redirect('admin/blazer')->with('flash_message', 'blazer Updated!');
    }

    public function destroy($id)
    {
        Blazer::destroy($id);
        return redirect('admin/blazer')->with('flash_message', 'blazer Deleted!');
    }
}
