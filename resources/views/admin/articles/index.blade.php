@extends('layouts.admin')

@section('title', 'Kelola Artikel - Admin Panel')

@section('content')

<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8 pb-4 border-b border-slate-800/80">
    <div>
        <h1 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Daftar Artikel & Berita</h1>
        <p class="text-xs sm:text-sm text-slate-400 mt-1">Kelola publikasi edukasi dan informasi teknis.</p>
    </div>
    <a href="{{ route('admin.articles.create') }}" class="px-5 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs transition inline-flex items-center gap-2 self-start sm:self-auto shadow-lg shadow-blue-600/20">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
        </svg>
        Tulis Artikel
    </a>
</div>

<div class="bg-[#0F1623] border border-slate-800/80 rounded-2xl overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead class="bg-[#080C14] text-slate-400 font-mono uppercase text-[10px] border-b border-slate-800">
                <tr>
                    <th class="py-4 px-6">Tanggal</th>
                    <th class="py-4 px-6">Judul Artikel</th>
                    <th class="py-4 px-6">Kategori</th>
                    <th class="py-4 px-6 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800/60 text-slate-300">
                @forelse($articles as $article)
                    <tr class="hover:bg-[#080C14]/50 transition">
                        <td class="py-4 px-6 font-mono text-slate-400 whitespace-nowrap">
                            {{ $article->created_at ? $article->created_at->format('d M Y') : '-' }}
                        </td>
                        <td class="py-4 px-6 font-bold text-white max-w-md truncate">{{ $article->title }}</td>
                        <td class="py-4 px-6 whitespace-nowrap">
                            <span class="bg-blue-500/10 text-blue-400 px-2.5 py-1 rounded border border-blue-500/20 text-[10px] font-medium">
                                {{ $article->category }}
                            </span>
                        </td>
                        <td class="py-4 px-6 text-right space-x-2 whitespace-nowrap">
                            <a href="{{ route('admin.articles.edit', $article->id) }}" class="inline-block px-3 py-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-200 text-[11px] font-semibold transition">
                                Edit
                            </a>
                            <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1.5 rounded-lg bg-red-600/20 hover:bg-red-600 text-red-400 hover:text-white text-[11px] font-semibold transition">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="py-8 text-center text-slate-500">Belum ada artikel dipublikasikan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection