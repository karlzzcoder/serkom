@extends('layouts.admin')

@section('title', 'Dashboard Overview - Admin Panel')
@section('page_title', 'Overview Dashboard')

@section('content')
  <!-- Banner Ringkasan / Welcome -->
  <div class="bg-[#0F1623] border border-slate-800/80 p-6 rounded-2xl mb-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
    <div>
      <h3 class="text-xl font-bold text-white">Selamat Datang di Admin Control Panel</h3>
      <p class="text-xs text-slate-400 mt-1">Kelola konten layanan, publikasi artikel, dokumentasi galeri, dan pantau pesan masuk dari klien.</p>
    </div>
    <a href="/" target="_blank" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs px-4 py-2.5 rounded-lg transition shrink-0 flex items-center gap-2">
      <span>Kunjungi Website Utama</span>
      <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
      </svg>
    </a>
  </div>

  <!-- Grid Statistik Ringkasan -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5 mb-8">
    
    <!-- Total Layanan -->
    <a href="{{ route('admin.services.index') }}" class="bg-[#0F1623] border border-slate-800/80 p-5 rounded-xl hover:border-slate-700 transition group">
      <div class="flex items-center justify-between mb-3">
        <span class="text-xs font-mono font-medium text-slate-400 uppercase tracking-wider">Layanan</span>
        <div class="w-8 h-8 rounded-lg bg-blue-600/10 border border-blue-500/20 text-blue-400 flex items-center justify-center">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
          </svg>
        </div>
      </div>
      <div class="text-3xl font-extrabold text-white group-hover:text-blue-400 transition">{{ $stats['total_services'] }}</div>
      <p class="text-[11px] text-slate-500 mt-1">Paket infrastruktur IT aktif</p>
    </a>

    <!-- Total Artikel -->
    <a href="{{ route('admin.articles.index') }}" class="bg-[#0F1623] border border-slate-800/80 p-5 rounded-xl hover:border-slate-700 transition group">
      <div class="flex items-center justify-between mb-3">
        <span class="text-xs font-mono font-medium text-slate-400 uppercase tracking-wider">Artikel</span>
        <div class="w-8 h-8 rounded-lg bg-emerald-600/10 border border-emerald-500/20 text-emerald-400 flex items-center justify-center">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
          </svg>
        </div>
      </div>
      <div class="text-3xl font-extrabold text-white group-hover:text-emerald-400 transition">{{ $stats['total_articles'] }}</div>
      <p class="text-[11px] text-slate-500 mt-1">Berita & artikel terpublikasi</p>
    </a>

    <!-- Galeri Foto -->
    <a href="{{ route('admin.galleries.index') }}" class="bg-[#0F1623] border border-slate-800/80 p-5 rounded-xl hover:border-slate-700 transition group">
      <div class="flex items-center justify-between mb-3">
        <span class="text-xs font-mono font-medium text-slate-400 uppercase tracking-wider">Dokumentasi</span>
        <div class="w-8 h-8 rounded-lg bg-amber-600/10 border border-amber-500/20 text-amber-400 flex items-center justify-center">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
          </svg>
        </div>
      </div>
      <div class="text-3xl font-extrabold text-white group-hover:text-amber-400 transition">{{ $stats['total_galleries'] }}</div>
      <p class="text-[11px] text-slate-500 mt-1">Foto kegiatan proyek</p>
    </a>

    <!-- Pesan Masuk -->
    <a href="{{ route('admin.messages.index') }}" class="bg-[#0F1623] border border-slate-800/80 p-5 rounded-xl hover:border-slate-700 transition group">
      <div class="flex items-center justify-between mb-3">
        <span class="text-xs font-mono font-medium text-slate-400 uppercase tracking-wider">Pesan Masuk</span>
        <div class="w-8 h-8 rounded-lg bg-rose-600/10 border border-rose-500/20 text-rose-400 flex items-center justify-center">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
          </svg>
        </div>
      </div>
      <div class="text-3xl font-extrabold text-white group-hover:text-rose-400 transition">{{ $stats['total_messages'] }}</div>
      <p class="text-[11px] text-slate-500 mt-1">Pertanyaan & penawaran</p>
    </a>

  </div>

  <!-- Section Akses Cepat & Pesan Masuk Terbaru -->
  <div class="grid md:grid-cols-12 gap-8 items-start">
    
    <!-- Pesan Masuk Terbaru (8 cols) -->
    <div class="md:col-span-8 bg-[#0F1623] border border-slate-800/80 rounded-2xl overflow-hidden">
      <div class="p-5 border-b border-slate-800/80 flex items-center justify-between">
        <h4 class="text-sm font-bold text-white">Pesan Masuk Terbaru</h4>
        <a href="{{ route('admin.messages.index') }}" class="text-xs font-semibold text-blue-400 hover:text-blue-300 transition">Lihat Semua &rarr;</a>
      </div>

      <div class="divide-y divide-slate-800/60 text-xs">
        @forelse($recentMessages as $msg)
          <div class="p-5 hover:bg-slate-800/30 transition flex items-start justify-between gap-4">
            <div class="space-y-1">
              <div class="flex items-center gap-2">
                <span class="font-bold text-white">{{ $msg->name }}</span>
                <span class="text-[10px] font-mono bg-blue-500/10 text-blue-400 px-2 py-0.5 rounded border border-blue-500/20">{{ $msg->subject }}</span>
              </div>
              <p class="text-slate-400 leading-relaxed line-clamp-1">{{ $msg->message }}</p>
              <p class="text-[10px] font-mono text-slate-500">{{ $msg->email }} {{ $msg->phone ? '• ' . $msg->phone : '' }}</p>
            </div>
            <span class="text-[10px] font-mono text-slate-500 shrink-0">{{ $msg->created_at->diffForHumans() }}</span>
          </div>
        @empty
          <div class="p-8 text-center text-slate-500 text-xs">
            Belum ada pesan masuk dari pengunjung web.
          </div>
        @endforelse
      </div>
    </div>

    <!-- Quick Action / Akses Cepat (4 cols) -->
    <div class="md:col-span-4 bg-[#0F1623] border border-slate-800/80 p-6 rounded-2xl space-y-4">
      <h4 class="text-sm font-bold text-white border-b border-slate-800/80 pb-3">Akses Cepat</h4>
      
      <div class="space-y-2.5">
        <a href="{{ route('admin.services.create') }}" class="w-full bg-slate-800/60 hover:bg-slate-800 text-slate-200 border border-slate-700/60 p-3 rounded-lg flex items-center justify-between text-xs font-medium transition">
          <span>+ Tambah Layanan Baru</span>
          <span class="text-slate-500">&rarr;</span>
        </a>

        <a href="{{ route('admin.articles.create') }}" class="w-full bg-slate-800/60 hover:bg-slate-800 text-slate-200 border border-slate-700/60 p-3 rounded-lg flex items-center justify-between text-xs font-medium transition">
          <span>+ Tulis Artikel Baru</span>
          <span class="text-slate-500">&rarr;</span>
        </a>

        <a href="{{ route('admin.galleries.create') }}" class="w-full bg-slate-800/60 hover:bg-slate-800 text-slate-200 border border-slate-700/60 p-3 rounded-lg flex items-center justify-between text-xs font-medium transition">
          <span>+ Upload Foto Dokumentasi</span>
          <span class="text-slate-500">&rarr;</span>
        </a>
      </div>
    </div>

  </div>
@endsection