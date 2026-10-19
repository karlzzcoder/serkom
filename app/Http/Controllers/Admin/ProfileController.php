<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        $profile = Profile::firstOrCreate(
            ['id' => 1],
            [
                'company_name' => 'PT Solusi Koneksi Anda',
                'about'        => 'Deskripsi awal perusahaan...',
                'vision'       => 'Visi awal perusahaan...',
                'mission'      => 'Misi awal perusahaan...',
            ]
        );

        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'about'        => 'required|string',
            'vision'       => 'required|string',
            'mission'      => 'required|string',
        ]);

        // Paksa simpan / update ke ID 1
        Profile::updateOrCreate(
            ['id' => 1],
            [
                'company_name' => $request->company_name,
                'about'        => $request->about,
                'vision'       => $request->vision,
                'mission'      => $request->mission,
            ]
        );

        return redirect()->route('admin.profile.edit')->with('success', 'Konten profil berhasil diperbarui!');
    }
}