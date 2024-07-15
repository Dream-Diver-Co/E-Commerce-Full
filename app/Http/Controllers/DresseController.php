<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dresse;

class DresseController extends Controller
{
    public function index()
    {
        $dresses = Dresse::all();
        return view('admin.pages.women.dresse.index')->with('dresses', $dresses);
    }

    public function create()
    {
        return view('admin.pages.women.dresse.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Dresse::create($input);
        return redirect('admin/dresse')->with('flash_message', 'dresse Added!');
    }

    public function show($id)
    {
        $dresse = Dresse::find($id);
        return view('admin.pages.women.dresse.show')->with('dresse', $dresse);
    }

    public function edit($id)
    {
        $dresse = Dresse::find($id);
        return view('admin.pages.women.dresse.edit')->with('dresse', $dresse);
    }

    public function update(Request $request, $id)
    {
        $dresse = Dresse::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $dresse->update($input);
        return redirect('admin/dresse')->with('flash_message', 'dresse Updated!');
    }

    public function destroy($id)
    {
        Dresse::destroy($id);
        return redirect('admin/dresse')->with('flash_message', 'dresse Deleted!');
    }
}
