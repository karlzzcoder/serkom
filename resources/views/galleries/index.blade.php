@extends('layouts.app')

@section('title', 'Galeri Dokumentasi - PT Solusi Koneksi Anda')

@section('content')
  <section class="py-16 bg-[#080C14] min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Header Halaman -->
      <div class="mb-12">
        <h1 class="text-3xl font-extrabold text-white tracking-tight sm:text-4xl">
          Galeri Pengerjaan Proyek
        </h1>
        <p class="mt-3 text-sm text-slate-400 max-w-2xl">
          Rekaman visual standar kerapihan kabel, infrastruktur server, dan penarikan fiber optic oleh tim insinyur kami.
        </p>
      </div>

      <!-- Grid Galeri -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($galleries as $item)
          <div class="bg-[#0F1623] border border-slate-800/80 rounded-2xl overflow-hidden hover:border-slate-700 transition group">
            
            <!-- Foto Galeri -->
            <div class="relative h-56 overflow-hidden bg-slate-900">
              <img src="{{ asset($item->image) }}" 
                   alt="{{ $item->title }}" 
                   class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
              
              <!-- Badge Kategori -->
              <span class="absolute top-4 left-4 bg-blue-600/90 backdrop-blur-md text-white text-[11px] font-medium px-3 py-1 rounded-full shadow-lg">
                {{ $item->category }}
              </span>
            </div>

            <!-- Detail Galeri -->
            <div class="p-6">
              <h3 class="text-base font-bold text-white group-hover:text-blue-400 transition leading-snug">
                {{ $item->title }}
              </h3>
            </div>

          </div>
        @empty
          <div class="col-span-full text-center py-16 bg-[#0F1623] border border-slate-800/80 rounded-2xl">
            <p class="text-slate-400 text-sm">Belum ada dokumentasi proyek yang dipublikasikan.</p>
          </div>
        @endforelse
      </div>

    </div>
  </section>
@endsection