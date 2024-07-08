<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserContact;

class UserContactController extends Controller
{
    public function index()
    {
        $usercontacts = UserContact::all();
        return view('admin.pages.contact.user_contact.index')->with('usercontacts', $usercontacts);
    }

    public function create()
    {
        return view('admin.pages.contact.user_contact.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }
        UserContact::create($input);
        return redirect()->back()->with('flash_message', 'UserContact Added!');
    }

    public function show($id)
    {
        $usercontact = UserContact::find($id);
        return view('admin.pages.contact.user_contact.show')->with('usercontacts', $usercontact);
    }

    public function edit($id)
    {
        $usercontact = UserContact::find($id);
        return view('admin.pages.contact.user_contact.edit')->with('usercontacts', $usercontact);
    }

    public function update(Request $request, $id)
    {
        $usercontact = UserContact::find($id);
        $input = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $input['image'] = $path;
        }
        $usercontact->update($input);
        return redirect('admin/usercontact')->with('flash_message', 'UserContact Updated!');
    }

    public function destroy($id)
    {
        UserContact::destroy($id);
        return redirect('admin/usercontact')->with('flash_message', 'UserContact Deleted!');
    }
}
