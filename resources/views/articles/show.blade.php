@extends('layouts.app')

@section('title', $article->title . ' - PT Solusi Koneksi Anda')

@section('content')

<!-- ==========================================
     DETAIL ARTIKEL SECTION (FULL WIDTH WRAPPER)
=========================================== -->
<section class="w-full bg-[#080C14] py-10 sm:py-16 min-h-[calc(100vh-4rem)]">
  <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Breadcrumb Navigasi -->
    <nav class="flex flex-wrap items-center gap-2 text-xs font-mono text-slate-500 mb-8 reveal">
      <a href="{{ route('home') }}" class="hover:text-slate-300 transition">Beranda</a>
      <span>/</span>
      <a href="{{ route('articles.public') }}" class="hover:text-slate-300 transition">Artikel</a>
      <span>/</span>
      <span class="text-slate-400 truncate max-w-xs sm:max-w-md">{{ $article->title }}</span>
    </nav>

    <!-- Header Artikel -->
    <header class="mb-10 pb-8 border-b border-slate-800/80 reveal">
      <div class="flex flex-wrap items-center gap-3 text-xs font-mono mb-4">
        <span class="bg-blue-500/10 text-blue-400 px-3 py-1 rounded border border-blue-500/20 font-medium">
          {{ $article->category }}
        </span>
        <span class="text-slate-600">•</span>
        <time class="text-slate-400">{{ $article->created_at ? $article->created_at->format('d M Y') : date('d M Y') }}</time>
        <span class="text-slate-600">•</span>
        <span class="text-slate-400">Oleh Tim Network SKA</span>
      </div>

      <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-white tracking-tight leading-snug mb-6">
        {{ $article->title }}
      </h1>

      @if($article->excerpt)
        <p class="text-slate-300 text-sm sm:text-base leading-relaxed italic bg-[#0F1623] p-4 sm:p-5 rounded-xl border-l-4 border-blue-500">
          "{{ $article->excerpt }}"
        </p>
      @endif
    </header>

    <!-- Gambar Utama Artikel -->
    @if($article->image)
      <div class="mb-10 rounded-2xl overflow-hidden border border-slate-800/80 shadow-2xl reveal">
        <img 
          src="{{ asset('storage/' . $article->image) }}" 
          alt="{{ $article->title }}" 
          class="w-full h-64 sm:h-96 md:h-[420px] object-cover object-center"
        />
      </div>
    @endif

    <!-- Isi Konten Utama Artikel -->
    <div class="text-slate-300 text-sm sm:text-base leading-relaxed space-y-6 pb-12 border-b border-slate-800/80 reveal">
      {!! nl2br(e($article->content)) !!}
    </div>

    <!-- Tombol Kembali -->
    <div class="py-8 flex items-center justify-between reveal">
      <a href="{{ route('articles.public') }}" 
         class="inline-flex items-center gap-2 text-xs sm:text-sm font-semibold text-slate-400 hover:text-white transition px-4 py-2 rounded-lg bg-[#0F1623] border border-slate-800 hover:border-slate-700">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
        </svg>
        Kembali ke Semua Artikel
      </a>
    </div>

    <!-- Seksi Artikel Terkait -->
    @if(isset($relatedArticles) && $relatedArticles->count() > 0)
      <section class="mt-12 pt-8 border-t border-slate-800/80 reveal">
        <div class="flex items-center justify-between mb-6">
          <h3 class="text-lg font-bold text-white">Artikel Terkait Lainnya</h3>
          <a href="{{ route('articles.public') }}" class="text-xs font-semibold text-blue-400 hover:text-blue-300 transition flex items-center gap-1">
            Lihat Semua
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
          </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
          @foreach($relatedArticles as $related)
            <a href="{{ route('articles.show', $related->slug) }}" 
               class="bg-[#0F1623] border border-slate-800/80 p-5 rounded-xl flex flex-col justify-between hover:border-blue-500/50 transition group">
              <div>
                <div class="flex items-center justify-between text-[10px] font-mono text-slate-500 mb-2">
                  <span class="text-blue-400">{{ $related->category }}</span>
                  <span>{{ $related->created_at ? $related->created_at->format('d M Y') : '' }}</span>
                </div>
                <h4 class="text-xs sm:text-sm font-bold text-white group-hover:text-blue-400 transition line-clamp-2 mb-2">
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