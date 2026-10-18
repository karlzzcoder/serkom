<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PT Solusi Koneksi Anda - Solusi Infrastruktur & Keamanan Jaringan')</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #080C14;
            color: #F8FAFC;
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col bg-[#080C14] text-slate-100">

    <!-- NAVBAR UTAMA -->
    <nav class="bg-[#080C14]/90 backdrop-blur-md border-b border-slate-800/80 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                
                <!-- KIRI: Logo + Nama Perusahaan -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 shrink-0 z-10">
                    <div class="w-9 h-9 rounded-xl bg-blue-600 flex items-center justify-center font-bold text-white text-sm shadow-lg shadow-blue-600/30">
                        SK
                    </div>
                    <span class="font-bold text-white text-sm tracking-wide">Solusi Koneksi Anda</span>
                </a>

                <!-- TENGAH: Navigasi Utama (Presisi di Tengah Layar) -->
                <div class="hidden md:flex items-center gap-6 lg:gap-8 text-xs font-medium text-slate-300 absolute left-1/2 -translate-x-1/2">
                    <a href="{{ route('home') }}" 
                       class="hover:text-blue-400 transition {{ request()->routeIs('home') ? 'text-blue-400 font-semibold' : '' }}">
                        Beranda
                    </a>
                    <a href="{{ route('profile.public') }}" 
                       class="hover:text-blue-400 transition {{ request()->routeIs('profile*') || request()->routeIs('profil') ? 'text-blue-400 font-semibold' : '' }}">
                        Profil
                    </a>
                    <a href="{{ route('services.public') }}" 
                       class="hover:text-blue-400 transition {{ request()->routeIs('services*') || request()->routeIs('layanan*') ? 'text-blue-400 font-semibold' : '' }}">
                        Layanan
                    </a>
                    <a href="{{ route('articles.public') }}" 
                       class="hover:text-blue-400 transition {{ request()->routeIs('articles*') ? 'text-blue-400 font-semibold' : '' }}">
                        Artikel
                    </a>
                    <a href="{{ route('galleries.public') }}" 
                       class="hover:text-blue-400 transition {{ request()->routeIs('galleries*') ? 'text-blue-400 font-semibold' : '' }}">
                        Dokumentasi
                    </a>
                    <a href="{{ route('contact.public') }}" 
                       class="hover:text-blue-400 transition {{ request()->routeIs('contact*') || request()->routeIs('kontak') ? 'text-blue-400 font-semibold' : '' }}">
                        Kontak
                    </a>
                </div>

            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA HALAMAN -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- FOOTER PERUSAHAAN -->
    <footer class="bg-[#05080E] border-t border-slate-800/80 pt-12 pb-8 text-xs text-slate-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            
            <!-- Kolom 1: Profil Singkat -->
            <div>
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="w-7 h-7 rounded-lg bg-blue-600 flex items-center justify-center font-bold text-white text-xs">
                        SK
                    </div>
                    <span class="font-bold text-white text-sm">PT Solusi Koneksi Anda</span>
                </div>
                <p class="leading-relaxed text-slate-400">
                    Penyedia infrastruktur jaringan terpercaya yang berfokus pada instalasi kabel terstruktur, koneksi Fiber Optic, dan keamanan server korporat.
                </p>
            </div>

            <!-- Kolom 2: Navigasi Utama -->
            <div>
                <h4 class="text-white font-semibold mb-4 uppercase tracking-wider text-[11px]">Navigasi Utama</h4>
                <ul class="space-y-2.5">
                    <li><a href="{{ route('home') }}" class="hover:text-white transition">Beranda</a></li>
                    <li><a href="{{ route('profile.public') }}" class="hover:text-white transition">Profil Perusahaan</a></li>
                    <li><a href="{{ route('services.public') }}" class="hover:text-white transition">Layanan & Produk</a></li>
                    <li><a href="{{ route('articles.public') }}" class="hover:text-white transition">Artikel & Berita</a></li>
                    <li><a href="{{ route('galleries.public') }}" class="hover:text-white transition">Dokumentasi</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Alamat Operasional -->
            <div>
                <h4 class="text-white font-semibold mb-4 uppercase tracking-wider text-[11px]">Kantor Operasional</h4>
                <p class="leading-relaxed mb-2 text-slate-300">
                    Gedung Cyber 1, Lantai 5<br>
                    Jl. Kuningan Barat No. 8, Mampang Prapatan<br>
                    Jakarta Selatan, DKI Jakarta 12710
                </p>
                <p class="text-slate-400">Telepon: (021) 5290-1234</p>
                <p class="text-slate-400">Email: info@solusikoneksianda.co.id</p>
            </div>

        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 border-t border-slate-800/60 text-center text-slate-500 text-[11px]">
            &copy; {{ date('Y') }} PT Solusi Koneksi Anda. Hak Cipta Dilindungi Undang-Undang.
        </div>
    </footer>

</body>
</html>