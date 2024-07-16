<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newborn;

class NewbornController extends Controller
{
    public function index()
    {
        $newborns = Newborn::all();
        return view('admin.pages.baby.newborn.index')->with('newborns', $newborns);
    }

    public function create()
    {
        return view('admin.pages.baby.newborn.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Newborn::create($input);
        return redirect('admin/newborn')->with('flash_message', 'newborn Added!');
    }

    public function show($id)
    {
        $newborn = Newborn::find($id);
        return view('admin.pages.baby.newborn.show')->with('newborn', $newborn);
    }

    public function edit($id)
    {
        $newborn = Newborn::find($id);
        return view('admin.pages.baby.newborn.edit')->with('newborn', $newborn);
    }

    public function update(Request $request, $id)
    {
        $newborn = Newborn::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $newborn->update($input);
        return redirect('admin/newborn')->with('flash_message', 'newborn Updated!');
    }

    public function destroy($id)
    {
        Newborn::destroy($id);
        return redirect('admin/newborn')->with('flash_message', 'newborn Deleted!');
    }
}
