<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Womenshoe;

class WomenshoeController extends Controller
{
    public function index()
    {
        $womenshoes = Womenshoe::all();
        return view('admin.pages.women.women_shoes.index')->with('womenshoes', $womenshoes);
    }

    public function create()
    {
        return view('admin.pages.women.women_shoes.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Womenshoe::create($input);
        return redirect('admin/womenshoe')->with('flash_message', 'womenshoe Added!');
    }

    public function show($id)
    {
        $womenshoe = Womenshoe::find($id);
        return view('admin.pages.women.women_shoes.show')->with('womenshoe', $womenshoe);
    }

    public function edit($id)
    {
        $womenshoe = Womenshoe::find($id);
        return view('admin.pages.women.women_shoes.edit')->with('womenshoe', $womenshoe);
    }

    public function update(Request $request, $id)
    {
        $womenshoe = Womenshoe::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $womenshoe->update($input);
        return redirect('admin/womenshoe')->with('flash_message', 'womenshoe Updated!');
    }

    public function destroy($id)
    {
        Womenshoe::destroy($id);
        return redirect('admin/womenshoe')->with('flash_message', 'womenshoe Deleted!');
    }
}
