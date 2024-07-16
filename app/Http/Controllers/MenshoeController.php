<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menshoe;

class MenshoeController extends Controller
{
    public function index()
    {
        $menshoes = Menshoe::all();
        return view('admin.pages.men.men_shoes.index')->with('menshoes', $menshoes);
    }

    public function create()
    {
        return view('admin.pages.men.men_shoes.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Menshoe::create($input);
        return redirect('admin/menshoe')->with('flash_message', 'menshoe Added!');
    }

    public function show($id)
    {
        $menshoe = Menshoe::find($id);
        return view('admin.pages.men.men_shoes.show')->with('menshoe', $menshoe);
    }

    public function edit($id)
    {
        $menshoe = Menshoe::find($id);
        return view('admin.pages.men.men_shoes.edit')->with('menshoe', $menshoe);
    }

    public function update(Request $request, $id)
    {
        $menshoe = Menshoe::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $menshoe->update($input);
        return redirect('admin/menshoe')->with('flash_message', 'menshoe Updated!');
    }

    public function destroy($id)
    {
        Menshoe::destroy($id);
        return redirect('admin/menshoe')->with('flash_message', 'menshoe Deleted!');
    }
}
