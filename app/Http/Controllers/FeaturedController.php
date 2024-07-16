<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Featured;

class FeaturedController extends Controller
{
    public function index()
    {
        $featureds = Featured::all();
        return view('admin.pages.home.featured.index')->with('featureds', $featureds);
    }

    public function create()
    {
        return view('admin.pages.home.featured.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Featured::create($input);
        return redirect('admin/featured')->with('flash_message', 'featured Added!');
    }

    public function show($id)
    {
        $featured = featured::find($id);
        return view('admin.pages.home.featured.show')->with('featured', $featured);
    }

    public function edit($id)
    {
        $featured = Featured::find($id);
        return view('admin.pages.home.featured.edit')->with('featured', $featured);
    }

    public function update(Request $request, $id)
    {
        $featured = Featured::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $featured->update($input);
        return redirect('admin/featured')->with('flash_message', 'featured Updated!');
    }

    public function destroy($id)
    {
        Featured::destroy($id);
        return redirect('admin/featured')->with('flash_message', 'featured Deleted!');
    }
}
