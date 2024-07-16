<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recent;

class RecentController extends Controller
{
    public function index()
    {
        $recents = Recent::all();
        return view('admin.pages.home.recent.index')->with('recents', $recents);
    }

    public function create()
    {
        return view('admin.pages.home.recent.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Recent::create($input);
        return redirect('admin/recent')->with('flash_message', 'recent Added!');
    }

    public function show($id)
    {
        $recent = Recent::find($id);
        return view('admin.pages.home.recent.show')->with('recent', $recent);
    }

    public function edit($id)
    {
        $recent = Recent::find($id);
        return view('admin.pages.home.recent.edit')->with('recent', $recent);
    }

    public function update(Request $request, $id)
    {
        $recent = Recent::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $recent->update($input);
        return redirect('admin/recent')->with('flash_message', 'recent Updated!');
    }

    public function destroy($id)
    {
        Recent::destroy($id);
        return redirect('admin/recent')->with('flash_message', 'recent Deleted!');
    }
}
