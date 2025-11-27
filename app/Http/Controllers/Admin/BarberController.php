<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barber;

class BarberController extends Controller
{
    public function index()
    {
        $barbers = Barber::orderBy('id', 'desc')->get();
        return view('auth.dashboard.admin.pages.manage-sections', compact('barbers'));
    }

    public function create()
    {
        return view('auth.dashboard.admin.pages.barbers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,webp|max:2048'
        ]);

        $data = $request->all();

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('barbers', 'public');
        }

        Barber::create($data);

        return redirect()->back()->with('success', 'Barber added successfully!');
    }

    public function edit($id)
    {
        $barber = Barber::findOrFail($id);
        return view('auth.dashboard.admin.pages.barbers.edit', compact('barber'));
    }

    public function update(Request $request, $id)
    {
        $barber = Barber::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,webp|max:2048'
        ]);

        $data = $request->all();

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('barbers', 'public');
        }

        $barber->update($data);

        return redirect()->back()->with('success', 'Barber updated successfully!');
    }

    public function destroy($id)
    {
        $barber = Barber::findOrFail($id);
        $barber->delete();

        return redirect()->back()->with('success', 'Barber deleted successfully!');
    }
}
