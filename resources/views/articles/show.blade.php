@extends('layouts.app')

@section('title', $article->title . ' - PT Solusi Koneksi Anda')

@section('content')
  <article class="max-w-4xl mx-auto px-6 py-12">
    <!-- Breadcrumb Navigasi -->
    <nav class="flex items-center gap-2 text-xs font-mono text-slate-500 mb-8">
      <a href="/" class="hover:text-slate-300 transition">Home</a>
      <span>/</span>
      <a href="{{ route('articles.public') }}" class="hover:text-slate-300 transition">Artikel</a>
      <span>/</span>
      <span class="text-slate-400 truncate max-w-xs">{{ $article->title }}</span>
    </nav>

    <!-- Header Artikel -->
    <header class="mb-10 pb-8 border-b border-slate-800/80">
      <div class="flex items-center gap-3 text-xs font-mono mb-4">
        <span class="bg-blue-500/10 text-blue-400 px-2.5 py-1 rounded border border-blue-500/20 font-medium">
          {{ $article->category }}
        </span>
        <span class="text-slate-500">•</span>
        <time class="text-slate-400">{{ $article->created_at ? $article->created_at->format('d M Y') : date('d M Y') }}</time>
        <span class="text-slate-500">•</span>
        <span class="text-slate-500">Oleh Tim Network SKA</span>
      </div>

      <h1 class="text-3xl md:text-4xl font-extrabold text-white tracking-tight leading-snug mb-6">
        {{ $article->title }}
      </h1>

      <p class="text-slate-400 text-base leading-relaxed italic bg-[#0F1623] p-4 rounded-lg border-l-2 border-blue-500">
        "{{ $article->excerpt }}"
      </p>
    </header>

    <!-- Gambar Artikel (Jika Ada) -->
    @if($article->image)
      <div class="mb-10 rounded-xl overflow-hidden border border-slate-800">
        <img 
          src="{{ asset('storage/' . $article->image) }}" 
          alt="{{ $article->title }}" 
          class="w-full h-[380px] object-cover"
        />
      </div>
    @endif

    <!-- Isi Konten Utama Artikel -->
    <div class="text-slate-300 text-sm md:text-base leading-relaxed space-y-6 pb-12 border-b border-slate-800/80">
      {!! nl2br(e($article->content)) !!}
    </div>

    <!-- Tombol Kembali -->
    <div class="py-8 flex items-center justify-between">
      <a href="{{ route('articles.public') }}" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-400 hover:text-white transition">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
        </svg>
        Kembali ke Semua Artikel
      </a>
    </div>

    <!-- Seksi Artikel Terkait -->
    @if($relatedArticles->count() > 0)
      <section class="mt-12 pt-8 border-t border-slate-800">
        <div class="flex items-center justify-between mb-6">
          <h3 class="text-lg font-bold text-white">Artikel Terkait Lainnya</h3>
          <a href="{{ route('articles.public') }}" class="text-xs text-blue-400 hover:text-blue-300 transition">
            Lihat Semua &rarr;
          </a>
        </div>

        <div class="grid md:grid-cols-3 gap-5">
          @foreach($relatedArticles as $related)
            <a href="{{ route('articles.show', $related->slug) }}" class="bg-[#0F1623] border border-slate-800 p-5 rounded-lg flex flex-col justify-between hover:border-slate-700 transition group">
              <div>
                <div class="flex items-center justify-between text-[10px] font-mono text-slate-500 mb-2">
                  <span class="text-blue-400">{{ $related->category }}</span>
                  <span>{{ $related->created_at ? $related->created_at->format('d M Y') : '' }}</span>
                </div>
                <h4 class="text-xs font-bold text-white group-hover:text-blue-400 transition line-clamp-2 mb-2">
                  {{ $related->title }}
                </h4>
                <p class="text-slate-400 text-[11px] leading-relaxed line-clamp-2">
                  {{ $related->excerpt }}
                </p>
              </div>
            </a>
          @endforeach
        </div>
      </section>
    @endif
  </article>
@endsection