// Contoh pemakaian API fom.co.id (Node 18+). Jalankan: FOM_API_KEY=xxx node fom.js
const API_URL = 'https://fom.co.id/api/v1';

async function fom(action, params = {}) {
  const res = await fetch(API_URL, {
    method: 'POST',
    body: new URLSearchParams({ key: process.env.FOM_API_KEY, action, ...params }),
  });
  return res.json();
}

fom('balance').then(console.log);
// fom('add', { service: 1, link: 'https://instagram.com/username', quantity: 1000 }).then(console.log);
// fom('status', { order: 80000001 }).then(console.log);
