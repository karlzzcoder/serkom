@extends('layouts.admin')

@section('title', 'Edit Dokumentasi Galeri - Admin Panel')
@section('page_title', 'Edit Galeri Dokumentasi')

@section('content')
  <div class="max-w-3xl mx-auto bg-[#0F1623] border border-slate-800/80 rounded-2xl p-6 sm:p-8">
    <div class="flex items-center justify-between mb-6 pb-4 border-b border-slate-800/80">
      <div>
        <h3 class="text-base font-bold text-white">Edit Foto Dokumentasi</h3>
        <p class="text-xs text-slate-400 mt-0.5">Upload gambar baru dari komputer untuk mengganti foto proyek.</p>
      </div>
      <a href="{{ route('admin.galleries.index') }}" class="text-xs text-slate-400 hover:text-white transition">
        &larr; Kembali ke Galeri
      </a>
    </div>

    <!-- Tambahkan enctype="multipart/form-data" untuk upload file -->
    <form action="{{ route('admin.galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5 text-xs">
      @csrf
      @method('PUT')

      <!-- Judul Kegiatan / Proyek -->
      <div>
        <label class="block text-slate-400 font-medium mb-1.5">Judul Kegiatan / Proyek <span class="text-rose-500">*</span></label>
        <input type="text" name="title" value="{{ old('title', $gallery->title) }}" required
               class="w-full bg-[#080C14] border border-slate-700/80 rounded-lg px-3.5 py-2.5 text-white focus:outline-none focus:border-blue-500">
        @error('title') <p class="text-rose-400 mt-1 text-[11px]">{{ $message }}</p> @enderror
      </div>

      <!-- Kategori -->
      <div>
        <label class="block text-slate-400 font-medium mb-1.5">Kategori Galeri <span class="text-rose-500">*</span></label>
        <input type="text" name="category" value="{{ old('category', $gallery->category) }}" placeholder="Contoh: Instalasi FO, Server Room, Maintenance" required
               class="w-full bg-[#080C14] border border-slate-700/80 rounded-lg px-3.5 py-2.5 text-white focus:outline-none focus:border-blue-500">
        @error('category') <p class="text-rose-400 mt-1 text-[11px]">{{ $message }}</p> @enderror
      </div>

      <!-- Preview Foto Saat Ini -->
      @if($gallery->image)
        <div>
          <label class="block text-slate-400 font-medium mb-1.5">Foto Saat Ini</label>
          <div class="w-48 h-32 rounded-xl overflow-hidden border border-slate-800 bg-[#080C14] mb-2">
            <img src="{{ \Illuminate\Support\Str::startsWith($gallery->image, ['http://', 'https://']) ? $gallery->image : asset('storage/' . $gallery->image) }}" 
     alt="{{ $gallery->title }}" 
     class="w-full h-full object-cover">
          </div>
        </div>
      @endif

      <!-- Input File Upload Gambar Baru -->
      <div>
        <label class="block text-slate-400 font-medium mb-1.5">Upload Gambar Baru (Opsional)</label>
        <input type="file" name="image" accept="image/png, image/jpeg, image/jpg, image/webp"
               class="w-full bg-[#080C14] border border-slate-700/80 rounded-lg px-3.5 py-2.5 text-slate-300 file:mr-4 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-500 cursor-pointer">
        <p class="text-[11px] text-slate-500 mt-1">Format: JPG, PNG, WEBP (Maksimal 4MB). Biarkan kosong jika tidak ingin mengubah foto.</p>
        @error('image') <p class="text-rose-400 mt-1 text-[11px]">{{ $message }}</p> @enderror
      </div>

      <!-- Tombol Aksi -->
      <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-800/80">
        <a href="{{ route('admin.galleries.index') }}" class="px-4 py-2.5 rounded-lg bg-slate-800 text-slate-300 hover:bg-slate-700 transition">
          Batal
        </a>
        <button type="submit" class="px-5 py-2.5 rounded-lg bg-blue-600 hover:bg-blue-500 text-white font-semibold transition shadow-lg shadow-blue-600/20">
          Simpan Perubahan
        </button>
      </div>
    </form>
  </div>
@endsection