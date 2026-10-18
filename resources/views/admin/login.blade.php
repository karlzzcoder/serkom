<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator - PT Solusi Koneksi Anda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #080C14; color: #F8FAFC; }
    </style>
</head>
<body class="antialiased bg-[#080C14] text-slate-100 min-h-screen flex items-center justify-center p-4 sm:p-6">

    <div class="w-full max-w-md bg-[#0F1623] border border-slate-800/80 p-6 sm:p-8 rounded-2xl shadow-2xl relative overflow-hidden">
        
        <!-- Header Branding -->
        <div class="text-center mb-8">
            <div class="w-12 h-12 rounded-2xl bg-blue-600 flex items-center justify-center font-bold text-white text-lg mx-auto mb-4 shadow-lg shadow-blue-600/30">
                SK
            </div>
            <h1 class="text-xl sm:text-2xl font-extrabold text-white tracking-tight">Admin Login</h1>
            <p class="text-xs text-slate-400 mt-1">PT Solusi Koneksi Anda - CMS System</p>
        </div>

        <!-- Alert Error General -->
        @if(session('error'))
            <div class="mb-6 p-3.5 rounded-xl bg-red-500/10 border border-red-500/30 text-red-400 text-xs text-center">
                {{ session('error') }}
            </div>
        @endif

        <!-- Form Login -->
        <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="email" class="block text-xs font-mono text-slate-300 mb-2">Alamat Email Administrator</label>
                <input type="email" id="email" name="email" required value="{{ old('email') }}"
                       placeholder="admin@solusikoneksianda.co.id"
                       class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">
                @error('email')
                    <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-xs font-mono text-slate-300 mb-2">Kata Sandi</label>
                <input type="password" id="password" name="password" required
                       placeholder="••••••••"
                       class="w-full bg-[#080C14] border border-slate-800 rounded-xl px-4 py-3 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">
                @error('password')
                    <p class="text-red-400 text-[11px] mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" 
                    class="w-full py-3.5 px-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs sm:text-sm shadow-lg shadow-blue-600/20 transition duration-200">
                Masuk ke Dashboard
            </button>
        </form>
    </div>

</body>
</html>