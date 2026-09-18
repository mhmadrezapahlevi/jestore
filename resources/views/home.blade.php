<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JE STORE - Top Up All Game Murah, Cepat & Terpercaya</title>
<style>
  * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Arial, sans-serif; }
  body { background: #0a0a0a; color: #eee; }

  /* ===== HEADER ===== */
  .topbar { background: #111; padding: 10px 4%; display: flex; align-items: center; gap: 20px; border-bottom: 1px solid #222; }
  .logo { width: 42px; height: 42px; background: linear-gradient(135deg, #ff2d2d, #8b0000); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 900; font-size: 16px; color: #fff; flex-shrink: 0; }
  .brandname { font-weight: 900; font-size: 18px; color: #fff; letter-spacing: 1px; }
  .brandname span { color: #ff2d2d; }
  .search { flex: 1; max-width: 600px; display: flex; }
  .search input { flex: 1; background: #1c1c1c; border: 1px solid #333; color: #fff; padding: 10px 16px; border-radius: 8px; outline: none; font-size: 13px; }
  .search input:focus { border-color: #ff2d2d; }
  .lang { background: #1c1c1c; border: 1px solid #333; color: #fff; padding: 9px 14px; border-radius: 8px; font-size: 13px; cursor: pointer; }

  /* ===== NAV ===== */
  nav { background: #111; padding: 0 4%; display: flex; align-items: center; gap: 24px; border-bottom: 1px solid #1e1e1e; position: sticky; top: 0; z-index: 50; }
  nav a { color: #ccc; text-decoration: none; font-size: 13px; padding: 14px 0; display: flex; align-items: center; gap: 6px; }
  nav a.active, nav a:hover { color: #ff2d2d; }
  nav .right { margin-left: auto; display: flex; gap: 18px; }
  nav .right a { color: #aaa; }

  /* ===== HERO BANNER ===== */
  .hero-wrap { padding: 20px 4%; display: flex; justify-content: center; }
  .hero { width: 100%; max-width: 980px; height: 300px; border-radius: 16px; position: relative; overflow: hidden;
    background: linear-gradient(115deg, #4a0505 0%, #a30d0d 45%, #d61c1c 70%, #7a0808 100%);
    display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; }
  .hero::before { content: ""; position: absolute; inset: 0;
    background: repeating-linear-gradient(115deg, transparent 0 40px, rgba(255,255,255,.05) 40px 80px); }
  .hero::after { content: ""; position: absolute; right: -60px; top: -60px; width: 260px; height: 260px; border-radius: 50%;
    background: radial-gradient(circle, rgba(255,80,80,.55), transparent 70%); }
  .hero .badge-top { position: relative; font-size: 15px; letter-spacing: 4px; color: #ffd34d; font-weight: 700; text-shadow: 0 2px 6px rgba(0,0,0,.5); }
  .hero h1 { position: relative; font-size: 52px; font-weight: 900; font-style: italic; color: #fff; letter-spacing: 2px;
    text-shadow: 0 4px 0 #6b0000, 0 8px 20px rgba(0,0,0,.6); margin: 6px 0 2px; }
  .hero .tag { position: relative; font-size: 15px; font-weight: 700; color: #fff; letter-spacing: 2px; }
  .hero .socials { position: relative; margin-top: 22px; display: flex; gap: 10px; flex-wrap: wrap; justify-content: center; }
  .hero .socials span { background: rgba(0,0,0,.45); border: 1px solid rgba(255,255,255,.25); color: #fff; font-size: 12px; padding: 7px 14px; border-radius: 20px; }
  .hero .stars { position: absolute; font-size: 18px; opacity: .8; }

  /* ===== SECTION TITLE ===== */
  .section { padding: 10px 4% 30px; max-width: 1100px; margin: 0 auto; }
  .sec-title { display: flex; align-items: center; gap: 8px; font-size: 15px; font-weight: 800; color: #fff; margin: 25px 0 4px; }
  .sec-title .fire { color: #ff7b00; }
  .sec-sub { font-size: 11px; color: #888; margin-bottom: 16px; }

  /* ===== POPULER GRID ===== */
  .populer { display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; }
  .pcard { background: linear-gradient(100deg, #1a0505, #300808); border: 1px solid #3d0d0d; border-radius: 12px; padding: 12px 14px;
    display: flex; align-items: center; gap: 12px; cursor: pointer; transition: .2s; }
  .pcard:hover { transform: translateY(-3px); border-color: #ff2d2d; box-shadow: 0 8px 20px rgba(255,45,45,.15); }
  .pcard .thumb { width: 52px; height: 52px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 26px; flex-shrink: 0; }
  .pcard .pname { font-size: 13px; font-weight: 700; color: #fff; }
  .pcard .pdev { font-size: 11px; color: #999; margin-top: 2px; }

  /* ===== TABS ===== */
  .tabs { display: flex; gap: 10px; margin: 30px 0 18px; flex-wrap: wrap; }
  .tab { padding: 9px 20px; border-radius: 20px; font-size: 13px; font-weight: 600; background: #1c1c1c; color: #aaa; border: 1px solid #2a2a2a; cursor: pointer; }
  .tab.active { background: #ff2d2d; color: #fff; border-color: #ff2d2d; }

  /* ===== GAME GRID ===== */
  .games { display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: 16px; }
  .gcard { border-radius: 14px; overflow: hidden; cursor: pointer; background: #141414; border: 1px solid #262626; transition: .2s; }
  .gcard:hover { transform: translateY(-5px); border-color: #ff2d2d; box-shadow: 0 10px 25px rgba(255,45,45,.2); }
  .gcard .art { height: 170px; display: flex; align-items: flex-end; padding: 12px; font-size: 44px; position: relative; }
  .gcard .art::after { content: ""; position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,.75), transparent 60%); }
  .gcard .art b { position: relative; z-index: 2; font-size: 13px; font-style: italic; text-transform: uppercase; letter-spacing: 1px; color: #fff; text-shadow: 0 2px 8px #000; }
  .gcard .ginfo { padding: 10px 12px; }
  .gcard .gname { font-size: 12px; font-weight: 700; color: #fff; }
  .gcard .gdev { font-size: 10px; color: #888; margin-top: 2px; }
  .gcard .gprice { font-size: 10px; color: #4ade80; margin-top: 5px; font-weight: 600; }

  /* ===== KEUNGGULAN ===== */
  .feats { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 14px; margin-top: 10px; }
  .feat { background: #141414; border: 1px solid #262626; border-radius: 12px; padding: 18px; text-align: center; }
  .feat .fi { font-size: 28px; }
  .feat h4 { font-size: 13px; margin: 8px 0 4px; color: #fff; }
  .feat p { font-size: 11px; color: #888; }

  /* ===== FOOTER ===== */
  footer { background: #0d0d0d; border-top: 1px solid #1e1e1e; margin-top: 40px; padding: 35px 4% 20px; }
  .fcols { max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 25px; }
  footer h4 { color: #fff; font-size: 14px; margin-bottom: 10px; }
  footer a, footer p { color: #888; font-size: 12px; text-decoration: none; display: block; margin-bottom: 7px; }
  footer a:hover { color: #ff2d2d; }
  .copy { text-align: center; color: #555; font-size: 11px; margin-top: 25px; border-top: 1px solid #1a1a1a; padding-top: 15px; }

  /* ===== MODAL TOP UP ===== */
  .overlay { position: fixed; inset: 0; background: rgba(0,0,0,.8); display: none; align-items: center; justify-content: center; z-index: 200; padding: 15px; }
  .overlay.show { display: flex; }
  .modal { background: #141414; border: 1px solid #2c2c2c; border-radius: 16px; width: 100%; max-width: 620px; max-height: 88vh; overflow-y: auto; padding: 22px; }
  .mhead { display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; }
  .mhead h3 { font-size: 16px; color: #fff; }
  .mclose { background: #222; border: none; color: #fff; width: 30px; height: 30px; border-radius: 8px; cursor: pointer; font-size: 15px; }
  .mlabel { font-size: 12px; font-weight: 700; color: #ff6b6b; margin: 14px 0 8px; }
  .minput { width: 100%; background: #1c1c1c; border: 1px solid #333; color: #fff; padding: 11px 14px; border-radius: 8px; font-size: 13px; outline: none; }
  .minput:focus { border-color: #ff2d2d; }
  .idrow { display: flex; gap: 10px; }
  .nominals { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; }
  .nom { background: #1c1c1c; border: 1px solid #2e2e2e; border-radius: 10px; padding: 12px; text-align: center; cursor: pointer; transition: .15s; }
  .nom:hover { border-color: #777; }
  .nom.sel { border-color: #ff2d2d; background: #2a0d0d; }
  .nom .nd { font-size: 13px; font-weight: 800; color: #fff; }
  .nom .np { font-size: 11px; color: #ff6b6b; margin-top: 4px; font-weight: 700; }
  .pays { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; }
  .pay { background: #1c1c1c; border: 1px solid #2e2e2e; border-radius: 10px; padding: 11px; text-align: center; cursor: pointer; font-size: 12px; color: #ddd; }
  .pay.sel { border-color: #ff2d2d; background: #2a0d0d; color: #fff; }
  .msum { background: #1a1a1a; border-radius: 10px; padding: 14px; margin-top: 16px; font-size: 12px; color: #aaa; display: flex; justify-content: space-between; }
  .msum b { color: #fff; font-size: 15px; }
  .mbuy { width: 100%; margin-top: 14px; padding: 13px; background: linear-gradient(90deg, #ff2d2d, #c00); color: #fff; border: none; border-radius: 10px; font-size: 14px; font-weight: 800; cursor: pointer; }
  .mbuy:hover { filter: brightness(1.15); }
  .mbuy:disabled { opacity: .6; cursor: not-allowed; }

  @media (max-width: 760px) {
    .populer { grid-template-columns: 1fr; }
    .hero h1 { font-size: 32px; }
    .hero { height: 240px; }
    .nominals, .pays { grid-template-columns: repeat(2, 1fr); }
    .search { display: none; }
    .brandname { display: none; }
  }
</style>
</head>
<body>

<!-- HEADER -->
<div class="topbar">
  <div class="logo">JE</div>
  <div class="brandname">JE <span>STORE</span></div>
  <div class="search"><input type="text" id="searchInput" placeholder="🔍 Cari Game, atau Voucher"></div>
  <button class="lang">🇮🇩 ID / IDR</button>
</div>

<!-- NAV -->
<nav>
  <a href="{{ route('home') }}" class="active">🏠 Beranda</a>
  <a href="{{ route('transaction.check') }}">🧾 Cek Transaksi</a>
  <a href="#">🎁 Gift Skin</a>
  <a href="#">🧮 Kalkulator</a>
  <div class="right">
    <a href="#">🔑 Masuk</a>
    <a href="#">📝 Daftar</a>
  </div>
</nav>

<!-- HERO -->
<div class="hero-wrap">
  <div class="hero">
    <div class="badge-top">✦ TOP UP ALL GAME ✦</div>
    <h1>HANYA DI SINI</h1>
    <div class="tag">MURAH, CEPAT DAN TERPERCAYA</div>
    <div class="socials">
      <span>📸 JESTORE.COM</span>
      <span>🎵 JESTOREOFFICIAL</span>
      <span>▶️ JEJOKILID</span>
    </div>
    <span class="stars" style="left:8%;top:20%">✦</span>
    <span class="stars" style="right:12%;bottom:18%">✦</span>
    <span class="stars" style="left:20%;bottom:30%">✧</span>
  </div>
</div>

<!-- POPULER -->
<div class="section">
  <div class="sec-title"><span class="fire">🔥</span> POPULER SEKARANG!</div>
  <div class="sec-sub">Berikut adalah beberapa produk yang paling populer saat ini.</div>
  <div class="populer" id="populerGrid"></div>
</div>

<!-- TABS + GAME GRID -->
<div class="section">
  <div class="tabs">
    <div class="tab active" data-tab="topup">Top Up Game</div>
    <div class="tab" data-tab="live">Live Streaming</div>
    <div class="tab" data-tab="voucher">Voucher</div>
    <div class="tab" data-tab="joki">Joki</div>
  </div>
  <div class="games" id="gameGrid"></div>
</div>

<!-- KEUNGGULAN -->
<div class="section">
  <div class="sec-title">⚡ KENAPA JE STORE?</div>
  <div class="feats">
    <div class="feat"><div class="fi">💰</div><h4>Harga Termurah</h4><p>Harga diamond paling bersaing se-Indonesia</p></div>
    <div class="feat"><div class="fi">⚡</div><h4>Proses Kilat</h4><p>Rata-rata masuk dalam 1-3 menit, otomatis 24 jam</p></div>
    <div class="feat"><div class="fi">🔒</div><h4>100% Aman</h4><p>Legal & tanpa perlu login akun game kamu</p></div>
    <div class="feat"><div class="fi">📞</div><h4>CS 24/7</h4><p>Siap membantu kapan pun kamu butuh</p></div>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="fcols">
    <div>
      <h4>JE STORE</h4>
      <p>Platform top up game termurah, tercepat, dan terpercaya di Indonesia. Sejak 2020.</p>
    </div>
    <div>
      <h4>Layanan</h4>
      <a href="#">Top Up Game</a>
      <a href="#">Voucher</a>
      <a href="#">Joki Rank</a>
      <a href="#">Gift Skin</a>
    </div>
    <div>
      <h4>Bantuan</h4>
      <a href="#">Cara Top Up</a>
      <a href="{{ route('transaction.check') }}">Cek Transaksi</a>
      <a href="#">Hubungi Kami</a>
    </div>
    <div>
      <h4>Pembayaran</h4>
      <p>QRIS • GoPay • OVO • DANA</p>
      <p>Transfer Bank • Pulsa • ShopeePay</p>
    </div>
  </div>
  <div class="copy">© 2026 JESTORE.COM — Semua hak dilindungi.</div>
</footer>

<!-- MODAL -->
<div class="overlay" id="overlay">
  <div class="modal">
    <div class="mhead">
      <h3 id="mTitle">Top Up</h3>
      <button class="mclose" onclick="closeModal()">✕</button>
    </div>
    <div id="mBody"></div>
  </div>
</div>

<script>
// ===== DATA DARI DATABASE =====
const games = @json($games);
const popularGames = @json($popularGames);

const payments = ["QRIS","GoPay","OVO","DANA","ShopeePay","Transfer Bank","Pulsa Telkomsel","Alfamart","Indomaret"];

const rupiah = n => "Rp" + n.toLocaleString("id-ID");

// ===== RENDER POPULER =====
document.getElementById("populerGrid").innerHTML = popularGames.map(g => `
  <div class="pcard" onclick="openModal(${g.id})">
    <div class="thumb" style="background:${g.bg_gradient}">${g.icon}</div>
    <div><div class="pname">${g.name}</div><div class="pdev">${g.developer}</div></div>
  </div>`).join("");

// ===== RENDER GAME GRID =====
function renderGames(filter = "") {
  document.getElementById("gameGrid").innerHTML = games
    .filter(g => g.name.toLowerCase().includes(filter.toLowerCase()))
    .map(g => {
      const cheapest = Math.min(...g.packages.map(p => p.price));
      return `
      <div class="gcard" onclick="openModal(${g.id})">
        <div class="art" style="background:${g.bg_gradient}"><b>${g.name}</b><span style="position:absolute;top:10px;right:12px">${g.icon}</span></div>
        <div class="ginfo">
          <div class="gname">${g.name}</div>
          <div class="gdev">${g.developer}</div>
          <div class="gprice">Mulai ${rupiah(cheapest)}</div>
        </div>
      </div>`;
    }).join("") || `<p style="color:#666;font-size:13px">Game tidak ditemukan 😢</p>`;
}
renderGames();

// ===== SEARCH =====
document.getElementById("searchInput").addEventListener("input", e => renderGames(e.target.value));

// ===== TABS =====
document.querySelectorAll(".tab").forEach(t => t.addEventListener("click", () => {
  document.querySelectorAll(".tab").forEach(x => x.classList.remove("active"));
  t.classList.add("active");
}));

// ===== MODAL / ALUR TOP UP =====
let selPaket = null, selPay = null, currentGame = null;

function openModal(id) {
  currentGame = games.find(g => g.id === id);
  selPaket = null;
  selPay = null;
  document.getElementById("mTitle").textContent = "Top Up " + currentGame.name;
  document.getElementById("mBody").innerHTML = `
    <div class="mlabel">1️⃣ MASUKKAN DATA AKUN</div>
    <div class="idrow">
      <input class="minput" id="userId" placeholder="User ID">
      <input class="minput" id="serverId" placeholder="Server (Zone ID)" style="max-width:180px">
    </div>
    <div class="mlabel">2️⃣ PILIH NOMINAL ${currentGame.currency.toUpperCase()}</div>
    <div class="nominals">
      ${currentGame.packages.map((p, i) => `<div class="nom" onclick="pickPaket(this,${i})"><div class="nd">${p.name}</div><div class="np">${rupiah(p.price)}</div></div>`).join("")}
    </div>
    <div class="mlabel">3️⃣ PILIH METODE PEMBAYARAN</div>
    <div class="pays">
      ${payments.map(p => `<div class="pay" onclick="pickPay(this,'${p}')">${p}</div>`).join("")}
    </div>
    <div class="msum"><span>Total Pembayaran</span><b id="mTotal">Rp0</b></div>
    <button class="mbuy" onclick="buy()">BELI SEKARANG 🛒</button>`;
  document.getElementById("overlay").classList.add("show");
}

function pickPaket(el, i) {
  document.querySelectorAll(".nom").forEach(x => x.classList.remove("sel"));
  el.classList.add("sel");
  selPaket = currentGame.packages[i];
  updateTotal();
}

function pickPay(el, name) {
  document.querySelectorAll(".pay").forEach(x => x.classList.remove("sel"));
  el.classList.add("sel");
  selPay = name;
}

function updateTotal() {
  document.getElementById("mTotal").textContent = selPaket ? rupiah(selPaket.price) : "Rp0";
}

function buy() {
  const uid = document.getElementById("userId").value.trim();
  const sid = document.getElementById("serverId").value.trim();
  if (!uid) return alert("⚠️ Masukkan User ID kamu dulu!");
  if (!selPaket) return alert("⚠️ Pilih nominal dulu!");
  if (!selPay) return alert("⚠️ Pilih metode pembayaran dulu!");

  const btn = document.querySelector(".mbuy");
  btn.disabled = true;
  btn.textContent = "⏳ Memproses...";

  fetch("{{ route('transaction.store') }}", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      "X-CSRF-TOKEN": "{{ csrf_token() }}",
      "Accept": "application/json"
    },
    body: JSON.stringify({
      package_id: selPaket.id,
      user_game_id: uid,
      server_id: sid,
      payment_method: selPay
    })
  })
  .then(async res => {
    const data = await res.json();
    if (res.ok && data.success) {
      window.location.href = data.redirect;
    } else {
      alert("❌ " + (data.message || "Gagal membuat pesanan. Coba lagi!"));
      btn.disabled = false;
      btn.textContent = "BELI SEKARANG 🛒";
    }
  })
  .catch(() => {
    alert("❌ Terjadi kesalahan. Coba lagi!");
    btn.disabled = false;
    btn.textContent = "BELI SEKARANG 🛒";
  });
}

function closeModal() {
  document.getElementById("overlay").classList.remove("show");
}

document.getElementById("overlay").addEventListener("click", e => {
  if (e.target.id === "overlay") closeModal();
});
</script>

</body>
</html>