@extends('layouts.admin')

@section('title', 'Tulis Artikel - Admin Panel')
@section('page_title', 'Tulis Artikel Baru')

@section('content')
  <div class="max-w-2xl">
    <div class="mb-6 flex items-center justify-between">
      <h3 class="text-lg font-bold text-white">Form Artikel Baru</h3>
      <a href="{{ route('admin.articles.index') }}" class="text-xs text-slate-400 hover:text-white transition">&larr; Kembali</a>
    </div>

    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data" class="bg-[#0F1623] border border-slate-800 rounded-lg p-6 space-y-5 text-xs">
      @csrf

      <div>
        <label class="block text-slate-400 font-medium mb-1.5">Judul Artikel <span class="text-rose-400">*</span></label>
        <input type="text" name="title" value="{{ old('title') }}" placeholder="Contoh: Pentingnya Router Backup untuk Bisnis" required
               class="w-full bg-[#080C14] border border-slate-700 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500">
      </div>

      <div>
        <label class="block text-slate-400 font-medium mb-1.5">Kategori <span class="text-rose-400">*</span></label>
        <select name="category" required class="w-full bg-[#080C14] border border-slate-700 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500">
          <option value="Jaringan & Server">Jaringan & Server</option>
          <option value="Keamanan IT">Keamanan IT</option>
          <option value="Update Perusahaan">Update Perusahaan</option>
        </select>
      </div>

      <div>
        <label class="block text-slate-400 font-medium mb-1.5">Ringkasan (Excerpt) <span class="text-rose-400">*</span></label>
        <textarea name="excerpt" rows="2" maxlength="300" required placeholder="Ringkasan 1-2 kalimat untuk preview card..."
                  class="w-full bg-[#080C14] border border-slate-700 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500">{{ old('excerpt') }}</textarea>
      </div>

      <div>
        <label class="block text-slate-400 font-medium mb-1.5">Isi Artikel Lengkap <span class="text-rose-400">*</span></label>
        <textarea name="content" rows="8" required placeholder="Tulis konten berita lengkap di sini..."
                  class="w-full bg-[#080C14] border border-slate-700 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500 leading-relaxed">{{ old('content') }}</textarea>
      </div>

      <div class="pt-4 border-t border-slate-800 flex justify-end gap-3">
        <a href="{{ route('admin.articles.index') }}" class="px-4 py-2 bg-slate-800 text-slate-300 rounded font-medium">Batal</a>
        <button type="submit" class="px-5 py-2 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded">Terbitkan Artikel</button>
      </div>
    </form>
  </div>
@endsection