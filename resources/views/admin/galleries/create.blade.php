@extends('layouts.admin')

@section('title', 'Unggah Galeri - Admin Panel')

@section('content')

<div class="mb-8 pb-4 border-b border-slate-800/80">
    <h1 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Unggah Dokumentasi Foto</h1>
    <p class="text-xs sm:text-sm text-slate-400 mt-1">Tambahkan foto dokumentasi proyek baru.</p>
</div>

<div class="bg-[#0F1623] border border-slate-800/80 p-6 sm:p-8 rounded-2xl max-w-3xl">
    <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div>
                <label for="category" class="block text-xs font-mono text-slate-300 mb-2">Kategori Proyek *</label>
                <select id="category" name="category" required
                        class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white focus:outline-none focus:border-blue-500 transition">
                    <option value="" disabled {{ old('category') ? '' : 'selected' }}>Pilih Kategori</option>
                    <option value="Server Room Setup" {{ old('category') == 'Server Room Setup' ? 'selected' : '' }}>Server Room Setup</option>
                    <option value="Fiber Optic Splicing" {{ old('category') == 'Fiber Optic Splicing' ? 'selected' : '' }}>Fiber Optic Splicing</option>
                    <option value="Maintenance Jaringan" {{ old('category') == 'Maintenance Jaringan' ? 'selected' : '' }}>Maintenance Jaringan</option>
                    <option value="Structured Cabling" {{ old('category') == 'Structured Cabling' ? 'selected' : '' }}>Structured Cabling</option>
                    <option value="Dokumentasi Proyek" {{ old('category') == 'Dokumentasi Proyek' ? 'selected' : '' }}>Dokumentasi Proyek</option>
                </select>
                @error('category')
                    <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="image" class="block text-xs font-mono text-slate-300 mb-2">File Foto *</label>
                <input type="file" id="image" name="image" required accept="image/*"
                       class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-2.5 text-xs text-slate-400 file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-500 transition">
                @error('image')
                    <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <label for="title" class="block text-xs font-mono text-slate-300 mb-2">Judul Foto / Kegiatan *</label>
            <input type="text" id="title" name="title" required value="{{ old('title') }}" placeholder="Masukkan judul foto dokumentasi"
                   class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">
            @error('title')
                <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description" class="block text-xs font-mono text-slate-300 mb-2">Keterangan Singkat</label>
            <textarea id="description" name="description" rows="3" placeholder="Keterangan singkat kegiatan..."
                      class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-4 pt-4">
            <button type="submit" class="px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs sm:text-sm transition shadow-lg shadow-blue-600/20">
                Simpan Foto
            </button>
            <a href="{{ route('admin.galleries.index') }}" class="px-6 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold text-xs sm:text-sm transition">
                Batal
            </a>
        </div>
    </form>
</div>

@endsection