<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Womentop;

class WomentopController extends Controller
{
    public function index()
    {
        $womentops = Womentop::all();
        return view('admin.pages.women.women_top.index')->with('womentops', $womentops);
    }

    public function create()
    {
        return view('admin.pages.women.women_top.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Womentop::create($input);
        return redirect('admin/womentop')->with('flash_message', 'womentop Added!');
    }

    public function show($id)
    {
        $womentop = Womentop::find($id);
        return view('admin.pages.women.women_top.show')->with('womentop', $womentop);
    }

    public function edit($id)
    {
        $womentop = Womentop::find($id);
        return view('admin.pages.women.women_top.edit')->with('womentop', $womentop);
    }

    public function update(Request $request, $id)
    {
        $womentop = Womentop::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $womentop->update($input);
        return redirect('admin/womentop')->with('flash_message', 'womentop Updated!');
    }

    public function destroy($id)
    {
        Womentop::destroy($id);
        return redirect('admin/womentop')->with('flash_message', 'womentop Deleted!');
    }
}
