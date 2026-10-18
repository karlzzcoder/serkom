<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin - PT Solusi Koneksi Anda</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; }
  </style>
</head>
<body class="bg-[#080C14] text-slate-200 antialiased min-h-screen flex items-center justify-center p-6">

  <div class="w-full max-w-md">
    <!-- Header Brand -->
    <div class="text-center mb-8">
      <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center font-bold text-white text-lg mx-auto mb-3 shadow-lg shadow-blue-600/20">
        SK
      </div>
      <h1 class="text-xl font-bold text-white tracking-tight">Admin Portal</h1>
      <p class="text-xs text-slate-400 mt-1">PT Solusi Koneksi Anda - Control Panel</p>
    </div>

    <!-- Alert Sukses / Logout -->
    @if(session('success'))
      <div class="mb-5 p-3.5 rounded-lg bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs text-center">
        {{ session('success') }}
      </div>
    @endif

    <!-- Card Form Login -->
    <div class="bg-[#0F1623] border border-slate-800/80 p-8 rounded-2xl shadow-2xl">
      <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-5 text-xs">
        @csrf

        <div>
          <label class="block text-slate-400 font-medium mb-1.5">Email Akses Admin</label>
          <input type="email" name="email" value="{{ old('email') }}" placeholder="admin@solusikoneksianda.co.id" required autofocus
                 class="w-full bg-[#080C14] border border-slate-700/80 rounded-lg px-3.5 py-2.5 text-white focus:outline-none focus:border-blue-500 font-mono">
          @error('email') <p class="text-rose-400 mt-1.5 text-[11px]">{{ $message }}</p> @enderror
        </div>

        <div>
          <label class="block text-slate-400 font-medium mb-1.5">Password</label>
          <input type="password" name="password" placeholder="••••••••" required
                 class="w-full bg-[#080C14] border border-slate-700/80 rounded-lg px-3.5 py-2.5 text-white focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3 rounded-lg transition shadow-lg shadow-blue-600/20 text-xs mt-2">
          Masuk ke Admin Panel &rarr;
        </button>
      </form>
    </div>

    <!-- Footer Copyright -->
    <p class="text-center text-[11px] text-slate-600 mt-8 font-mono">&copy; {{ date('Y') }} PT Solusi Koneksi Anda</p>
  </div>

</body>
</html>