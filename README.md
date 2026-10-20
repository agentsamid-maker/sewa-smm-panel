# Sewa SMM Panel & Child Panel — fom.co.id

**Punya panel SMM sendiri: brand, domain, dan harga kamu yang atur.** Server, katalog layanan, dan pemrosesan order diurus [fom.co.id](https://fom.co.id). Kamu tinggal jualan.

🇬🇧 [English](README.en.md) · 💰 [Lihat harga](https://fom.co.id/#harga) · 🚀 [Daftar gratis](https://fom.co.id)

## Pilih paket

| Paket | Cocok untuk | Yang didapat |
|---|---|---|
| **API-Only** (gratis) | Sudah punya panel sendiri | fom.co.id sebagai provider lewat API standar panel SMM |
| **Childpanel** | Mau mulai jualan tanpa ngoding | Toko lengkap di subdomain `namamu.fom.co.id` atau domain sendiri |
| **Panel Elite** | Reseller besar | Semua fitur Childpanel, plus bisa menambah provider milikmu sendiri |

Harga terbaru selalu ada di [fom.co.id/#harga](https://fom.co.id/#harga). Tidak ada biaya tersembunyi.

## Kenapa sewa panel di fom.co.id

- **Live dalam hitungan menit.** Daftar, pasang domain, langsung jualan.
- **White-label penuh.** Domain, logo, warna, dan teks halaman milikmu. Pelanggan tidak melihat fom.co.id.
- **Harga jual kamu yang tentukan.** Atur markup per layanan, selisihnya jadi untungmu.
- **Order otomatis 24 jam.** Dari pembayaran sampai order diproses, tanpa input manual.
- **Refund otomatis.** Order gagal atau partial kembali sendiri ke saldo pelanggan.
- **Tanpa ngoding.** Semua lewat dashboard.

## Fitur panel

**Untuk pelangganmu:** order tanpa akun, mass order, drip-feed, tombol refill & cancel, API key per pelanggan, riwayat order & deposit, sistem tiket, tampilan ramah HP.

**Untuk kamu sebagai pemilik panel:** import layanan dari katalog dalam beberapa klik, sinkron harga dan status otomatis, markup fleksibel, laporan profit, kategori layanan yang bisa diatur, kirim ulang order, cancel & refund.

**Branding & SEO:** domain sendiri, SSL otomatis, logo & warna kustom, copywriting bisa diedit, blog bawaan, sitemap & robots otomatis, meta tag kustom.

**Keamanan:** proteksi DDoS dan CDN, backup harian, log audit, saldo pelanggan dan saldo panel tercatat terpisah.

## Cara mulai

1. Daftar gratis di [fom.co.id](https://fom.co.id).
2. Pilih paket Childpanel atau Panel Elite dari dashboard.
3. Pasang subdomain atau domainmu, atur logo, warna, dan markup.
4. Bagikan link panelmu ke pelanggan.

Mau lihat dulu? Coba [demo panel](https://fom.co.id/#demo).

## Sudah punya panel? Pakai API-Only

Endpoint: `https://fom.co.id/api/v1` (POST, form-urlencoded). Semua respons berupa JSON.

| action | Parameter | Contoh respons |
|---|---|---|
| `services` | `key` | `[{"service":1,"name":"...","type":"Default","rate":"1500.00","currency":"IDR","min":100,"max":10000,"dripfeed":false,"refill":true,"cancel":false,"category":"Instagram Followers","desc":"..."}]` |
| `balance` | `key` | `{"balance":100000,"currency":"IDR"}` |
| `add` | `key`, `service`, `link`, `quantity` (opsional: `comments`, `runs`, `interval`) | `{"order":80000001}` |
| `status` | `key`, `order` (atau beberapa ID dipisah koma) | `{"charge":"1500","currency":"IDR","start_count":120,"status":"In progress","remains":500}` |
| `refill` | `key`, `order` | `{"refill":80000001}` |
| `cancel` | `key`, `order` | `{"order":80000001,"cancel":1}` |

`rate` adalah harga per 1000. Status yang mungkin: `Pending`, `Processing`, `In progress`, `Partial`, `Completed`, `Canceled`, `Failed` (saldo kurang). Kalau ada masalah, respons berisi `{"error":"..."}`.

> Jangan pernah menaruh API key di kode yang dipublikasikan. Simpan di environment variable (`FOM_API_KEY`).

## Contoh kode

- PHP: [`examples/fom.php`](examples/fom.php)
- Python: [`examples/fom.py`](examples/fom.py)
- Node.js: [`examples/fom.js`](examples/fom.js)
- cURL:

```bash
curl -X POST https://fom.co.id/api/v1 \
  -d key=$FOM_API_KEY -d action=balance
```

## Pasang di panel lain

Di menu provider panel kamu, pilih tipe API standar, isi URL `https://fom.co.id/api/v1` dan API key kamu, lalu import layanan. Untuk layanan komentar, set tipe layanan ke **Custom Comments**.

## Bantuan

Kontak dan tiket bantuan: [fom.co.id/contact](https://fom.co.id/contact).

