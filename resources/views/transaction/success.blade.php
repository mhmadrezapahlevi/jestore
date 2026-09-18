<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pesanan Berhasil - JE STORE</title>
<style>
  * { margin:0; padding:0; box-sizing:border-box; font-family:'Segoe UI',sans-serif; }
  body { background:#0a0a0a; color:#fff; min-height:100vh; display:flex; align-items:center; justify-content:center; padding:20px; }
  .card { background:#141414; border:1px solid #222; border-radius:16px; padding:40px; max-width:480px; width:100%; text-align:center; }
  .icon { font-size:64px; margin-bottom:16px; }
  h1 { font-size:22px; margin-bottom:8px; }
  .orderid { background:#1e1e1e; border:1px dashed #ff4757; color:#ff6b6b; padding:12px; border-radius:10px; font-weight:bold; margin:20px 0; font-size:18px; letter-spacing:1px; }
  .detail { text-align:left; background:#1a1a1a; border-radius:10px; padding:16px; margin-bottom:20px; }
  .detail .row { display:flex; justify-content:space-between; padding:6px 0; font-size:14px; color:#aaa; }
  .detail .row b { color:#fff; }
  .btn { display:inline-block; background:#ff4757; color:#fff; padding:12px 28px; border-radius:10px; text-decoration:none; font-weight:bold; margin:4px; font-size:14px; }
  .btn.secondary { background:#222; }
  .note { font-size:12px; color:#666; margin-top:16px; }
</style>
</head>
<body>
<div class="card">
  <div class="icon">✅</div>
  <h1>Pesanan Berhasil Dibuat!</h1>
  <p style="color:#888;font-size:14px">Simpan Order ID kamu untuk cek status pesanan</p>

  <div class="orderid">{{ $transaction->order_id }}</div>

  <div class="detail">
    <div class="row"><span>Game</span><b>{{ $transaction->game->name }}</b></div>
    <div class="row"><span>Paket</span><b>{{ $transaction->package->name }}</b></div>
   <div class="row"><span>User ID</span><b>{{ $transaction->user_id }}</b></div>
    @if($transaction->server_id)
    <div class="row"><span>Server</span><b>{{ $transaction->server_id }}</b></div>
    @endif
    <div class="row"><span>Pembayaran</span><b>{{ $transaction->payment_method }}</b></div>
    <div class="row"><span>Status</span><b style="color:#f39c12">{{ strtoupper($transaction->status) }}</b></div>
    <div class="row"><span>Total</span><b style="color:#ff6b6b">Rp{{ number_format($transaction->total_price,0,',','.') }}</b></div>
  </div>

  <a href="{{ route('home') }}" class="btn">🏠 Beranda</a>
  <a href="{{ route('transaction.check') }}" class="btn secondary">🔍 Cek Transaksi</a>

  <p class="note">Diamond akan masuk otomatis 1–3 menit setelah pembayaran 🚀</p>
</div>
</body>
</html>