<?php

namespace App\Http\Controllers;

use App\Models\Ustadz;
use Illuminate\Http\Request;

class UstadzController extends Controller
{
    public function index() {
        $data = Ustadz::all();
        $title = 'ustadz';
        return view('ustadz.ustadz', compact('data', 'title'));
    }

    public function create()
    {
        $title = 'create-ustadz';
        return view('ustadz.create', compact('title'));
    }

    public function insert(Request $request)
    {
        Ustadz::create([
            'name' => $request->name,
            'province' => $request->province,
            'city' => $request->city,
            'phone' => $request->phone,
            'email' => $request->email
        ]);
        return redirect('/ustadz');
    }

    public function edit($id)
    {
        $data = Ustadz::find($id);
        $title = 'edit-ustadz';
        return view('ustadz.edit', compact('data', 'title'));
    }

    public function update(Request $request, $id)
    {
        $data = Ustadz::find($id);
        $data->update($request->all());
        return redirect('/ustadz');
    }

    public function delete($id)
    {
        $data = Ustadz::find($id);
        $data->delete();
        return redirect('/ustadz');
    }
}
