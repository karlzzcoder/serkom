@extends('layouts.admin')

@section('title', 'Upload Dokumentasi - Admin Panel')
@section('page_title', 'Upload Foto Galeri Baru')

@section('content')
  <div class="max-w-xl">
    <div class="mb-6 flex items-center justify-between">
      <h3 class="text-lg font-bold text-white">Form Upload Dokumentasi</h3>
      <a href="{{ route('admin.galleries.index') }}" class="text-xs text-slate-400 hover:text-white transition">&larr; Kembali</a>
    </div>

    <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data" class="bg-[#0F1623] border border-slate-800 rounded-lg p-6 space-y-5 text-xs">
      @csrf

      <div>
        <label class="block text-slate-400 font-medium mb-1.5">Judul Kegiatan / Proyek <span class="text-rose-400">*</span></label>
        <input type="text" name="title" value="{{ old('title') }}" placeholder="Contoh: Penarikan FO Gedung A" required
               class="w-full bg-[#080C14] border border-slate-700 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500">
      </div>

      <div>
        <label class="block text-slate-400 font-medium mb-1.5">Kategori <span class="text-rose-400">*</span></label>
        <select name="category" required class="w-full bg-[#080C14] border border-slate-700 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500">
          <option value="Instalasi FO">Instalasi FO</option>
          <option value="Ruang Server">Ruang Server</option>
          <option value="Kabel Structured">Kabel Structured</option>
          <option value="Maintenance">Maintenance</option>
        </select>
      </div>

      <div>
        <label class="block text-slate-400 font-medium mb-1.5">Pilih Foto <span class="text-rose-400">*</span></label>
        <input type="file" name="image" accept="image/*" required
               class="w-full bg-[#080C14] border border-slate-700 rounded px-3 py-2 text-slate-300 focus:outline-none focus:border-blue-500">
        <p class="text-[10px] text-slate-500 mt-1">Format: JPG, PNG, WEBP. Maksimal 3MB.</p>
      </div>

      <div>
        <label class="block text-slate-400 font-medium mb-1.5">Deskripsi Singkat (Opsional)</label>
        <textarea name="description" rows="3" placeholder="Catatan lokasi atau spesifikasi pengerjaan..."
                  class="w-full bg-[#080C14] border border-slate-700 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500">{{ old('description') }}</textarea>
      </div>

      <div class="pt-4 border-t border-slate-800 flex justify-end gap-3">
        <a href="{{ route('admin.galleries.index') }}" class="px-4 py-2 bg-slate-800 text-slate-300 rounded font-medium">Batal</a>
        <button type="submit" class="px-5 py-2 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded">Simpan Foto</button>
      </div>
    </form>
  </div>
@endsection