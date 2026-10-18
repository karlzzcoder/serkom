<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Halaman daftar layanan di Admin Dashboard
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }

    // Form tambah data
    public function create()
    {
        return view('admin.services.create');
    }

    // Proses simpan data baru
    // Proses simpan data baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|unique:services,code',
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'required',
            'specs' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('services', 'public');
        }

        Service::create($validated);

        return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil ditambahkan.');
    }
    
    // Form edit data
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)  
    {
        $validated = $request->validate([
            'code' => 'required|unique:services,code,' . $service->id,
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'required',
            'specs' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($validated);

        return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    // Proses hapus data
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil dihapus.');
    }
}