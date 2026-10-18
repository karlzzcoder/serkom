@extends('layouts.app')

@section('title', 'Artikel & Informasi Terkini - PT Solusi Koneksi Anda')

@section('content')
  <section class="max-w-6xl mx-auto px-6 py-12">
    <div class="mb-10 pb-4 border-b border-slate-800">
      <span class="text-xs font-bold uppercase tracking-widest text-blue-500">Informasi Terkini</span>
      <h1 class="text-3xl font-extrabold text-white mt-1">Artikel & Berita IT Network</h1>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      @forelse($articles as $article)
        <a href="{{ route('articles.show', $article->slug) }}" class="bg-[#0F1623] border border-slate-800 p-6 rounded-lg flex flex-col justify-between hover:border-slate-700 transition group">
          <div>
            <div class="flex items-center justify-between mb-3 text-[10px] text-slate-500 font-mono">
              <span class="text-blue-400">{{ $article->category }}</span>
              <span>{{ $article->created_at->format('d M Y') }}</span>
            </div>
            <h2 class="text-base font-bold text-white mb-2 group-hover:text-blue-400 transition">{{ $article->title }}</h2>
            <p class="text-slate-400 text-xs leading-relaxed mb-4 line-clamp-3">{{ $article->excerpt }}</p>
          </div>
          <span class="text-xs font-semibold text-blue-400 group-hover:translate-x-1 transition flex items-center gap-1">
            Baca Selengkapnya &rarr;
          </span>
        </a>
      @empty
        <div class="col-span-3 text-center py-12 text-slate-500 text-sm">Belum ada artikel dipublikasikan.</div>
      @endforelse
    </div>
  </section>
@endsection