@extends('layouts.admin')

@section('title', 'Edit Artikel - Admin Panel')
@section('page_title', 'Edit Artikel')

@section('content')
  <div class="max-w-4xl mx-auto bg-[#0F1623] border border-slate-800/80 rounded-2xl p-6 sm:p-8">
    <div class="flex items-center justify-between mb-6 pb-4 border-b border-slate-800/80">
      <div>
        <h3 class="text-base font-bold text-white">Edit Artikel Berita</h3>
        <p class="text-xs text-slate-400 mt-0.5">Perbarui informasi artikel yang sudah terpublikasi.</p>
      </div>
      <a href="{{ route('admin.articles.index') }}" class="text-xs text-slate-400 hover:text-white transition">
        &larr; Kembali ke Daftar
      </a>
    </div>

    <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" class="space-y-5 text-xs">
      @csrf
      @method('PUT')

      <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <!-- Judul Artikel -->
        <div>
          <label class="block text-slate-400 font-medium mb-1.5">Judul Artikel <span class="text-rose-500">*</span></label>
          <input type="text" name="title" value="{{ old('title', $article->title) }}" required
                 class="w-full bg-[#080C14] border border-slate-700/80 rounded-lg px-3.5 py-2.5 text-white focus:outline-none focus:border-blue-500">
          @error('title') <p class="text-rose-400 mt-1 text-[11px]">{{ $message }}</p> @enderror
        </div>

        <!-- Kategori -->
        <div>
          <label class="block text-slate-400 font-medium mb-1.5">Kategori <span class="text-rose-500">*</span></label>
          <input type="text" name="category" value="{{ old('category', $article->category) }}" placeholder="Contoh: Keamanan IT, Infrastruktur" required
                 class="w-full bg-[#080C14] border border-slate-700/80 rounded-lg px-3.5 py-2.5 text-white focus:outline-none focus:border-blue-500">
          @error('category') <p class="text-rose-400 mt-1 text-[11px]">{{ $message }}</p> @enderror
        </div>
      </div>

      <!-- Ringkasan (Excerpt) -->
      <div>
        <label class="block text-slate-400 font-medium mb-1.5">Ringkasan Singkat (Excerpt) <span class="text-rose-500">*</span></label>
        <textarea name="excerpt" rows="2" required
                  class="w-full bg-[#080C14] border border-slate-700/80 rounded-lg px-3.5 py-2.5 text-white focus:outline-none focus:border-blue-500 leading-relaxed">{{ old('excerpt', $article->excerpt) }}</textarea>
        @error('excerpt') <p class="text-rose-400 mt-1 text-[11px]">{{ $message }}</p> @enderror
      </div>

      <!-- Isi Artikel Lengkap -->
      <div>
        <label class="block text-slate-400 font-medium mb-1.5">Isi Artikel Lengkap <span class="text-rose-500">*</span></label>
        <textarea name="content" rows="10" required
                  class="w-full bg-[#080C14] border border-slate-700/80 rounded-lg px-3.5 py-2.5 text-white focus:outline-none focus:border-blue-500 leading-relaxed font-sans">{{ old('content', $article->content) }}</textarea>
        @error('content') <p class="text-rose-400 mt-1 text-[11px]">{{ $message }}</p> @enderror
      </div>

      <!-- Tombol Aksi -->
      <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-800/80">
        <a href="{{ route('admin.articles.index') }}" class="px-4 py-2.5 rounded-lg bg-slate-800 text-slate-300 hover:bg-slate-700 transition">
          Batal
        </a>
        <button type="submit" class="px-5 py-2.5 rounded-lg bg-blue-600 hover:bg-blue-500 text-white font-semibold transition shadow-lg shadow-blue-600/20">
          Simpan Perubahan
        </button>
      </div>
    </form>
  </div>
@endsection