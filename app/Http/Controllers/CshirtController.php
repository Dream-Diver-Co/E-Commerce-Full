<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cshirt;

class CshirtController extends Controller
{
    public function index()
    {
        $cshirts = Cshirt::all();
        return view('admin.pages.men.casul_shirt.index')->with('cshirts', $cshirts);
    }

    public function create()
    {
        return view('admin.pages.men.casul_shirt.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Cshirt::create($input);
        return redirect('admin/cshirt')->with('flash_message', 'Cshirt Added!');
    }

    public function show($id)
    {
        $cshirt = Cshirt::find($id);
        return view('admin.pages.men.casul_shirt.show')->with('cshirt', $cshirt);
    }

    public function edit($id)
    {
        $cshirt = Cshirt::find($id);
        return view('admin.pages.men.casul_shirt.edit')->with('cshirt', $cshirt);
    }

    public function update(Request $request, $id)
    {
        $cshirt = Cshirt::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $cshirt->update($input);
        return redirect('admin/cshirt')->with('flash_message', 'Cshirt Updated!');
    }

    public function destroy($id)
    {
        Cshirt::destroy($id);
        return redirect('admin/cshirt')->with('flash_message', 'Cshirt Deleted!');
    }
}
