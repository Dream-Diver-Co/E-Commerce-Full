<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Polo;

class PoloController extends Controller
{
    public function index()
    {
        $polos = Polo::all();
        return view('admin.pages.men.polo.index')->with('polos', $polos);
    }

    public function create()
    {
        return view('admin.pages.men.polo.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Polo::create($input);
        return redirect('admin/polo')->with('flash_message', 'polo Added!');
    }

    public function show($id)
    {
        $polo = Polo::find($id);
        return view('admin.pages.men.polo.show')->with('polo', $polo);
    }

    public function edit($id)
    {
        $polo = Polo::find($id);
        return view('admin.pages.men.polo.edit')->with('polo', $polo);
    }

    public function update(Request $request, $id)
    {
        $polo = Polo::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $polo->update($input);
        return redirect('admin/polo')->with('flash_message', 'polo Updated!');
    }

    public function destroy($id)
    {
        Polo::destroy($id);
        return redirect('admin/polo')->with('flash_message', 'polo Deleted!');
    }
}
