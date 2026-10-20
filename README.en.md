# Rent an SMM Panel & Child Panel — fom.co.id

**Run your own SMM panel: your brand, your domain, your prices.** [fom.co.id](https://fom.co.id/en) runs the servers, service catalog and order processing. You just sell.

🇮🇩 [Bahasa Indonesia](README.md) · 💰 [Pricing](https://fom.co.id/en#harga) · 🚀 [Sign up free](https://fom.co.id/en)

## Choose a plan

| Plan | Best for | What you get |
|---|---|---|
| **API-Only** (free) | You already run a panel | fom.co.id as a provider through the standard SMM panel API |
| **Childpanel** | Start selling without coding | A complete store on `yourname.fom.co.id` or your own domain |
| **Panel Elite** | Large resellers | Everything in Childpanel, plus your own providers |

Current prices are always on [fom.co.id/en#harga](https://fom.co.id/en#harga). No hidden fees.

## Why rent a panel from fom.co.id

- **Live in minutes.** Sign up, connect your domain, start selling.
- **Fully white-label.** Your domain, logo, colors and page copy. Your customers never see fom.co.id.
- **You set the price.** Choose a markup per service and keep the difference as profit.
- **Automatic orders, 24/7.** From payment to processing, with no manual input.
- **Automatic refunds.** Failed or partial orders go back to the customer's balance on their own.
- **No coding.** Everything is managed from the dashboard.

## Panel features

**For your customers:** guest checkout, mass order, drip-feed, refill & cancel buttons, a personal API key, order & deposit history, support tickets, mobile-friendly dashboard.

**For you as the panel owner:** import services from the catalog in a few clicks, automatic price and status sync, flexible markup, profit reports, custom service categories, order resend, cancel & refund.

**Branding & SEO:** custom domain, automatic SSL, custom logo & colors, editable copy, built-in blog, automatic sitemap & robots, custom meta tags.

**Security:** DDoS protection and CDN, daily backups, audit log, separate customer and panel balances.

## Getting started

1. Sign up free at [fom.co.id](https://fom.co.id/en).
2. Pick the Childpanel or Panel Elite plan in your dashboard.
3. Connect a subdomain or your own domain, then set your logo, colors and markup.
4. Share your panel link with your customers.

Want a look first? Try the [panel demo](https://fom.co.id/en#demo).

## Already have a panel? Use API-Only

Endpoint: `https://fom.co.id/api/v1` (POST, form-urlencoded). All responses are JSON.

| action | Parameters | Example response |
|---|---|---|
| `services` | `key` | `[{"service":1,"name":"...","type":"Default","rate":"1500.00","currency":"IDR","min":100,"max":10000,"dripfeed":false,"refill":true,"cancel":false,"category":"Instagram Followers","desc":"..."}]` |
| `balance` | `key` | `{"balance":100000,"currency":"IDR"}` |
| `add` | `key`, `service`, `link`, `quantity` (optional: `comments`, `runs`, `interval`) | `{"order":80000001}` |
| `status` | `key`, `order` (or several comma-separated IDs) | `{"charge":"1500","currency":"IDR","start_count":120,"status":"In progress","remains":500}` |
| `refill` | `key`, `order` | `{"refill":80000001}` |
| `cancel` | `key`, `order` | `{"order":80000001,"cancel":1}` |

`rate` is the price per 1000. Possible statuses: `Pending`, `Processing`, `In progress`, `Partial`, `Completed`, `Canceled`, `Failed` (insufficient balance). Errors come back as `{"error":"..."}`.

> Never put your API key in published code. Keep it in an environment variable (`FOM_API_KEY`).

## Code examples

- PHP: [`examples/fom.php`](examples/fom.php)
- Python: [`examples/fom.py`](examples/fom.py)
- Node.js: [`examples/fom.js`](examples/fom.js)
- cURL:

```bash
curl -X POST https://fom.co.id/api/v1 \
  -d key=$FOM_API_KEY -d action=balance
```

## Add fom.co.id to another panel

In your panel's provider menu, choose the standard API type, enter `https://fom.co.id/api/v1` and your API key, then import services. For comment services, set the service type to **Custom Comments**.

## Support

Contact and support tickets: [fom.co.id/contact](https://fom.co.id/contact).
