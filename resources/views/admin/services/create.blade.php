@extends('layouts.admin')

@section('title', 'Tambah Layanan - Admin Panel')

@section('content')

<div class="mb-8 pb-4 border-b border-slate-800/80">
    <h1 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Tambah Layanan Baru</h1>
    <p class="text-xs sm:text-sm text-slate-400 mt-1">Isi formulir berikut untuk menambahkan data layanan baru.</p>
</div>

<div class="bg-[#0F1623] border border-slate-800/80 p-6 sm:p-8 rounded-2xl max-w-3xl">
    <form action="{{ route('admin.services.store') }}" method="POST" class="space-y-5">
        @csrf

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div>
                <label for="code" class="block text-xs font-mono text-slate-300 mb-2">Kode Layanan *</label>
                <input type="text" id="code" name="code" required value="{{ old('code') }}" placeholder="misal: SRV-01"
                       class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">
                @error('code')
                    <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="category" class="block text-xs font-mono text-slate-300 mb-2">Kategori Layanan *</label>
                <select id="category" name="category" required
                        class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white focus:outline-none focus:border-blue-500 transition">
                    <option value="" disabled {{ old('category') ? '' : 'selected' }}>Pilih Kategori</option>
                    <option value="Fiber Optic" {{ old('category') == 'Fiber Optic' ? 'selected' : '' }}>Fiber Optic</option>
                    <option value="Network Infrastructure" {{ old('category') == 'Network Infrastructure' ? 'selected' : '' }}>Network Infrastructure</option>
                    <option value="Server & Data Center" {{ old('category') == 'Server & Data Center' ? 'selected' : '' }}>Server & Data Center</option>
                    <option value="Maintenance & Managed Service" {{ old('category') == 'Maintenance & Managed Service' ? 'selected' : '' }}>Maintenance & Managed Service</option>
                </select>
                @error('category')
                    <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <label for="title" class="block text-xs font-mono text-slate-300 mb-2">Judul Layanan *</label>
            <input type="text" id="title" name="title" required value="{{ old('title') }}" placeholder="Masukkan nama/judul layanan"
                   class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">
            @error('title')
                <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="specs" class="block text-xs font-mono text-slate-300 mb-2">Spesifikasi Singkat *</label>
            <input type="text" id="specs" name="specs" required value="{{ old('specs') }}" placeholder="misal: Cat6A / Single-Mode FO"
                   class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">
            @error('specs')
                <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description" class="block text-xs font-mono text-slate-300 mb-2">Deskripsi Layanan *</label>
            <textarea id="description" name="description" rows="4" required placeholder="Jelaskan rincian cakupan pekerjaan layanan..."
                      class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-4 pt-4">
            <button type="submit" class="px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs sm:text-sm transition shadow-lg shadow-blue-600/20">
                Simpan Layanan
            </button>
            <a href="{{ route('admin.services.index') }}" class="px-6 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold text-xs sm:text-sm transition">
                Batal
            </a>
        </div>
    </form>
</div>

@endsection