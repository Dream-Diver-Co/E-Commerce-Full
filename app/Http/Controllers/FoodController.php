<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return view('admin.pages.baby.food.index')->with('foods', $foods);
    }

    public function create()
    {
        return view('admin.pages.baby.food.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        Food::create($input);
        return redirect('admin/food')->with('flash_message', 'food Added!');
    }

    public function show($id)
    {
        $food = Food::find($id);
        return view('admin.pages.baby.food.show')->with('food', $food);
    }

    public function edit($id)
    {
        $food = Food::find($id);
        return view('admin.pages.baby.food.edit')->with('food', $food);
    }

    public function update(Request $request, $id)
    {
        $food = Food::find($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }

        $food->update($input);
        return redirect('admin/food')->with('flash_message', 'food Updated!');
    }

    public function destroy($id)
    {
        Food::destroy($id);
        return redirect('admin/food')->with('flash_message', 'food Deleted!');
    }
}
