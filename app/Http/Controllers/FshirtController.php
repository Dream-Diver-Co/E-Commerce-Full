<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fshirt;

class FshirtController extends Controller
{
    public function index()
    {
        $fshirts = Fshirt::all();
        return view('admin.pages.men.formal_shirt.index')->with('fshirts', $fshirts);
    }

    public function create()
    {
        return view('admin.pages.men.formal_shirt.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Fshirt::create($input);
        return redirect('admin/fshirt')->with('flash_message', 'Formal-shirt Added!');
    }

    public function show($id)
    {
        $fshirt = Fshirt::find($id);
        return view('admin.pages.men.formal_shirt.show')->with('fshirt', $fshirt);
    }

    public function edit($id)
    {
        $fshirt = Fshirt::find($id);
        return view('admin.pages.men.formal_shirt.edit')->with('fshirt', $fshirt);
    }

    public function update(Request $request, $id)
    {
        $fshirt = Fshirt::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $fshirt->update($input);
        return redirect('admin/fshirt')->with('flash_message', 'Formal-shirt Updated!');
    }

    public function destroy($id)
    {
        Fshirt::destroy($id);
        return redirect('admin/fshirt')->with('flash_message', 'Formal-shirt Deleted!');
    }
}
