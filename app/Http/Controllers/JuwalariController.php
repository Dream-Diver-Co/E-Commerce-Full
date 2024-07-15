<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juwalari;

class JuwalariController extends Controller
{
    public function index()
    {
        $juwalaris = Juwalari::all();
        return view('admin.pages.women.juwalari.index')->with('juwalaris', $juwalaris);
    }

    public function create()
    {
        return view('admin.pages.women.juwalari.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Juwalari::create($input);
        return redirect('admin/juwalari')->with('flash_message', 'juwalari Added!');
    }

    public function show($id)
    {
        $juwalari = Juwalari::find($id);
        return view('admin.pages.women.juwalari.show')->with('juwalari', $juwalari);
    }

    public function edit($id)
    {
        $juwalari = Juwalari::find($id);
        return view('admin.pages.women.juwalari.edit')->with('juwalari', $juwalari);
    }

    public function update(Request $request, $id)
    {
        $juwalari = Juwalari::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $juwalari->update($input);
        return redirect('admin/juwalari')->with('flash_message', 'juwalari Updated!');
    }

    public function destroy($id)
    {
        Juwalari::destroy($id);
        return redirect('admin/juwalari')->with('flash_message', 'juwalari Deleted!');
    }
}
