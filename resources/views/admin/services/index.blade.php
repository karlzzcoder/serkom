@extends('layouts.admin')

@section('title', 'Kelola Layanan - Admin Panel')
@section('page_title', 'Kelola Layanan & Produk')

@section('content')
  <div class="flex items-center justify-between mb-6">
    <div>
      <h3 class="text-lg font-bold text-white">Daftar Layanan</h3>
      <p class="text-xs text-slate-400 mt-1">Seluruh data layanan yang tampil di halaman publik.</p>
    </div>
    <a href="{{ route('admin.services.create') }}" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs px-4 py-2.5 rounded-lg transition shadow-sm">
      + Tambah Layanan Baru
    </a>
  </div>

  <!-- Data Table -->
  <div class="bg-[#0F1623] border border-slate-800 rounded-lg overflow-hidden">
    <div class="overflow-x-auto">
      <table class="w-full text-left text-xs text-slate-300">
        <thead class="bg-[#080C14] text-slate-400 uppercase font-mono text-[10px] border-b border-slate-800">
          <tr>
            <th class="px-5 py-3">Kode</th>
            <th class="px-5 py-3">Nama Layanan</th>
            <th class="px-5 py-3">Kategori</th>
            <th class="px-5 py-3">Spesifikasi</th>
            <th class="px-5 py-3 text-right">Aksi</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-slate-800/60">
          @forelse($services as $service)
            <tr class="hover:bg-slate-800/30 transition">
              <td class="px-5 py-4 font-mono text-slate-400">{{ $service->code }}</td>
              <td class="px-5 py-4 font-semibold text-white">{{ $service->title }}</td>
              <td class="px-5 py-4">
                <span class="bg-blue-500/10 text-blue-400 px-2 py-0.5 rounded border border-blue-500/20 text-[10px]">
                  {{ $service->category }}
                </span>
              </td>
              <td class="px-5 py-4 font-mono text-slate-400">{{ $service->specs ?? '-' }}</td>
              <td class="px-5 py-4 text-right">
                <div class="flex items-center justify-end gap-2">
                  <a href="{{ route('admin.services.edit', $service->id) }}" class="px-2.5 py-1.5 bg-slate-800 hover:bg-slate-700 text-slate-200 rounded text-[11px] font-medium transition">
                    Edit
                  </a>
                  <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus layanan ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-2.5 py-1.5 bg-rose-500/10 hover:bg-rose-500/20 text-rose-400 border border-rose-500/30 rounded text-[11px] font-medium transition">
                      Hapus
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="px-5 py-8 text-center text-slate-500">
                Belum ada data layanan. Klik tombol <strong>+ Tambah Layanan Baru</strong> di atas.
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
@endsection