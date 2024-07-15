<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Womenpent;

class WomenpentController extends Controller
{
    public function index()
    {
        $womenpents = Womenpent::all();
        return view('admin.pages.women.women_pent.index')->with('womenpents', $womenpents);
    }

    public function create()
    {
        return view('admin.pages.women.women_pent.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Womenpent::create($input);
        return redirect('admin/womenpent')->with('flash_message', 'womenpent Added!');
    }

    public function show($id)
    {
        $womenpent = Womenpent::find($id);
        return view('admin.pages.women.women_pent.show')->with('womenpent', $womenpent);
    }

    public function edit($id)
    {
        $womenpent = Womenpent::find($id);
        return view('admin.pages.women.women_pent.edit')->with('womenpent', $womenpent);
    }

    public function update(Request $request, $id)
    {
        $womenpent = Womenpent::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $womenpent->update($input);
        return redirect('admin/womenpent')->with('flash_message', 'womenpent Updated!');
    }

    public function destroy($id)
    {
        Womenpent::destroy($id);
        return redirect('admin/womenpent')->with('flash_message', 'womenpent Deleted!');
    }
}
