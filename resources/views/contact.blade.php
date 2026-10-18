@extends('layouts.app')

@section('title', 'Hubungi Kami - PT Solusi Koneksi Anda')

@section('content')

<!-- ==========================================
     HERO & FORM KONTAK SECTION (FULL WIDTH)
=========================================== -->
<section class="w-full bg-[#080C14] py-12 sm:py-16 min-h-[calc(100vh-4rem)]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Header Section -->
    <div class="mb-12 pb-6 border-b border-slate-800/80 reveal">
      <span class="text-xs font-bold uppercase tracking-widest text-blue-500">Kontak Perusahaan</span>
      <h1 class="text-3xl sm:text-4xl font-extrabold text-white mt-2 tracking-tight">Hubungi Tim Layanan Kami</h1>
      <p class="text-slate-400 text-sm sm:text-base mt-2 max-w-2xl leading-relaxed">
        Konsultasikan kebutuhan infrastruktur jaringan, penarikan fiber optic, dan integrasi server kantor Anda langsung dengan spesialis kami.
      </p>
    </div>

    <!-- Alert Notifikasi Kirim Pesan -->
    @if(session('success'))
      <div class="mb-8 p-4 rounded-xl bg-blue-600/10 border border-blue-500/30 text-blue-400 text-xs sm:text-sm flex items-center gap-3 reveal">
        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
        <span>{{ session('success') }}</span>
      </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
      
      <!-- SISI KIRI: Kantor Operasional + Peta Google Maps (5 Kolom) -->
      <div class="lg:col-span-5 space-y-6 reveal">
        
        <!-- Card Kantor Operasional -->
        <div class="bg-[#0F1623] border border-slate-800/80 p-6 sm:p-8 rounded-2xl space-y-6">
          <h2 class="text-lg font-bold text-white border-b border-slate-800 pb-3">Kantor Operasional</h2>
          
          <!-- Alamat Utama -->
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 rounded-xl bg-blue-600/10 border border-blue-500/20 text-blue-400 flex items-center justify-center shrink-0 mt-1">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
            </div>
            <div>
              <h3 class="text-xs font-mono uppercase text-slate-400 font-semibold mb-1">Alamat Gedung</h3>
              <p class="text-xs sm:text-sm text-slate-200 leading-relaxed">
                <strong class="text-white">PT Solusi Koneksi Anda</strong><br>
                Gedung Cyber 1, Lantai 5<br>
                Jl. Kuningan Barat No. 8, Mampang Prapatan<br>
                Jakarta Selatan, DKI Jakarta 12710
              </p>
            </div>
          </div>

          <!-- Telepon -->
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 rounded-xl bg-blue-600/10 border border-blue-500/20 text-blue-400 flex items-center justify-center shrink-0 mt-1">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
            </div>
            <div>
              <h3 class="text-xs font-mono uppercase text-slate-400 font-semibold mb-1">Telepon & Hotline</h3>
              <p class="text-xs sm:text-sm text-slate-200 font-mono">(021) 5290-1234</p>
              <p class="text-[11px] text-slate-400 mt-0.5">Senin - Jumat (08.00 - 17.00 WIB)</p>
            </div>
          </div>

          <!-- Email -->
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 rounded-xl bg-blue-600/10 border border-blue-500/20 text-blue-400 flex items-center justify-center shrink-0 mt-1">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </div>
            <div>
              <h3 class="text-xs font-mono uppercase text-slate-400 font-semibold mb-1">Email Resmi</h3>
              <p class="text-xs sm:text-sm text-slate-200 font-mono">info@solusikoneksianda.co.id</p>
            </div>
          </div>
        </div>

        <!-- Peta Lokasi Google Maps di Bawah Kantor Operasional -->
        <div class="bg-[#0F1623] border border-slate-800/80 p-4 sm:p-5 rounded-2xl">
          <h3 class="text-xs font-bold text-white mb-3 flex items-center gap-2">
            <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
            </svg>
            Titik Lokasi Gedung Cyber 1
          </h3>
          <div class="w-full h-56 rounded-xl overflow-hidden border border-slate-800">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.253683833777!2d106.82084667586821!3d-6.23024886101292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e1b7b7f58d%3A0x6b637568f54b4231!2sGedung%20Cyber%201!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
              class="w-full h-full border-0 grayscale opacity-85 hover:grayscale-0 hover:opacity-100 transition duration-500" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>

      </div>

      <!-- SISI KANAN: Form Kontak Pesan (7 Kolom) -->
      <div class="lg:col-span-7 bg-[#0F1623] border border-slate-800/80 p-6 sm:p-8 rounded-2xl reveal">
        <h2 class="text-lg font-bold text-white mb-2">Kirim Pesan atau Penawaran</h2>
        <p class="text-xs sm:text-sm text-slate-400 mb-6">Isi formulir di bawah ini, tim teknis kami akan menghubungi Anda dalam kurun 1x24 jam.</p>

        <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
          @csrf

          <div>
            <label for="name" class="block text-xs font-mono text-slate-300 mb-2">Nama Lengkap *</label>
            <input type="text" id="name" name="name" required value="{{ old('name') }}"
                   placeholder="Masukkan nama lengkap Anda"
                   class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">
            @error('name')
              <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div>
              <label for="email" class="block text-xs font-mono text-slate-300 mb-2">Alamat Email *</label>
              <input type="email" id="email" name="email" required value="{{ old('email') }}"
                     placeholder="nama@perusahaan.com"
                     class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">
              @error('email')
                <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="phone" class="block text-xs font-mono text-slate-300 mb-2">Nomor Telepon / WA</label>
              <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                     placeholder="081234567890"
                     class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">
            </div>
          </div>

          <div>
            <label for="subject" class="block text-xs font-mono text-slate-300 mb-2">Subjek Pesan *</label>
            <input type="text" id="subject" name="subject" required value="{{ old('subject') }}"
                   placeholder="misal: Permintaan Penawaran Instalasi Fiber Optic"
                   class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">
            @error('subject')
              <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label for="message" class="block text-xs font-mono text-slate-300 mb-2">Detail Pesan / Kebutuhan *</label>
            <textarea id="message" name="message" rows="4" required
                      placeholder="Jelaskan kebutuhan jaringan atau layanan yang Anda perlukan secara singkat..."
                      class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">{{ old('message') }}</textarea>
            @error('message')
              <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
            @enderror
          </div>

          <button type="submit" 
                  class="w-full sm:w-auto px-8 py-3.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs sm:text-sm shadow-lg shadow-blue-600/20 transition duration-200">
            Kirim Pesan Sekarang
          </button>
        </form>
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