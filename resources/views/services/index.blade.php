@extends('layouts.app')

@section('title', 'Katalog Layanan & Hardware - PT Solusi Koneksi Anda')

@section('content')
  <section class="max-w-6xl mx-auto px-6 py-12">
    <div class="mb-10 pb-4 border-b border-slate-800">
      <span class="text-xs font-bold uppercase tracking-widest text-blue-500">Katalog Lengkap</span>
      <h1 class="text-3xl font-extrabold text-white mt-1">Produk & Layanan Konektivitas</h1>
      <p class="text-slate-400 text-sm mt-2">Seluruh solusi jaringan dan pemeliharaan IT yang kami sediakan untuk kebutuhan bisnis Anda.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      @forelse($services as $service)
        <div class="bg-[#0F1623] border border-slate-800 p-6 rounded-lg flex flex-col justify-between hover:border-slate-700 transition">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-[10px] font-mono text-slate-500 uppercase tracking-wider">{{ $service->code }}</span>
              <span class="text-[10px] bg-blue-500/10 text-blue-400 px-2 py-0.5 rounded border border-blue-500/20 font-medium">
                {{ $service->category }}
              </span>
            </div>
            <h2 class="text-lg font-bold text-white mb-3">{{ $service->title }}</h2>
            <p class="text-slate-400 text-xs leading-relaxed mb-6">
              {{ $service->description }}
            </p>
          </div>
          <div class="pt-4 border-t border-slate-800/60 flex items-center justify-between text-xs text-slate-400 font-mono">
            <span>{{ $service->specs }}</span>
          </div>
        </div>
      @empty
        <div class="col-span-3 text-center py-12 text-slate-500 text-sm">
          Belum ada layanan yang ditambahkan.
        </div>
      @endforelse
    </div>
  </section>
@endsection