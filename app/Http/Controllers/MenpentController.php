<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menpent;

class MenpentController extends Controller
{
    public function index()
    {
        $menpents = Menpent::all();
        return view('admin.pages.men.men_pent.index')->with('menpents', $menpents);
    }

    public function create()
    {
        return view('admin.pages.men.men_pent.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Menpent::create($input);
        return redirect('admin/menpent')->with('flash_message', 'menpent Added!');
    }

    public function show($id)
    {
        $menpent = Menpent::find($id);
        return view('admin.pages.men.men_pent.show')->with('menpent', $menpent);
    }

    public function edit($id)
    {
        $menpent = Menpent::find($id);
        return view('admin.pages.men.men_pent.edit')->with('menpent', $menpent);
    }

    public function update(Request $request, $id)
    {
        $menpent = Menpent::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $menpent->update($input);
        return redirect('admin/menpent')->with('flash_message', 'menpent Updated!');
    }

    public function destroy($id)
    {
        Menpent::destroy($id);
        return redirect('admin/menpent')->with('flash_message', 'menpent Deleted!');
    }
}
