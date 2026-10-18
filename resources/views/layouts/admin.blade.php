<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin Panel - PT Solusi Koneksi Anda')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; }
  </style>
</head>
<body class="bg-[#080C14] text-slate-200 antialiased selection:bg-blue-600 selection:text-white flex min-h-screen">

  <!-- Sidebar Navigasi Admin -->
  <aside class="w-64 bg-[#0F1623] border-r border-slate-800/80 flex flex-col justify-between shrink-0 fixed inset-y-0 left-0 z-40">
    <div>
      <!-- Header Sidebar / Brand -->
      <div class="h-16 flex items-center px-6 border-b border-slate-800/80">
        <a href="{{ route('admin.services.index') }}" class="flex items-center gap-2.5">
          <div class="w-7 h-7 bg-blue-600 rounded flex items-center justify-center font-bold text-white text-xs">SK</div>
          <span class="font-bold tracking-tight text-white text-sm">Admin Panel</span>
        </a>
      </div>

<nav class="p-4 space-y-1.5 text-xs font-medium">
  
  <!-- Dashboard Overview -->
  <a href="{{ route('admin.dashboard') }}" 
     class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg transition {{ request()->routeIs('admin.dashboard') ? 'bg-blue-600/10 text-blue-400 font-semibold border border-blue-500/20' : 'text-slate-400 hover:text-white hover:bg-slate-800/50' }}">
    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
    </svg>
    <span>Dashboard</span>
  </a>

  <!-- Kelola Layanan -->
  <a href="{{ route('admin.services.index') }}" 
     class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg transition {{ request()->routeIs('admin.services.*') ? 'bg-blue-600/10 text-blue-400 font-semibold border border-blue-500/20' : 'text-slate-400 hover:text-white hover:bg-slate-800/50' }}">
    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
    </svg>
    <span>Kelola Layanan</span>
  </a>

  <!-- Kelola Artikel -->
  <a href="{{ route('admin.articles.index') }}" 
     class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg transition {{ request()->routeIs('admin.articles.*') ? 'bg-blue-600/10 text-blue-400 font-semibold border border-blue-500/20' : 'text-slate-400 hover:text-white hover:bg-slate-800/50' }}">
    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
    </svg>
    <span>Kelola Artikel</span>
  </a>

  <!-- Galeri Dokumentasi -->
  <a href="{{ route('admin.galleries.index') }}" 
     class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg transition {{ request()->routeIs('admin.galleries.*') ? 'bg-blue-600/10 text-blue-400 font-semibold border border-blue-500/20' : 'text-slate-400 hover:text-white hover:bg-slate-800/50' }}">
    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
    </svg>
    <span>Galeri Dokumentasi</span>
  </a>

  <!-- Pesan Masuk -->
  <a href="{{ route('admin.messages.index') }}" 
     class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg transition {{ request()->routeIs('admin.messages.*') ? 'bg-blue-600/10 text-blue-400 font-semibold border border-blue-500/20' : 'text-slate-400 hover:text-white hover:bg-slate-800/50' }}">
    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
    </svg>
    <span>Pesan Masuk</span>
  </a>

</nav>
    </div>

    <!-- Sisi Bawah Sidebar: Akses Kembali ke Website Utama -->
    <div class="p-4 border-t border-slate-800/80">
      <a href="/" target="_blank" class="flex items-center justify-between px-3.5 py-2.5 rounded-lg text-slate-400 hover:text-white bg-slate-800/40 hover:bg-slate-800 transition text-xs font-medium">
        <span>Lihat Website</span>
        <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
        </svg>
      </a>
    </div>
  </aside>

  <!-- Konten Utama Admin -->
  <div class="flex-grow pl-64 flex flex-col">
    <!-- Top Header Bar -->
    <header class="h-16 border-b border-slate-800/80 bg-[#080C14]/90 sticky top-0 z-30 backdrop-blur-sm px-8 flex items-center justify-between">
  <h2 class="text-sm font-bold text-white">@yield('page_title', 'Dashboard Admin')</h2>
  <div class="flex items-center gap-4 text-xs">
    <div class="flex items-center gap-2 text-slate-400 font-mono">
      <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
      <span>{{ Auth::user()->name ?? 'Admin' }}</span>
    </div>
    
    <!-- Tombol Logout -->
    <form action="{{ route('admin.logout') }}" method="POST">
      @csrf
      <button type="submit" class="px-3 py-1.5 bg-rose-500/10 hover:bg-rose-500/20 text-rose-400 border border-rose-500/30 rounded text-[11px] font-medium transition">
        Logout
      </button>
    </form>
  </div>
</header>

    <!-- Main Body Area -->
    <main class="p-8 flex-grow">
      @if(session('success'))
        <div class="mb-6 p-4 rounded-lg bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs flex items-center justify-between">
          <div class="flex items-center gap-2">
            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            <span>{{ session('success') }}</span>
          </div>
        </div>
      @endif

      @yield('content')
    </main>
  </div>

</body>
</html>