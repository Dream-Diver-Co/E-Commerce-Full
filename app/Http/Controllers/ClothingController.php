<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothing;

class ClothingController extends Controller
{
    public function index()
    {
        $clothings = Clothing::all();
        return view('admin.pages.baby.clothing.index')->with('clothings', $clothings);
    }

    public function create()
    {
        return view('admin.pages.baby.clothing.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Clothing::create($input);
        return redirect('admin/clothing')->with('flash_message', 'clothing Added!');
    }

    public function show($id)
    {
        $clothing = Clothing::find($id);
        return view('admin.pages.baby.clothing.show')->with('clothing', $clothing);
    }

    public function edit($id)
    {
        $clothing = Clothing::find($id);
        return view('admin.pages.baby.clothing.edit')->with('clothing', $clothing);
    }

    public function update(Request $request, $id)
    {
        $clothing = Clothing::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $clothing->update($input);
        return redirect('admin/clothing')->with('flash_message', 'clothing Updated!');
    }

    public function destroy($id)
    {
        Clothing::destroy($id);
        return redirect('admin/clothing')->with('flash_message', 'clothing Deleted!');
    }
}
