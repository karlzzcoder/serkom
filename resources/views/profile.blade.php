@extends('layouts.app')

@section('title', 'Profil Perusahaan & Visi Misi - PT Solusi Koneksi Anda')

@section('content')

<!-- ==========================================
     HERO & BANNER SECTION (FULL WIDTH)
=========================================== -->
<section class="w-full bg-[#080C14] pt-12 pb-16 border-b border-slate-800/80">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Hero Header -->
    <div class="mb-10 pb-6 border-b border-slate-800/80 reveal">
      <span class="text-xs font-bold uppercase tracking-widest text-blue-500">Tentang Kami</span>
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white mt-2 tracking-tight">PT Solusi Koneksi Anda</h1>
      <p class="text-slate-400 text-sm sm:text-base mt-3 max-w-2xl leading-relaxed">
        Mitra penyedia infrastruktur jaringan IT, instalasi kabel terstruktur, dan solusi Fiber Optic terintegrasi untuk sektor bisnis, pendidikan, dan industri.
      </p>
    </div>

    <!-- Banner Foto Dokumentasi / Inspeksi Server -->
    <div class="relative rounded-2xl overflow-hidden border border-slate-800/80 h-72 sm:h-80 md:h-[420px] reveal group shadow-2xl">
      <img 
        src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=1200&auto=format&fit=crop" 
        alt="Inspeksi Server Room SKA" 
        class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-700 opacity-80"
      />
      <div class="absolute inset-0 bg-gradient-to-t from-[#080C14] via-[#080C14]/40 to-transparent"></div>
      <div class="absolute bottom-6 left-6 right-6 flex flex-col md:flex-row justify-between md:items-end gap-3">
        <div>
          <span class="text-[10px] sm:text-xs font-mono text-blue-400 bg-blue-500/10 px-3 py-1 rounded border border-blue-500/20 backdrop-blur-sm inline-block mb-2">
            NOC & Data Center Operations
          </span>
          <h2 class="text-base sm:text-xl font-bold text-white">Standar Pemeliharaan & Audit Rutin Ruang Server</h2>
        </div>
        <p class="text-slate-400 text-xs font-mono shrink-0">Jakarta & Jabodetabek Operations Area</p>
      </div>
    </div>

  </div>
</section>

<!-- ==========================================
     RINGKASAN PROFIL & SPESIFIKASI LAYANAN
=========================================== -->
<section class="w-full bg-[#060910] py-16 border-b border-slate-800/80">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch reveal">
      
      <!-- Deskripsi Perusahaan -->
      <div class="lg:col-span-7 space-y-4 text-slate-300 text-sm sm:text-base leading-relaxed flex flex-col justify-center">
        <p>
          Berdiri di Indonesia, <strong class="text-white">PT Solusi Koneksi Anda</strong> berfokus memberikan fondasi jaringan IT yang stabil, aman, dan dapat diandalkan. Kami percaya bahwa konektivitas yang kuat adalah kunci efisiensi operasional setiap organisasi modern.
        </p>
        <p>
          Didukung oleh tim insinyur jaringan bersertifikasi, kami melayani perancangan topologi LAN/WAN, manajemen ruang server (<em>rack mounting</em> & PDU), hingga pemeliharaan jaringan berkala dengan skema <em>Service Level Agreement</em> (SLA) yang transparan.
        </p>
      </div>

      <!-- Card Spesifikasi Layanan -->
      <div class="lg:col-span-5 bg-[#0F1623] border border-slate-800/80 p-6 sm:p-8 rounded-2xl space-y-4 flex flex-col justify-center">
        <h3 class="text-xs font-mono font-bold uppercase tracking-wider text-slate-400 border-b border-slate-800 pb-3">Spesifikasi Layanan Utama</h3>
        <ul class="text-xs sm:text-sm text-slate-300 space-y-3 font-mono">
          <li class="flex items-center gap-3">
            <span class="w-2 h-2 bg-blue-500 rounded-full shrink-0"></span>
            Structured Cabling Cat6 / Cat6A
          </li>
          <li class="flex items-center gap-3">
            <span class="w-2 h-2 bg-blue-500 rounded-full shrink-0"></span>
            Fiber Optic Splicing & OTDR Testing
          </li>
          <li class="flex items-center gap-3">
            <span class="w-2 h-2 bg-blue-500 rounded-full shrink-0"></span>
            Router & Switch Config (Mikrotik/Cisco/Ruijie)
          </li>
          <li class="flex items-center gap-3">
            <span class="w-2 h-2 bg-blue-500 rounded-full shrink-0"></span>
            Server Room Setup & Cable Management
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- ==========================================
     SECTION VISI & MISI
=========================================== -->
<section class="w-full bg-[#080C14] py-16 border-b border-slate-800/80">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
      
      <!-- Visi -->
      <div class="bg-[#0F1623] border border-slate-800/80 p-6 sm:p-8 rounded-2xl flex flex-col justify-between reveal hover:border-blue-500/40 transition">
        <div>
          <div class="w-10 h-10 rounded-xl bg-blue-600/10 border border-blue-500/20 text-blue-400 flex items-center justify-center font-mono font-bold text-sm mb-5">
            01
          </div>
          <h2 class="text-xl sm:text-2xl font-bold text-white mb-3">Visi Perusahaan</h2>
          <p class="text-slate-400 text-xs sm:text-sm leading-relaxed">
            Menjadi sistem integrator dan penyedia solusi infrastruktur jaringan terdepan di Indonesia yang dikenal atas standar kualitas fisik kabel, keandalan sistem, dan responsifitas layanan teknis.
          </p>
        </div>
      </div>

      <!-- Misi -->
      <div class="bg-[#0F1623] border border-slate-800/80 p-6 sm:p-8 rounded-2xl flex flex-col justify-between reveal hover:border-blue-500/40 transition">
        <div>
          <div class="w-10 h-10 rounded-xl bg-blue-600/10 border border-blue-500/20 text-blue-400 flex items-center justify-center font-mono font-bold text-sm mb-5">
            02
          </div>
          <h2 class="text-xl sm:text-2xl font-bold text-white mb-3">Misi Perusahaan</h2>
          <ul class="text-slate-400 text-xs sm:text-sm leading-relaxed space-y-2.5 list-disc list-inside">
            <li>Menyediakan instalasi jaringan berstandar industri dengan pengujian parameter fisik yang presisi.</li>
            <li>Memberikan dukungan teknis cepat, transparan, dan terukur untuk meminimalkan <em>downtime</em> klien.</li>
            <li>Mengembangkan kompetensi tim teknis secara berkelanjutan seiring perkembangan teknologi IT.</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==========================================
     SECTION NILAI-NILAI UTAMA (CORE VALUES)
=========================================== -->
<section class="w-full bg-[#060910] py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 reveal">
    <div class="mb-8">
      <span class="text-xs font-bold uppercase tracking-widest text-blue-500">Prinsip Kerja</span>
      <h2 class="text-2xl sm:text-3xl font-bold text-white mt-1">Nilai-Nilai Utama</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
      <div class="bg-[#0F1623] border border-slate-800/80 p-5 sm:p-6 rounded-xl hover:border-slate-700 transition">
        <h3 class="text-base font-bold text-white mb-2">Presisi</h3>
        <p class="text-slate-400 text-xs sm:text-sm leading-relaxed">Penataan kabel terstruktur dan <em>labeling</em> rapi sesuai dokumentasi.</p>
      </div>
      <div class="bg-[#0F1623] border border-slate-800/80 p-5 sm:p-6 rounded-xl hover:border-slate-700 transition">
        <h3 class="text-base font-bold text-white mb-2">Kecepatan</h3>
        <p class="text-slate-400 text-xs sm:text-sm leading-relaxed">SLA waktu tanggap <em>on-site support</em> yang konsisten dan terukur.</p>
      </div>
      <div class="bg-[#0F1623] border border-slate-800/80 p-5 sm:p-6 rounded-xl hover:border-slate-700 transition">
        <h3 class="text-base font-bold text-white mb-2">Integritas</h3>
        <p class="text-slate-400 text-xs sm:text-sm leading-relaxed">Spesifikasi material asli sesuai kebutuhan penawaran resmi.</p>
      </div>
      <div class="bg-[#0F1623] border border-slate-800/80 p-5 sm:p-6 rounded-xl hover:border-slate-700 transition">
        <h3 class="text-base font-bold text-white mb-2">Keamanan</h3>
        <p class="text-slate-400 text-xs sm:text-sm leading-relaxed">Prioritas keselamatan kerja dan standar keamanan perangkat keras.</p>
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