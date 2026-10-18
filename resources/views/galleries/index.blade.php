@extends('layouts.app')

@section('title', 'Dokumentasi Galeri Proyek - PT Solusi Koneksi Anda')

@section('content')

<!-- ==========================================
     DOKUMENTASI GALERI SECTION (FULL WIDTH)
=========================================== -->
<section class="w-full bg-[#080C14] py-12 sm:py-16 min-h-[calc(100vh-4rem)]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Header Section -->
    <div class="mb-12 pb-6 border-b border-slate-800/80 reveal">
      <span class="text-xs font-bold uppercase tracking-widest text-blue-500">Rekam Visual</span>
      <h1 class="text-3xl sm:text-4xl font-extrabold text-white mt-2 tracking-tight">Dokumentasi Proyek & Lapangan</h1>
      <p class="text-slate-400 text-sm sm:text-base mt-2 max-w-2xl leading-relaxed">
        Galeri dokumentasi pengerjaan instalasi jaringan, penarikan fiber optic, serta integrasi ruang server oleh tim teknisi kami.
      </p>
    </div>

    <!-- Grid Kartu Galeri -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
      @forelse ($galleries as $item)
        <div class="bg-[#0F1623] border border-slate-800/80 rounded-2xl overflow-hidden group hover:border-blue-500/50 transition duration-300 flex flex-col justify-between reveal">
          
          <!-- Wrapper Gambar & Overlay -->
          <div class="relative h-56 sm:h-64 overflow-hidden bg-slate-900">
            <img 
              src="{{ asset($item->image) }}" 
              alt="{{ $item->title }}" 
              class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500 opacity-90 group-hover:opacity-100"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-[#0F1623] via-transparent to-transparent opacity-80"></div>
            
            <!-- Category Badge -->
            <div class="absolute top-3.5 left-3.5">
              <span class="px-3 py-1 rounded-md bg-blue-600/90 text-white text-[10px] font-semibold tracking-wider uppercase backdrop-blur-md shadow-lg">
                {{ $item->category ?? 'Dokumentasi' }}
              </span>
            </div>
          </div>

          <!-- Deskripsi & Info Galeri -->
          <div class="p-5 sm:p-6 flex-grow flex flex-col justify-between">
            <div>
              <h3 class="text-base sm:text-lg font-bold text-white group-hover:text-blue-400 transition leading-snug mb-2">
                {{ $item->title }}
              </h3>
              @if (isset($item->description) && $item->description)
                <p class="text-slate-400 text-xs sm:text-sm leading-relaxed line-clamp-2">
                  {{ $item->description }}
                </p>
              @endif
            </div>

            <!-- Footer Card Info -->
            <div class="mt-4 pt-4 border-t border-slate-800/60 flex items-center justify-between text-xs text-slate-500 font-mono">
              <span class="flex items-center gap-1.5 text-slate-400">
                <svg class="w-3.5 h-3.5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                Jabodetabek Operational
              </span>
            </div>
          </div>

        </div>
      @empty
        <div class="col-span-1 sm:col-span-2 lg:col-span-3 text-center py-16 text-slate-500 text-xs sm:text-sm border border-dashed border-slate-800 rounded-2xl">
          Belum ada dokumentasi galeri yang ditambahkan.
        </div>
      @endforelse
    </div>

  </div>
</section>

<!-- CSS & JS Animasi Reveal Scroll -->
<style>
  .reveal {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    will-change: opacity, transform;
  }
  .reveal.active {
    opacity: 1;
    transform: translateY(0);
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const reveals = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        }
      });
    }, { threshold: 0.1 });

    reveals.forEach(el => observer.observe(el));
  });
</script>

@endsection