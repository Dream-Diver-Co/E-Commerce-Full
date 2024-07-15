<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bag;

class BagController extends Controller
{
    public function index()
    {
        $bags = Bag::all();
        return view('admin.pages.women.bag.index')->with('bags', $bags);
    }

    public function create()
    {
        return view('admin.pages.women.bag.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Bag::create($input);
        return redirect('admin/bag')->with('flash_message', 'bag Added!');
    }

    public function show($id)
    {
        $bag = Bag::find($id);
        return view('admin.pages.women.bag.show')->with('bag', $bag);
    }

    public function edit($id)
    {
        $bag = Bag::find($id);
        return view('admin.pages.women.bag.edit')->with('bag', $bag);
    }

    public function update(Request $request, $id)
    {
        $bag = Bag::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $bag->update($input);
        return redirect('admin/bag')->with('flash_message', 'bag Updated!');
    }

    public function destroy($id)
    {
        Bag::destroy($id);
        return redirect('admin/bag')->with('flash_message', 'bag Deleted!');
    }
}
