@extends('layouts.app')

@section('title', 'PT Solusi Koneksi Anda - Infrastructure & IT Network')

@section('content')
  <!-- Hero Section -->
  <section class="relative max-w-6xl mx-auto px-6 pt-12 pb-20">
    <div class="absolute -top-16 right-0 w-full md:w-7/12 h-[calc(100%+4rem)] pointer-events-none overflow-hidden z-0">
      <div class="absolute inset-0 bg-gradient-to-r from-[#080C14] via-[#080C14]/30 to-transparent z-10"></div>
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[#080C14] z-10"></div>
      <img 
        src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=1000&auto=format&fit=crop" 
        alt="Infrastruktur Server" 
        class="w-full h-full object-cover object-right opacity-90"
      />
    </div>

    <!-- Entrance Animation pada Hero -->
    <div class="relative z-10 grid md:grid-cols-12 gap-8 items-center pt-6 reveal">
      <div class="md:col-span-7">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-blue-500/30 bg-blue-500/10 text-blue-400 text-xs font-medium mb-6 backdrop-blur-sm">
          <span class="w-1.5 h-1.5 rounded-full bg-blue-400 animate-pulse"></span>
          Sertifikasi Vendor Jaringan & Fiber Optic Jabodetabek
        </div>
        
        <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight leading-[1.15] mb-6">
          Infrastruktur Jaringan Kantor, Server, & Fiber Optic.
        </h1>
        
        <p class="text-slate-400 text-base max-w-xl mb-8 leading-relaxed">
          Perancangan topologi LAN, penarikan kabel FO, instalasi Mikrotik/Cisco, dan integrasi ruang server untuk kantor, sekolah, dan fasilitas industri.
        </p>

        <div class="flex items-center gap-4">
          <a href="{{ route('services.public') }}" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs px-5 py-3 rounded-lg transition shadow-lg shadow-blue-600/20">
            Jelajahi Layanan
          </a>
          <a href="#profil" class="border border-slate-700 hover:border-slate-500 text-slate-300 font-medium text-xs px-5 py-3 rounded-lg transition">
            Tentang Perusahaan
          </a>
        </div>
      </div>
    </div>

    <!-- Metrics Bar (Scroll Animation) -->
    <div class="relative z-10 grid grid-cols-2 md:grid-cols-4 gap-4 py-6 border-y border-slate-800/80 mt-16 backdrop-blur-xs reveal">
      <div>
        <div class="text-2xl font-bold text-white">99.9%</div>
        <div class="text-xs text-slate-500 mt-1">Target Uptime Network</div>
      </div>
      <div>
        <div class="text-2xl font-bold text-white">&lt; 15 Menit</div>
        <div class="text-xs text-slate-500 mt-1">SLA On-Site Response</div>
      </div>
      <div>
        <div class="text-2xl font-bold text-white">Cat6 / FO</div>
        <div class="text-xs text-slate-500 mt-1">Standar Kabel High-Grade</div>
      </div>
      <div>
        <div class="text-2xl font-bold text-white">24/7</div>
        <div class="text-xs text-slate-500 mt-1">Monitoring NOC Active</div>
      </div>
    </div>
  </section>

  <!-- Section Layanan Highlight (Scroll Animation) -->
  <section id="layanan" class="max-w-6xl mx-auto px-6 py-12 reveal">
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 pb-4 border-b border-slate-800/80">
      <div>
        <h2 class="text-xs font-bold uppercase tracking-widest text-blue-500">Layanan Unggulan</h2>
        <p class="text-2xl font-bold text-white mt-1">Spesialisasi Infrastruktur IT</p>
      </div>
      <a href="{{ route('services.public') }}" class="text-xs font-semibold text-blue-400 hover:text-blue-300 transition mt-2 md:mt-0 flex items-center gap-1">
        Lihat Semua Layanan &rarr;
      </a>
    </div>

    <div class="grid md:grid-cols-3 gap-5">
      @forelse($services as $service)
        <div class="bg-[#0F1623] border border-slate-800/80 p-6 rounded-lg flex flex-col justify-between hover:border-slate-700 transition">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-[10px] font-mono text-slate-500 uppercase tracking-wider">{{ $service->code }}</span>
              <span class="text-[10px] bg-blue-500/10 text-blue-400 px-2 py-0.5 rounded border border-blue-500/20 font-medium">
                {{ $service->category }}
              </span>
            </div>
            <h3 class="text-base font-bold text-white mb-2">{{ $service->title }}</h3>
            <p class="text-slate-400 text-xs leading-relaxed mb-6 line-clamp-3">
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
  </section>

  <!-- Section Artikel & Informasi Terkini (Scroll Animation) -->
  <section id="artikel" class="max-w-6xl mx-auto px-6 py-12 reveal">
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 pb-4 border-b border-slate-800/80">
      <div>
        <h2 class="text-xs font-bold uppercase tracking-widest text-blue-500">Informasi & Edukasi</h2>
        <p class="text-2xl font-bold text-white mt-1">Artikel Network Terkini</p>
      </div>
      <a href="{{ route('articles.public') }}" class="text-xs font-semibold text-blue-400 hover:text-blue-300 transition mt-2 md:mt-0 flex items-center gap-1">
        Lihat Semua Artikel &rarr;
      </a>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
      @forelse($articles as $article)
        <a href="{{ route('articles.show', $article->slug) }}" class="bg-[#0F1623] border border-slate-800/80 p-6 rounded-lg flex flex-col justify-between hover:border-slate-700 transition group">
          <div>
            <div class="flex items-center justify-between mb-3 text-[10px] font-mono text-slate-500">
              <span class="text-blue-400 bg-blue-500/10 px-2 py-0.5 rounded border border-blue-500/20">{{ $article->category }}</span>
              <span>{{ $article->created_at ? $article->created_at->format('d M Y') : '' }}</span>
            </div>
            <h3 class="text-lg font-bold text-white mb-2 group-hover:text-blue-400 transition">
              {{ $article->title }}
            </h3>
            <p class="text-slate-400 text-xs leading-relaxed mb-6 line-clamp-2">
              {{ $article->excerpt }}
            </p>
          </div>
          <span class="text-xs font-semibold text-blue-400 group-hover:translate-x-1 transition flex items-center gap-1">
            Baca Selengkapnya &rarr;
          </span>
        </a>
      @empty
        <div class="col-span-2 text-center py-10 text-slate-500 text-xs border border-dashed border-slate-800 rounded-lg">
          Belum ada artikel dipublikasikan.
        </div>
      @endforelse
    </div>
  </section>

  <!-- Section Profil Singkat (Scroll Animation) -->
  <section id="profil" class="max-w-6xl mx-auto px-6 py-12 reveal">
    <div class="bg-[#0F1623] border border-slate-800/80 rounded-2xl p-8 md:p-10 flex flex-col md:flex-row gap-8 items-center justify-between">
      <div class="max-w-2xl">
        <span class="text-xs font-bold uppercase tracking-widest text-blue-500">Profil Perusahaan</span>
        <h2 class="text-2xl font-bold text-white mt-1 mb-4">PT Solusi Koneksi Anda</h2>
        <p class="text-slate-400 text-xs md:text-sm leading-relaxed">
          Penyedia infrastruktur jaringan terpercaya yang berfokus pada kualitas jaringan kabel terstruktur, koneksi Fiber Optic berkecepatan tinggi, dan manajemen ruang server untuk memastikan kelancaran operasional bisnis dan instansi Anda.
        </p>
      </div>
      <div class="shrink-0">
        <a href="#kontak" class="bg-slate-100 hover:bg-white text-slate-900 font-semibold text-xs px-6 py-3 rounded-lg transition inline-block">
          Hubungi Tim Kami
        </a>
      </div>
    </div>
  </section>
@endsection