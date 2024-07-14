<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menshoes;

class MenshoesController extends Controller
{
    public function index()
    {
        $menshoess = Menshoes::all();
        return view('admin.pages.men_shoes.index')->with('menshoess', $menshoess);
    }

    public function create()
    {
        return view('admin.pages.men_shoes.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Menshoes::create($input);
        return redirect('admin/menshoes')->with('flash_message', 'menshoes Added!');
    }

    public function show($id)
    {
        $menshoes = Menshoes::find($id);
        return view('admin.pages.mens_hoes.show')->with('menshoes', $menshoes);
    }

    public function edit($id)
    {
        $menshoes = Menshoes::find($id);
        return view('admin.pages.men_shoes.edit')->with('menshoes', $menshoes);
    }

    public function update(Request $request, $id)
    {
        $menshoes = Menshoes::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $menshoes->update($input);
        return redirect('admin/menshoes')->with('flash_message', 'menshoes Updated!');
    }

    public function destroy($id)
    {
        Menshoes::destroy($id);
        return redirect('admin/menshoes')->with('flash_message', 'menshoes Deleted!');
    }
}
