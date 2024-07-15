<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kameez;

class KameezController extends Controller
{
    public function index()
    {
        $kameezs = Kameez::all();
        return view('admin.pages.women.kameez.index')->with('kameezs', $kameezs);
    }

    public function create()
    {
        return view('admin.pages.women.kameez.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Kameez::create($input);
        return redirect('admin/kameez')->with('flash_message', 'kameez Added!');
    }

    public function show($id)
    {
        $kameez = Kameez::find($id);
        return view('admin.pages.women.kameez.show')->with('kameez', $kameez);
    }

    public function edit($id)
    {
        $kameez = Kameez::find($id);
        return view('admin.pages.women.kameez.edit')->with('kameez', $kameez);
    }

    public function update(Request $request, $id)
    {
        $kameez = Kameez::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $kameez->update($input);
        return redirect('admin/kameez')->with('flash_message', 'kameez Updated!');
    }

    public function destroy($id)
    {
        Kameez::destroy($id);
        return redirect('admin/kameez')->with('flash_message', 'kameez Deleted!');
    }
}
