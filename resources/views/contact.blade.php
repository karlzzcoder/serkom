@extends('layouts.app')

@section('title', 'Hubungi Kami - PT Solusi Koneksi Anda')

@section('content')
  <section class="max-w-6xl mx-auto px-6 py-12">
    <!-- Header Kontak -->
    <div class="mb-10 pb-6 border-b border-slate-800/80 reveal">
      <span class="text-xs font-bold uppercase tracking-widest text-blue-500">Hubungi Kami</span>
      <h1 class="text-3xl md:text-4xl font-extrabold text-white mt-1">Konsultasi & Penawaran Proyek</h1>
      <p class="text-slate-400 text-sm md:text-base mt-2 max-w-2xl leading-relaxed">
        Punya kebutuhan perancangan jaringan, instalasi fiber optic, atau penataan ruang server? Tim teknis kami siap membantu Anda.
      </p>
    </div>

    <!-- Grid Kontak: Info Resmi & Form Pesan -->
    <div class="grid md:grid-cols-12 gap-8 items-start mb-16">
      
      <!-- Sisi Kiri: Informasi Kontak Kantor -->
      <div class="md:col-span-5 space-y-6 reveal">
        <div class="bg-[#0F1623] border border-slate-800/80 p-6 rounded-xl space-y-6">
          <div>
            <h3 class="text-xs font-mono font-bold uppercase tracking-wider text-blue-400 mb-2">Kantor Utama</h3>
            <p class="text-white text-sm font-semibold">PT Solusi Koneksi Anda</p>
            <p class="text-slate-400 text-xs leading-relaxed mt-1">
              Jl. Raya Pajajaran No. 88 F, Baranangsiang, Kec. Bogor Timur, Kota Bogor, Jawa Barat 16143
            </p>
          </div>

          <div class="pt-4 border-t border-slate-800/80 space-y-4 text-xs">
            <!-- Icon Telepon / WhatsApp -->
            <div class="flex items-center gap-3.5 text-slate-300">
              <div class="w-8 h-8 rounded-lg bg-blue-600/10 border border-blue-500/20 text-blue-400 flex items-center justify-center shrink-0">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
              </div>
              <div>
                <p class="text-slate-500 text-[10px] font-mono uppercase tracking-wider">Telepon / WhatsApp</p>
                <p class="font-mono text-white text-xs">+62 812-3456-7890</p>
              </div>
            </div>

            <!-- Icon Email -->
            <div class="flex items-center gap-3.5 text-slate-300">
              <div class="w-8 h-8 rounded-lg bg-blue-600/10 border border-blue-500/20 text-blue-400 flex items-center justify-center shrink-0">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
              </div>
              <div>
                <p class="text-slate-500 text-[10px] font-mono uppercase tracking-wider">Email Support & Penawaran</p>
                <p class="font-mono text-white text-xs">info@solusikoneksianda.co.id</p>
              </div>
            </div>

            <!-- Icon Jam Operasional -->
            <div class="flex items-center gap-3.5 text-slate-300">
              <div class="w-8 h-8 rounded-lg bg-blue-600/10 border border-blue-500/20 text-blue-400 flex items-center justify-center shrink-0">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </div>
              <div>
                <p class="text-slate-500 text-[10px] font-mono uppercase tracking-wider">Jam Operasional</p>
                <p class="text-white text-xs">Senin – Jumat: 08:00 – 17:00 WIB</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Google Maps Embed -->
        <div class="bg-[#0F1623] border border-slate-800/80 rounded-xl overflow-hidden h-48 relative">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.365111005728!2d106.8041002!3d-6.6015002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5e31e5058cd%3A0x2f6448386348ef1a!2sJl.%20Raya%20Pajajaran%2C%20Kota%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
            class="w-full h-full border-0 opacity-80 filter grayscale invert contrast-125" 
            allowfullscreen="" 
            loading="lazy">
          </iframe>
        </div>
      </div>

      <!-- Sisi Kanan: Form Kirim Pesan -->
      <div class="md:col-span-7 reveal">
        @if(session('success'))
          <div class="mb-6 p-4 rounded-lg bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs flex items-center gap-2">
            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            <span>{{ session('success') }}</span>
          </div>
        @endif

        <form action="{{ route('contact.store') }}" method="POST" class="bg-[#0F1623] border border-slate-800/80 p-8 rounded-xl space-y-5 text-xs">
          @csrf

          <div class="grid md:grid-cols-2 gap-4">
            <div>
              <label class="block text-slate-400 font-medium mb-1.5">Nama Lengkap / Instansi <span class="text-rose-400">*</span></label>
              <input type="text" name="name" value="{{ old('name') }}" placeholder="Contoh: PT Nusa Bakti / Bapak Andi" required
                     class="w-full bg-[#080C14] border border-slate-700/80 rounded px-3.5 py-2.5 text-white focus:outline-none focus:border-blue-500">
              @error('name') <p class="text-rose-400 mt-1 text-[11px]">{{ $message }}</p> @enderror
            </div>

            <div>
              <label class="block text-slate-400 font-medium mb-1.5">Email Aktif <span class="text-rose-400">*</span></label>
              <input type="email" name="email" value="{{ old('email') }}" placeholder="nama@perusahaan.com" required
                     class="w-full bg-[#080C14] border border-slate-700/80 rounded px-3.5 py-2.5 text-white focus:outline-none focus:border-blue-500 font-mono">
              @error('email') <p class="text-rose-400 mt-1 text-[11px]">{{ $message }}</p> @enderror
            </div>
          </div>

          <div class="grid md:grid-cols-2 gap-4">
            <div>
              <label class="block text-slate-400 font-medium mb-1.5">Nomor Telepon / WhatsApp</label>
              <input type="text" name="phone" value="{{ old('phone') }}" placeholder="0812xxxxxxx"
                     class="w-full bg-[#080C14] border border-slate-700/80 rounded px-3.5 py-2.5 text-white focus:outline-none focus:border-blue-500 font-mono">
            </div>

            <div>
              <label class="block text-slate-400 font-medium mb-1.5">Subjek Kebutuhan <span class="text-rose-400">*</span></label>
              <select name="subject" required class="w-full bg-[#080C14] border border-slate-700/80 rounded px-3.5 py-2.5 text-white focus:outline-none focus:border-blue-500">
                <option value="Permintaan Penawaran Proyek">Permintaan Penawaran Proyek</option>
                <option value="Konsultasi Jaringan & Server">Konsultasi Jaringan & Server</option>
                <option value="Jasa Maintenance & SLA">Jasa Maintenance & SLA</option>
                <option value="Lainnya">Lainnya</option>
              </select>
            </div>
          </div>

          <div>
            <label class="block text-slate-400 font-medium mb-1.5">Pesan / Detail Kebutuhan Proyek <span class="text-rose-400">*</span></label>
            <textarea name="message" rows="5" required placeholder="Jelaskan secara rinci kebutuhan jaringan, jumlah node/titik, atau lokasi proyek Anda..."
                      class="w-full bg-[#080C14] border border-slate-700/80 rounded px-3.5 py-2.5 text-white focus:outline-none focus:border-blue-500 leading-relaxed">{{ old('message') }}</textarea>
            @error('message') <p class="text-rose-400 mt-1 text-[11px]">{{ $message }}</p> @enderror
          </div>

          <div class="pt-2 flex justify-end">
            <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs px-6 py-3 rounded-lg transition shadow-lg shadow-blue-600/20">
              Kirim Pesan Sekarang &rarr;
            </button>
          </div>
        </form>
      </div>

    </div>
  </section>
@endsection