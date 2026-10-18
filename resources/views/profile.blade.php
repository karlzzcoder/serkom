@extends('layouts.app')

@section('title', 'Profil Perusahaan & Visi Misi - PT Solusi Koneksi Anda')

@section('content')
  <!-- Hero Section Profil -->
  <section class="max-w-6xl mx-auto px-6 pt-12 pb-16">
    <div class="mb-10 pb-6 border-b border-slate-800/80 reveal">
      <span class="text-xs font-bold uppercase tracking-widest text-blue-500">Tentang Kami</span>
      <h1 class="text-3xl md:text-4xl font-extrabold text-white mt-1">PT Solusi Koneksi Anda</h1>
      <p class="text-slate-400 text-sm md:text-base mt-3 max-w-2xl leading-relaxed">
        Mitra penyedia infrastruktur jaringan IT, instalasi kabel terstruktur, dan solusi Fiber Optic terintegrasi untuk sektor bisnis, pendidikan, dan industri.
      </p>
    </div>

    <!-- Banner Foto Dokumentasi / Inspeksi Server -->
    <div class="relative rounded-2xl overflow-hidden border border-slate-800/80 mb-16 h-72 md:h-96 reveal group">
      <img 
        src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=1200&auto=format&fit=crop" 
        alt="Inspeksi Server Room SKA" 
        class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-700 opacity-80"
      />
      <div class="absolute inset-0 bg-gradient-to-t from-[#080C14] via-[#080C14]/40 to-transparent"></div>
      <div class="absolute bottom-6 left-6 right-6 flex flex-col md:flex-row justify-between md:items-end gap-2">
        <div>
          <span class="text-[10px] font-mono text-blue-400 bg-blue-500/10 px-2.5 py-1 rounded border border-blue-500/20 backdrop-blur-sm">
            NOC & Data Center Operations
          </span>
          <h2 class="text-lg font-bold text-white mt-2">Standar Pemeliharaan & Audit Rutin Ruang Server</h2>
        </div>
        <p class="text-slate-400 text-xs font-mono">Bogor & Jabodetabek Operations Area</p>
      </div>
    </div>

    <!-- Ringkasan Profil & Spesifikasi Layanan -->
    <div class="grid md:grid-cols-12 gap-8 items-stretch mb-16 reveal">
      <div class="md:col-span-7 space-y-4 text-slate-300 text-sm leading-relaxed flex flex-col justify-center">
        <p>
          Berdiri di Bogor, Jawa Barat, <strong class="text-white">PT Solusi Koneksi Anda</strong> berfokus memberikan fondasi jaringan IT yang stabil, aman, dan dapat diandalkan. Kami percaya bahwa konektivitas yang kuat adalah kunci efisiensi operasional setiap organisasi modern.
        </p>
        <p>
          Didukung oleh tim insinyur jaringan bersertifikasi, kami melayani perancangan topologi LAN/WAN, manajemen ruang server (*rack mounting* & PDU), hingga pemeliharaan jaringan berkala dengan skema *Service Level Agreement* (SLA) yang transparan.
        </p>
      </div>

      <div class="md:col-span-5 bg-[#0F1623] border border-slate-800/80 p-6 rounded-xl space-y-4 flex flex-col justify-center">
        <h3 class="text-xs font-mono font-bold uppercase tracking-wider text-slate-400 border-b border-slate-800 pb-2">Spesifikasi Layanan Utama</h3>
        <ul class="text-xs text-slate-300 space-y-2.5 font-mono">
          <li class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
            Structured Cabling Cat6 / Cat6A
          </li>
          <li class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
            Fiber Optic Splicing & OTDR Testing
          </li>
          <li class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
            Router & Switch Config (Mikrotik/Cisco/Ruijie)
          </li>
          <li class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
            Server Room Setup & Cable Management
          </li>
        </ul>
      </div>
    </div>

    <!-- Section Visi & Misi -->
    <div class="grid md:grid-cols-2 gap-6 mb-16">
      <!-- Visi -->
      <div class="bg-[#0F1623] border border-slate-800/80 p-8 rounded-xl flex flex-col justify-between reveal">
        <div>
          <div class="w-10 h-10 rounded-lg bg-blue-600/10 border border-blue-500/20 text-blue-400 flex items-center justify-center font-mono font-bold text-sm mb-5">
            01
          </div>
          <h2 class="text-xl font-bold text-white mb-3">Visi Perusahaan</h2>
          <p class="text-slate-400 text-xs md:text-sm leading-relaxed">
            Menjadi sistem integrator dan penyedia solusi infrastruktur jaringan terdepan di Indonesia yang dikenal atas standar kualitas fisik kabel, keandalan sistem, dan responsifitas layanan teknis.
          </p>
        </div>
      </div>

      <!-- Misi -->
      <div class="bg-[#0F1623] border border-slate-800/80 p-8 rounded-xl flex flex-col justify-between reveal">
        <div>
          <div class="w-10 h-10 rounded-lg bg-blue-600/10 border border-blue-500/20 text-blue-400 flex items-center justify-center font-mono font-bold text-sm mb-5">
            02
          </div>
          <h2 class="text-xl font-bold text-white mb-3">Misi Perusahaan</h2>
          <ul class="text-slate-400 text-xs md:text-sm leading-relaxed space-y-2.5 list-disc list-inside">
            <li>Menyediakan instalasi jaringan berstandar industri dengan pengujian parameter fisik yang presisi.</li>
            <li>Memberikan dukungan teknis cepat, transparan, dan terukur untuk meminimalkan *downtime* klien.</li>
            <li>Mengembangkan kompetensi tim teknis secara berkelanjutan seiring perkembangan teknologi IT.</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Section Nilai-Nilai Utama (Core Values) -->
    <div class="reveal">
      <div class="mb-8">
        <span class="text-xs font-bold uppercase tracking-widest text-blue-500">Prinsip Kerja</span>
        <h2 class="text-2xl font-bold text-white mt-1">Nilai-Nilai Utama</h2>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-[#0F1623] border border-slate-800/80 p-5 rounded-lg">
          <h3 class="text-sm font-bold text-white mb-1">Presisi</h3>
          <p class="text-slate-400 text-xs leading-relaxed">Penataan kabel terstruktur dan *labeling* rapi sesuai dokumentasi.</p>
        </div>
        <div class="bg-[#0F1623] border border-slate-800/80 p-5 rounded-lg">
          <h3 class="text-sm font-bold text-white mb-1">Kecepatan</h3>
          <p class="text-slate-400 text-xs leading-relaxed">SLA waktu tanggap *on-site support* yang konsisten dan terukur.</p>
        </div>
        <div class="bg-[#0F1623] border border-slate-800/80 p-5 rounded-lg">
          <h3 class="text-sm font-bold text-white mb-1">Integritas</h3>
          <p class="text-slate-400 text-xs leading-relaxed">Spesifikasi material asli sesuai kebutuhan penawaran resmi.</p>
        </div>
        <div class="bg-[#0F1623] border border-slate-800/80 p-5 rounded-lg">
          <h3 class="text-sm font-bold text-white mb-1">Keamanan</h3>
          <p class="text-slate-400 text-xs leading-relaxed">Prioritas keselamatan kerja dan standar keamanan perangkat keras.</p>
        </div>
      </div>
    </div>
  </section>
@endsection