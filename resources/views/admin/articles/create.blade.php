@extends('layouts.admin')

@section('title', 'Tulis Artikel - Admin Panel')

@section('content')

<div class="mb-8 pb-4 border-b border-slate-800/80">
    <h1 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Tulis Artikel Baru</h1>
    <p class="text-xs sm:text-sm text-slate-400 mt-1">Buat postingan informasi atau wawasan teknis baru.</p>
</div>

<div class="bg-[#0F1623] border border-slate-800/80 p-6 sm:p-8 rounded-2xl max-w-3xl">
    <form action="{{ route('admin.articles.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label for="category" class="block text-xs font-mono text-slate-300 mb-2">Kategori Artikel *</label>
            <select id="category" name="category" required
                    class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white focus:outline-none focus:border-blue-500 transition">
                <option value="" disabled {{ old('category') ? '' : 'selected' }}>Pilih Kategori</option>
                <option value="Network Security" {{ old('category') == 'Network Security' ? 'selected' : '' }}>Network Security</option>
                <option value="Fiber Optic" {{ old('category') == 'Fiber Optic' ? 'selected' : '' }}>Fiber Optic</option>
                <option value="Data Center" {{ old('category') == 'Data Center' ? 'selected' : '' }}>Data Center</option>
                <option value="IT Infrastructure" {{ old('category') == 'IT Infrastructure' ? 'selected' : '' }}>IT Infrastructure</option>
                <option value="Tutorial & Insight" {{ old('category') == 'Tutorial & Insight' ? 'selected' : '' }}>Tutorial & Insight</option>
            </select>
            @error('category')
                <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="title" class="block text-xs font-mono text-slate-300 mb-2">Judul Artikel *</label>
            <input type="text" id="title" name="title" required value="{{ old('title') }}" placeholder="Masukkan judul artikel"
                   class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">
            @error('title')
                <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="excerpt" class="block text-xs font-mono text-slate-300 mb-2">Ringkasan / Excerpt *</label>
            <input type="text" id="excerpt" name="excerpt" required value="{{ old('excerpt') }}" placeholder="Ringkasan singkat artikel"
                   class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">
            @error('excerpt')
                <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="content" class="block text-xs font-mono text-slate-300 mb-2">Isi Konten Artikel *</label>
            <textarea id="content" name="content" rows="8" required placeholder="Tuliskan isi artikel secara lengkap..."
                      class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">{{ old('content') }}</textarea>
            @error('content')
                <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-4 pt-4">
            <button type="submit" class="px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs sm:text-sm transition shadow-lg shadow-blue-600/20">
                Terbitkan Artikel
            </button>
            <a href="{{ route('admin.articles.index') }}" class="px-6 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold text-xs sm:text-sm transition">
                Batal
            </a>
        </div>
    </form>
</div>

@endsection