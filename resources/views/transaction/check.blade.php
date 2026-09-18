<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Transaksi - JE STORE</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md">
        <div class="bg-gray-900 rounded-2xl p-8 shadow-2xl">
            
            <!-- Header -->
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold mb-2">🔍 Cek Transaksi</h1>
                <p class="text-gray-400 text-sm">Masukkan Order ID untuk melacak pesanan kamu</p>
            </div>

            <!-- Form -->
            <form action="{{ route('transaction.track') }}" method="POST" class="mb-6">
                @csrf
                <input 
                    type="text" 
                    name="order_id" 
                    placeholder="Contoh: JE-ABC12345" 
                    value="{{ request('order_id') }}"
                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 mb-4 focus:outline-none focus:border-red-500"
                    required
                >
                <button 
                    type="submit" 
                    class="w-full bg-red-500 hover:bg-red-600 text-white font-bold py-3 rounded-lg transition"
                >
                    Lacak Pesanan
                </button>
            </form>

            <!-- Hasil Pencarian -->
            @if(isset($transaction))
                <div class="bg-gray-800 rounded-lg p-6 space-y-3">
                    <div class="flex justify-between">
                        <span class="text-gray-400">Order ID</span>
                        <span class="font-bold">{{ $transaction->order_id }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-400">Game</span>
                        <span class="font-bold">{{ $transaction->game->name }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-400">Paket</span>
                        <span class="font-bold">{{ $transaction->package->name }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-400">User ID</span>
                        <span class="font-bold">{{ $transaction->user_id }}</span>
                    </div>
                    @if($transaction->server_id)
                    <div class="flex justify-between">
                        <span class="text-gray-400">Server ID</span>
                        <span class="font-bold">{{ $transaction->server_id }}</span>
                    </div>
                    @endif
                    <div class="flex justify-between">
                        <span class="text-gray-400">Pembayaran</span>
                        <span class="font-bold">{{ $transaction->payment_method }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-400">Status</span>
                        <span class="font-bold text-yellow-500">{{ strtoupper($transaction->status) }}</span>
                    </div>
                    <div class="flex justify-between border-t border-gray-700 pt-3">
                        <span class="text-gray-400">Total</span>
                        <span class="font-bold text-red-500 text-lg">Rp{{ number_format($transaction->total_price, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-400">Tanggal</span>
                        <span>{{ $transaction->created_at->format('d M Y, H:i') }}</span>
                    </div>
                </div>
            @elseif(request('order_id'))
                <div class="bg-red-900/20 border border-red-500 rounded-lg p-4 text-center">
                    <p class="text-red-400">❌ Transaksi tidak ditemukan</p>
                </div>
            @endif

            <!-- Back Link -->
            <div class="text-center mt-6">
                <a href="{{ route('home') }}" class="text-gray-400 hover:text-white text-sm transition">
                    ← Kembali ke Beranda
                </a>
            </div>

        </div>
    </div>

</body>
</html>