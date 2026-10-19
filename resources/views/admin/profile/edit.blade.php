@extends('layouts.admin')

@section('title', 'Edit Profil Perusahaan - Admin Panel')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-white">Profil Perusahaan</h1>
            <p class="text-xs text-slate-400 mt-1">Kelola konten Deskripsi, Visi, dan Misi yang tampil pada halaman profil publik.</p>
        </div>
    </div>

    @if(session('success'))
        <div class="p-4 rounded-xl bg-blue-600/10 border border-blue-500/30 text-blue-400 text-xs">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-[#0F1623] border border-slate-800/80 rounded-2xl p-6 sm:p-8">
        <form action="{{ route('admin.profile.update') }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-xs font-semibold text-slate-300 mb-2">Nama Perusahaan</label>
                <input type="text" name="company_name" value="{{ old('company_name', $profile->company_name) }}" 
                       class="w-full px-4 py-3 rounded-xl bg-[#080C14] border border-slate-800 text-slate-100 text-xs focus:outline-none focus:border-blue-500 transition" required>
                @error('company_name') <span class="text-red-400 text-[11px] mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 mb-2">Ringkasan Profil & Deskripsi Perusahaan</label>
                <textarea name="about" rows="5" 
                          class="w-full px-4 py-3 rounded-xl bg-[#080C14] border border-slate-800 text-slate-100 text-xs focus:outline-none focus:border-blue-500 transition" required>{{ old('about', $profile->about) }}</textarea>
                @error('about') <span class="text-red-400 text-[11px] mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 mb-2">Visi Perusahaan</label>
                <textarea name="vision" rows="3" 
                          class="w-full px-4 py-3 rounded-xl bg-[#080C14] border border-slate-800 text-slate-100 text-xs focus:outline-none focus:border-blue-500 transition" required>{{ old('vision', $profile->vision) }}</textarea>
                @error('vision') <span class="text-red-400 text-[11px] mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 mb-2">Misi Perusahaan</label>
                <textarea name="mission" rows="4" 
                          class="w-full px-4 py-3 rounded-xl bg-[#080C14] border border-slate-800 text-slate-100 text-xs focus:outline-none focus:border-blue-500 transition" required>{{ old('mission', $profile->mission) }}</textarea>
                @error('mission') <span class="text-red-400 text-[11px] mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div class="pt-4 border-t border-slate-800/80 flex justify-end">
                <button type="submit" class="px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs shadow-lg shadow-blue-600/20 transition">
                    Simpan Perubahan Profil
                </button>
            </div>
        </form>
    </div>
</div>
@endsection