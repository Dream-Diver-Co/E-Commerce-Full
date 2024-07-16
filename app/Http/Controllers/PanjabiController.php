<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panjabi; // Use the Panjabi Model

class PanjabiController extends Controller
{
    public function index()
    {
        $panjabis = Panjabi::all();
        return view('admin.pages.men.panjabi.index')->with('panjabis', $panjabis);
    }

    public function create()
    {
        return view('admin.pages.men.panjabi.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }
        Panjabi::create($input);
        return redirect('admin/panjabi')->with('flash_message', 'Panjabi Added!');
    }

    public function show($id)
    {
        $panjabi = Panjabi::find($id);
        return view('admin.pages.men.panjabi.show')->with('panjabis', $panjabi);
    }

    public function edit($id)
    {
        $panjabi = Panjabi::find($id);
        return view('admin.pages.men.panjabi.edit')->with('panjabis', $panjabi);
    }

    public function update(Request $request, $id)
    {
        $panjabi = Panjabi::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $panjabi->update($input);
        return redirect('admin/panjabi')->with('flash_message', 'Panjabi Updated!');
    }

    public function destroy($id)
    {
        Panjabi::destroy($id);
        return redirect('admin/panjabi')->with('flash_message', 'Panjabi deleted!');
    }
}
