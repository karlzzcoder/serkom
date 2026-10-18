@extends('layouts.admin')

@section('title', 'Kelola Artikel - Admin Panel')
@section('page_title', 'Kelola Artikel & Berita')

@section('content')
  <div class="flex items-center justify-between mb-6">
    <div>
      <h3 class="text-lg font-bold text-white">Daftar Artikel</h3>
      <p class="text-xs text-slate-400 mt-1">Kelola publikasi berita dan pengumuman perusahaan.</p>
    </div>
    <a href="{{ route('admin.articles.create') }}" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs px-4 py-2.5 rounded-lg transition">
      + Tulis Artikel Baru
    </a>
  </div>

  <div class="bg-[#0F1623] border border-slate-800 rounded-lg overflow-hidden">
    <table class="w-full text-left text-xs text-slate-300">
      <thead class="bg-[#080C14] text-slate-400 uppercase font-mono text-[10px] border-b border-slate-800">
        <tr>
          <th class="px-5 py-3">Judul Artikel</th>
          <th class="px-5 py-3">Kategori</th>
          <th class="px-5 py-3">Tanggal Terbit</th>
          <th class="px-5 py-3 text-right">Aksi</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-slate-800/60">
        @forelse($articles as $article)
          <tr class="hover:bg-slate-800/30 transition">
            <td class="px-5 py-4 font-semibold text-white max-w-xs truncate">{{ $article->title }}</td>
            <td class="px-5 py-4">
              <span class="bg-blue-500/10 text-blue-400 px-2 py-0.5 rounded border border-blue-500/20 text-[10px]">
                {{ $article->category }}
              </span>
            </td>
            <td class="px-5 py-4 font-mono text-slate-400">{{ $article->created_at->format('d M Y') }}</td>
            <td class="px-5 py-4 text-right">
              <div class="flex items-center justify-end gap-2">
                <a href="{{ route('admin.articles.edit', $article->id) }}" class="px-2.5 py-1.5 bg-slate-800 hover:bg-slate-700 text-slate-200 rounded text-[11px] transition">Edit</a>
                <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Hapus artikel ini?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="px-2.5 py-1.5 bg-rose-500/10 hover:bg-rose-500/20 text-rose-400 border border-rose-500/30 rounded text-[11px] transition">Hapus</button>
                </form>
              </div>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="4" class="px-5 py-8 text-center text-slate-500">Belum ada artikel. Klik <strong>+ Tulis Artikel Baru</strong>.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
@endsection