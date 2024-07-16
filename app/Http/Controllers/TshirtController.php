<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tshirt;

class TshirtController extends Controller
{
    public function index()
    {
        $tshirts = Tshirt::all();
        return view('admin.pages.men.tshirt.index')->with('tshirts', $tshirts);
    }

    public function create()
    {
        return view('admin.pages.men.tshirt.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Tshirt::create($input);
        return redirect('admin/tshirt')->with('flash_message', 'tshirt Added!');
    }

    public function show($id)
    {
        $tshirt = Tshirt::find($id);
        return view('admin.pages.men.tshirt.show')->with('tshirt', $tshirt);
    }

    public function edit($id)
    {
        $tshirt = Tshirt::find($id);
        return view('admin.pages.men.tshirt.edit')->with('tshirt', $tshirt);
    }

    public function update(Request $request, $id)
    {
        $tshirt = Tshirt::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $tshirt->update($input);
        return redirect('admin/tshirt')->with('flash_message', 'tshirt Updated!');
    }

    public function destroy($id)
    {
        Tshirt::destroy($id);
        return redirect('admin/tshirt')->with('flash_message', 'tshirt Deleted!');
    }
}
