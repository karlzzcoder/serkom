@extends('layouts.admin')

@section('title', 'Kelola Galeri - Admin Panel')
@section('page_title', 'Kelola Galeri Dokumentasi')

@section('content')
  <div class="bg-[#0F1623] border border-slate-800/80 rounded-2xl p-6 sm:p-8">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6 pb-4 border-b border-slate-800/80">
      <div>
        <h3 class="text-base font-bold text-white">Daftar Dokumentasi Proyek</h3>
        <p class="text-xs text-slate-400 mt-0.5">Upload dan kelola foto-foto pengerjaan proyek serta instalasi di lapangan.</p>
      </div>
      <a href="{{ route('admin.galleries.create') }}" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg bg-blue-600 hover:bg-blue-500 text-white text-xs font-semibold transition shadow-lg shadow-blue-600/20 w-fit">
        + Upload Foto Baru
      </a>
    </div>

    @if(session('success'))
      <div class="mb-5 p-3.5 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 rounded-xl text-xs">
        {{ session('success') }}
      </div>
    @endif

    <div class="overflow-x-auto">
      <table class="w-full text-left text-xs text-slate-300">
        <thead class="bg-[#080C14] text-slate-400 uppercase text-[10px] tracking-wider border-b border-slate-800">
          <tr>
            <th class="py-3 px-4">Preview</th>
            <th class="py-3 px-4">Judul Kegiatan</th>
            <th class="py-3 px-4">Kategori</th>
            <th class="py-3 px-4 text-right">Aksi</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-slate-800/60">
          @forelse($galleries as $item)
            <tr class="hover:bg-slate-800/30 transition">
              <td class="py-3 px-4">
                <div class="w-16 h-12 rounded-lg overflow-hidden border border-slate-800 bg-[#080C14]">
                  <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover">
                </div>
              </td>
              <td class="py-3 px-4 font-semibold text-white">
                {{ $item->title }}
              </td>
              <td class="py-3 px-4">
                <span class="px-2.5 py-1 rounded-md bg-blue-500/10 text-blue-400 border border-blue-500/20 text-[11px]">
                  {{ $item->category }}
                </span>
              </td>
              <td class="py-3 px-4 text-right">
                <div class="flex items-center justify-end gap-2">
                  <a href="{{ route('admin.galleries.edit', $item->id) }}" class="px-3 py-1.5 rounded-md bg-slate-800 hover:bg-slate-700 text-slate-300 transition">
                    Edit
                  </a>
                  <form action="{{ route('admin.galleries.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus foto ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-3 py-1.5 rounded-md bg-rose-500/10 hover:bg-rose-500/20 text-rose-400 border border-rose-500/20 transition">
                      Hapus
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="4" class="py-8 text-center text-slate-500">
                Belum ada foto galeri terpasang. Klik tombol "+ Upload Foto Baru" untuk menambahkan.
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
@endsection