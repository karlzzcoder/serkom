@extends('layouts.admin')

@section('title', 'Pesan Masuk - Admin SKA')

@section('content')

<div class="mb-8 pb-4 border-b border-slate-800/80">
    <h1 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Kotak Pesan Masuk</h1>
    <p class="text-xs sm:text-sm text-slate-400 mt-1">Daftar pesan dan penawaran dari pengunjung website.</p>
</div>

<div class="bg-[#0F1623] border border-slate-800/80 rounded-2xl overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead class="bg-[#080C14] text-slate-400 font-mono uppercase text-[10px] border-b border-slate-800">
                <tr>
                    <th class="py-4 px-6">Pengirim</th>
                    <th class="py-4 px-6">Kontak</th>
                    <th class="py-4 px-6">Subjek</th>
                    <th class="py-4 px-6">Pesan</th>
                    <th class="py-4 px-6">Tanggal</th>
                    <th class="py-4 px-6 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800/60 text-slate-300">
                @forelse($messages as $msg)
                    <tr class="hover:bg-[#080C14]/50 transition">
                        <td class="py-4 px-6 font-bold text-white whitespace-nowrap">{{ $msg->name }}</td>
                        <td class="py-4 px-6 font-mono text-slate-400 whitespace-nowrap">
                            <div>{{ $msg->email }}</div>
                            <div class="text-[10px] text-slate-500">{{ $msg->phone ?? '-' }}</div>
                        </td>
                        <td class="py-4 px-6 font-semibold text-blue-400 max-w-xs truncate">{{ $msg->subject }}</td>
                        <td class="py-4 px-6 max-w-sm leading-relaxed text-slate-300">{{ $msg->message }}</td>
                        <td class="py-4 px-6 font-mono text-slate-400 whitespace-nowrap">
                            {{ $msg->created_at ? $msg->created_at->format('d M Y H:i') : '-' }}
                        </td>
                        <td class="py-4 px-6 text-right whitespace-nowrap">
                            <form action="{{ route('admin.messages.destroy', $msg->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
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
                        <td colspan="6" class="py-8 text-center text-slate-500">Belum ada pesan masuk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection