@extends('layouts.app')

@section('title', 'PT Solusi Koneksi Anda - Infrastructure & IT Network')

@section('content')

<!-- ==========================================
     HERO SECTION (FULL WIDTH & RESPONSIVE)
=========================================== -->
<section class="relative w-full bg-[#080C14] overflow-hidden pt-12 pb-20">
  
  <!-- Background Image Overlay (Full Width) -->
  <div class="absolute inset-0 w-full h-full pointer-events-none overflow-hidden z-0">
    <div class="absolute inset-0 bg-gradient-to-r from-[#080C14] via-[#080C14]/80 to-transparent z-10"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[#080C14]/50 to-[#080C14] z-10"></div>
    <img 
      src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=1000&auto=format&fit=crop" 
      alt="Infrastruktur Server" 
      class="w-full h-full object-cover object-right opacity-40 md:opacity-70"
    />
  </div>

  <!-- Hero Content Container -->
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 reveal">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
      <div class="lg:col-span-7">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-blue-500/30 bg-blue-500/10 text-blue-400 text-xs font-medium mb-6 backdrop-blur-sm">
          <span class="w-1.5 h-1.5 rounded-full bg-blue-400 animate-pulse"></span>
          Sertifikasi Vendor Jaringan & Fiber Optic Jabodetabek
        </div>
        
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
          Infrastruktur Jaringan Kantor, Server, & Fiber Optic.
        </h1>
        
        <p class="text-slate-400 text-sm sm:text-base max-w-xl mb-8 leading-relaxed">
          Perancangan topologi LAN, penarikan kabel FO, instalasi Mikrotik/Cisco, dan integrasi ruang server untuk kantor, sekolah, dan fasilitas industri.
        </p>

        <div class="flex flex-wrap items-center gap-4">
          <a href="{{ route('services.public') }}" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs sm:text-sm px-6 py-3 rounded-lg transition shadow-lg shadow-blue-600/20">
            Jelajahi Layanan
          </a>
          <a href="#profil" class="border border-slate-700 hover:border-slate-500 text-slate-300 font-medium text-xs sm:text-sm px-6 py-3 rounded-lg transition">
            Tentang Perusahaan
          </a>
        </div>
      </div>
    </div>

    <!-- Metrics Bar -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 py-6 border-y border-slate-800/80 mt-16 backdrop-blur-xs reveal">
      <div>
        <div class="text-2xl sm:text-3xl font-extrabold text-white">99.9%</div>
        <div class="text-xs text-slate-500 mt-1">Target Uptime Network</div>
      </div>
      <div>
        <div class="text-2xl sm:text-3xl font-extrabold text-white">&lt; 15 Menit</div>
        <div class="text-xs text-slate-500 mt-1">SLA On-Site Response</div>
      </div>
      <div>
        <div class="text-2xl sm:text-3xl font-extrabold text-white">Cat6 / FO</div>
        <div class="text-xs text-slate-500 mt-1">Standar Kabel High-Grade</div>
      </div>
      <div>
        <div class="text-2xl sm:text-3xl font-extrabold text-white">24/7</div>
        <div class="text-xs text-slate-500 mt-1">Monitoring NOC Active</div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================
     SECTION LAYANAN HIGHLIGHT
=========================================== -->
<section id="layanan" class="w-full bg-[#060910] border-t border-slate-800/80 py-16 reveal">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 pb-4 border-b border-slate-800/80">
      <div>
        <h2 class="text-xs font-bold uppercase tracking-widest text-blue-500">Layanan Unggulan</h2>
        <p class="text-2xl sm:text-3xl font-bold text-white mt-1">Spesialisasi Infrastruktur IT</p>
      </div>
      <a href="{{ route('services.public') }}" class="text-xs font-semibold text-blue-400 hover:text-blue-300 transition mt-2 md:mt-0 flex items-center gap-1">
        Lihat Semua Layanan
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
        </svg>
      </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @forelse($services as $service)
        <div class="bg-[#0F1623] border border-slate-800/80 p-6 rounded-xl flex flex-col justify-between hover:border-blue-500/50 transition duration-300 group">
          <div>
            <div class="flex items-center justify-between mb-4">
              <span class="text-[10px] font-mono text-slate-500 uppercase tracking-wider">{{ $service->code }}</span>
              <span class="text-[10px] bg-blue-500/10 text-blue-400 px-2.5 py-1 rounded border border-blue-500/20 font-medium">
                {{ $service->category }}
              </span>
            </div>
            
            <!-- SVG Icon Vector -->
            <div class="w-10 h-10 rounded-lg bg-blue-600/10 border border-blue-500/20 text-blue-400 flex items-center justify-center mb-4 group-hover:bg-blue-600 group-hover:text-white transition">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>

            <h3 class="text-base font-bold text-white mb-2 group-hover:text-blue-400 transition">{{ $service->title }}</h3>
            <p class="text-slate-400 text-xs sm:text-sm leading-relaxed mb-6 line-clamp-3">
              {{ $service->description }}
            </p>
          </div>
          <div class="pt-4 border-t border-slate-800/60 flex items-center justify-between text-xs text-slate-400 font-mono">
            <span>{{ $service->specs ?? 'Standard Spec' }}</span>
          </div>
        </div>
      @empty
        <div class="col-span-3 text-center py-10 text-slate-500 text-xs border border-dashed border-slate-800 rounded-lg">
          Belum ada data layanan yang ditambahkan.
        </div>
      @endforelse
    </div>

  </div>
</section>

<!-- ==========================================
     SECTION ARTIKEL & INFORMASI TERKINI
=========================================== -->
<section id="artikel" class="w-full bg-[#080C14] border-t border-slate-800/80 py-16 reveal">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 pb-4 border-b border-slate-800/80">
      <div>
        <h2 class="text-xs font-bold uppercase tracking-widest text-blue-500">Informasi & Edukasi</h2>
        <p class="text-2xl sm:text-3xl font-bold text-white mt-1">Artikel Network Terkini</p>
      </div>
      <a href="{{ route('articles.public') }}" class="text-xs font-semibold text-blue-400 hover:text-blue-300 transition mt-2 md:mt-0 flex items-center gap-1">
        Lihat Semua Artikel
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
        </svg>
      </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      @forelse($articles as $article)
        <a href="{{ route('articles.show', $article->slug) }}" class="bg-[#0F1623] border border-slate-800/80 p-6 rounded-xl flex flex-col justify-between hover:border-blue-500/50 transition group">
          <div>
            <div class="flex items-center justify-between mb-3 text-[10px] font-mono text-slate-500">
              <span class="text-blue-400 bg-blue-500/10 px-2 py-0.5 rounded border border-blue-500/20">{{ $article->category }}</span>
              <span>{{ $article->created_at ? $article->created_at->format('d M Y') : '' }}</span>
            </div>
            <h3 class="text-lg font-bold text-white mb-2 group-hover:text-blue-400 transition">
              {{ $article->title }}
            </h3>
            <p class="text-slate-400 text-xs sm:text-sm leading-relaxed mb-6 line-clamp-2">
              {{ $article->excerpt }}
            </p>
          </div>
          <span class="text-xs font-semibold text-blue-400 group-hover:translate-x-1 transition flex items-center gap-1">
            Baca Selengkapnya
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </span>
        </a>
      @empty
        <div class="col-span-2 text-center py-10 text-slate-500 text-xs border border-dashed border-slate-800 rounded-lg">
          Belum ada artikel dipublikasikan.
        </div>
      @endforelse
    </div>

  </div>
</section>

<!-- ==========================================
     SECTION PROFIL SINGKAT
=========================================== -->
<section id="profil" class="w-full bg-[#060910] border-t border-slate-800/80 py-16 reveal">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-[#0F1623] border border-slate-800/80 rounded-2xl p-8 md:p-10 flex flex-col md:flex-row gap-8 items-center justify-between">
      <div class="max-w-2xl">
        <span class="text-xs font-bold uppercase tracking-widest text-blue-500">Profil Perusahaan</span>
        <h2 class="text-2xl sm:text-3xl font-bold text-white mt-1 mb-4">PT Solusi Koneksi Anda</h2>
        <p class="text-slate-400 text-xs sm:text-sm leading-relaxed">
          Penyedia infrastruktur jaringan terpercaya yang berfokus pada kualitas jaringan kabel terstruktur, koneksi Fiber Optic berkecepatan tinggi, dan manajemen ruang server untuk memastikan kelancaran operasional bisnis dan instansi Anda.
        </p>
      </div>
      <div class="shrink-0 w-full md:w-auto">
        <a href="{{ route('contact.public') }}" class="w-full md:w-auto text-center bg-slate-100 hover:bg-white text-slate-900 font-semibold text-xs sm:text-sm px-6 py-3 rounded-lg transition inline-block">
          Hubungi Tim Kami
        </a>
      </div>
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