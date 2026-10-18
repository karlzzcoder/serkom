@extends('layouts.admin')

@section('title', 'Edit Layanan - Admin Panel')
@section('page_title', 'Edit Layanan')

@section('content')
  <div class="max-w-2xl">
    <div class="mb-6 flex items-center justify-between">
      <h3 class="text-lg font-bold text-white">Form Edit Layanan: {{ $service->code }}</h3>
      <a href="{{ route('admin.services.index') }}" class="text-xs text-slate-400 hover:text-white transition">
        &larr; Kembali ke Daftar
      </a>
    </div>

    <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data" class="bg-[#0F1623] border border-slate-800 rounded-lg p-6 space-y-5 text-xs">
      @csrf
      @method('PUT')

      <div class="grid grid-cols-2 gap-4">
        <div>
          <label class="block text-slate-400 font-medium mb-1.5">Kode Layanan <span class="text-rose-400">*</span></label>
          <input type="text" name="code" value="{{ old('code', $service->code) }}" required
                 class="w-full bg-[#080C14] border border-slate-700 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500 font-mono">
          @error('code') <p class="text-rose-400 mt-1 text-[11px]">{{ $message }}</p> @enderror
        </div>

        <div>
          <label class="block text-slate-400 font-medium mb-1.5">Kategori <span class="text-rose-400">*</span></label>
          <select name="category" required class="w-full bg-[#080C14] border border-slate-700 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500">
            <option value="Infrastructure" {{ old('category', $service->category) == 'Infrastructure' ? 'selected' : '' }}>Infrastructure</option>
            <option value="Connectivity" {{ old('category', $service->category) == 'Connectivity' ? 'selected' : '' }}>Connectivity</option>
            <option value="Support" {{ old('category', $service->category) == 'Support' ? 'selected' : '' }}>Support</option>
          </select>
          @error('category') <p class="text-rose-400 mt-1 text-[11px]">{{ $message }}</p> @enderror
        </div>
      </div>

      <div>
        <label class="block text-slate-400 font-medium mb-1.5">Nama Layanan <span class="text-rose-400">*</span></label>
        <input type="text" name="title" value="{{ old('title', $service->title) }}" required
               class="w-full bg-[#080C14] border border-slate-700 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500">
        @error('title') <p class="text-rose-400 mt-1 text-[11px]">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block text-slate-400 font-medium mb-1.5">Spesifikasi / Detail Singkat</label>
        <input type="text" name="specs" value="{{ old('specs', $service->specs) }}"
               class="w-full bg-[#080C14] border border-slate-700 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500 font-mono">
      </div>

      <div>
        <label class="block text-slate-400 font-medium mb-1.5">Deskripsi Lengkap <span class="text-rose-400">*</span></label>
        <textarea name="description" rows="4" required
                  class="w-full bg-[#080C14] border border-slate-700 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500 leading-relaxed">{{ old('description', $service->description) }}</textarea>
        @error('description') <p class="text-rose-400 mt-1 text-[11px]">{{ $message }}</p> @enderror
      </div>

      <div class="pt-4 border-t border-slate-800 flex justify-end gap-3">
        <a href="{{ route('admin.services.index') }}" class="px-4 py-2 bg-slate-800 hover:bg-slate-700 text-slate-300 rounded font-medium transition">
          Batal
        </a>
        <button type="submit" class="px-5 py-2 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded transition shadow-sm">
          Perbarui Layanan
        </button>
      </div>
    </form>
  </div>
@endsection