<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Display all services in admin panel
    public function index() {
        $services = Service::all();
        return view('auth.dashboard.admin.pages.services.index', compact('services'));
    }

    // Show form to create a service
    public function create() {
        return view('auth.dashboard.admin.pages.services.create');
    }

public function store(Request $request) {
    $data = $request->validate([
        'title' => 'required|string',
        'description' => 'nullable|string',
        'image' => 'nullable|image|max:2048',
    ]);

    if ($request->hasFile('image')) {
        // Ye automatically hashed filename ke sath storage/app/public/services me save karega
        $data['image'] = $request->file('image')->store('services', 'public');
    }

    Service::create($data);

    return back()->with('success', 'Service added successfully');
}


    // Show form to edit a service
    public function edit(Service $service) {
        return view('auth.dashboard.admin.pages.services.edit-service', compact('service'));
    }

    // Update existing service
    public function update(Request $request, Service $service) {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($data);

        return back()->with('success', 'Service updated successfully');
    }

    // Delete service
    public function destroy(Service $service) {
        // Optionally delete the image file from storage
        if ($service->image) {
            \Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return back()->with('success', 'Service deleted successfully');
    }
}
