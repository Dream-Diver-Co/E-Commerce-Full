<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cosmetic;

class CosmeticController extends Controller
{
    public function index()
    {
        $cosmetics = Cosmetic::all();
        return view('admin.pages.women.cosmetic.index')->with('cosmetics', $cosmetics);
    }

    public function create()
    {
        return view('admin.pages.women.cosmetic.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Cosmetic::create($input);
        return redirect('admin/cosmetic')->with('flash_message', 'cosmetic Added!');
    }

    public function show($id)
    {
        $cosmetic = Cosmetic::find($id);
        return view('admin.pages.women.cosmetic.show')->with('cosmetic', $cosmetic);
    }

    public function edit($id)
    {
        $cosmetic = Cosmetic::find($id);
        return view('admin.pages.women.cosmetic.edit')->with('cosmetic', $cosmetic);
    }

    public function update(Request $request, $id)
    {
        $cosmetic = Cosmetic::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $cosmetic->update($input);
        return redirect('admin/cosmetic')->with('flash_message', 'cosmetic Updated!');
    }

    public function destroy($id)
    {
        Cosmetic::destroy($id);
        return redirect('admin/cosmetic')->with('flash_message', 'cosmetic Deleted!');
    }
}
