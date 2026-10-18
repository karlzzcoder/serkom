@extends('layouts.admin')

@section('title', 'Pesan Masuk - Admin Panel')
@section('page_title', 'Kotak Masuk Pesan & Penawaran')

@section('content')
  <div class="mb-6">
    <h3 class="text-lg font-bold text-white">Daftar Pesan Masuk</h3>
    <p class="text-xs text-slate-400 mt-1">Pesan dan konsultasi yang dikirim pengunjung dari halaman Kontak.</p>
  </div>

  <div class="bg-[#0F1623] border border-slate-800 rounded-lg overflow-hidden">
    <table class="w-full text-left text-xs text-slate-300">
      <thead class="bg-[#080C14] text-slate-400 uppercase font-mono text-[10px] border-b border-slate-800">
        <tr>
          <th class="px-5 py-3">Pengirim</th>
          <th class="px-5 py-3">Kontak</th>
          <th class="px-5 py-3">Subjek</th>
          <th class="px-5 py-3">Pesan</th>
          <th class="px-5 py-3">Tanggal</th>
          <th class="px-5 py-3 text-right">Aksi</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-slate-800/60">
        @forelse($messages as $msg)
          <tr class="hover:bg-slate-800/30 transition">
            <td class="px-5 py-4 font-semibold text-white">{{ $msg->name }}</td>
            <td class="px-5 py-4 font-mono text-slate-400">
              <div>{{ $msg->email }}</div>
              <div class="text-[10px] text-slate-500">{{ $msg->phone ?? '-' }}</div>
            </td>
            <td class="px-5 py-4">
              <span class="bg-blue-500/10 text-blue-400 px-2 py-0.5 rounded border border-blue-500/20 text-[10px]">
                {{ $msg->subject }}
              </span>
            </td>
            <td class="px-5 py-4 max-w-xs text-slate-300 leading-relaxed line-clamp-2">{{ $msg->message }}</td>
            <td class="px-5 py-4 font-mono text-slate-400">{{ $msg->created_at->format('d M Y H:i') }}</td>
            <td class="px-5 py-4 text-right">
              <form action="{{ route('admin.messages.destroy', $msg->id) }}" method="POST" onsubmit="return confirm('Hapus pesan ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-2.5 py-1.5 bg-rose-500/10 hover:bg-rose-500/20 text-rose-400 border border-rose-500/30 rounded text-[11px] transition">
                  Hapus
                </button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="6" class="px-5 py-8 text-center text-slate-500">
              Belum ada pesan masuk.
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
@endsection