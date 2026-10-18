@extends('layouts.app')

@section('title', 'Katalog Layanan & Hardware - PT Solusi Koneksi Anda')

@section('content')

<!-- ==========================================
     KATALOG LAYANAN SECTION (FULL WIDTH)
=========================================== -->
<section class="w-full bg-[#080C14] py-12 sm:py-16 min-h-[calc(100vh-4rem)]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Header Section -->
    <div class="mb-12 pb-6 border-b border-slate-800/80 reveal">
      <span class="text-xs font-bold uppercase tracking-widest text-blue-500">Katalog Lengkap</span>
      <h1 class="text-3xl sm:text-4xl font-extrabold text-white mt-2 tracking-tight">Produk & Layanan Konektivitas</h1>
      <p class="text-slate-400 text-sm sm:text-base mt-2 max-w-2xl leading-relaxed">
        Seluruh solusi jaringan dan pemeliharaan IT yang kami sediakan untuk kebutuhan bisnis Anda.
      </p>
    </div>

    <!-- Grid Katalog Layanan -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
      @forelse($services as $service)
        <div class="bg-[#0F1623] border border-slate-800/80 p-6 rounded-2xl flex flex-col justify-between hover:border-blue-500/50 transition duration-300 group reveal">
          <div>
            <!-- Top Badge & Code -->
            <div class="flex items-center justify-between mb-4">
              <span class="text-[10px] font-mono text-slate-500 uppercase tracking-wider">{{ $service->code }}</span>
              <span class="text-[10px] bg-blue-500/10 text-blue-400 px-2.5 py-1 rounded border border-blue-500/20 font-medium">
                {{ $service->category }}
              </span>
            </div>

            <!-- SVG Vector Icon -->
            <div class="w-10 h-10 rounded-xl bg-blue-600/10 border border-blue-500/20 text-blue-400 flex items-center justify-center mb-4 group-hover:bg-blue-600 group-hover:text-white transition">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>

            <!-- Title & Description -->
            <h2 class="text-lg font-bold text-white mb-3 group-hover:text-blue-400 transition">{{ $service->title }}</h2>
            <p class="text-slate-400 text-xs sm:text-sm leading-relaxed mb-6">
              {{ $service->description }}
            </p>
          </div>

          <!-- Footer Specs -->
          <div class="pt-4 border-t border-slate-800/60 flex items-center justify-between text-xs text-slate-400 font-mono">
            <span>{{ $service->specs }}</span>
          </div>
        </div>
      @empty
        <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-16 text-slate-500 text-xs sm:text-sm border border-dashed border-slate-800 rounded-2xl">
          Belum ada layanan yang ditambahkan.
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