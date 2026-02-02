<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akses Dibatalkan Sementara — Pembayaran Tertunda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,400&family=DM+Mono:wght@400;500&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* ─── tokens ─── */
        :root {
            --clr-bg: #f4f5f7;
            --clr-surface: #ffffff;
            --clr-border: #e3e5e9;
            --clr-border-lg: #d1d5db;
            --clr-text: #111827;
            --clr-text-sm: #6b7280;
            --clr-text-xs: #9ca3af;
            --clr-accent: #1a1a2e;
            --clr-accent-hover: #16162a;
            --clr-status-bg: #fef3c7;
            --clr-status-dot: #f59e0b;
            --clr-status-txt: #92400e;
            --clr-cta-from: #1a1a2e;
            --clr-cta-to: #2d2d4e;
            --clr-ghost-bg: #f4f5f7;
            --clr-ghost-hover: #eaebee;
            --radius-card: 14px;
            --radius-btn: 8px;
            --radius-badge: 20px;
            --shadow-card: 0 1px 3px rgba(0, 0, 0, .06), 0 8px 32px rgba(0, 0, 0, .07);
            --shadow-card-hover: 0 2px 8px rgba(0, 0, 0, .08), 0 16px 48px rgba(0, 0, 0, .10);
            --font-sans: 'DM Sans', system-ui, -apple-system, sans-serif;
            --font-mono: 'DM Mono', 'SF Mono', monospace;
        }

        /* ─── reset & base ─── */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html,
        body {
            min-height: 100%;
            margin: 0;
        }

        body {
            font-family: var(--font-sans);
            background-color: var(--clr-bg);
            color: var(--clr-text);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            line-height: 1.5;
            /* very subtle noise texture */
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.018'/%3E%3C/svg%3E");
        }

        /* ─── layout shell ─── */
        .page-shell {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px 20px;
        }

        .card-wrap {
            width: 100%;
            max-width: 920px;
            background: var(--clr-surface);
            border-radius: var(--radius-card);
            box-shadow: var(--shadow-card);
            border: 1px solid var(--clr-border);
            overflow: hidden;
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            transition: box-shadow .25s ease;
        }

        .card-wrap:hover {
            box-shadow: var(--shadow-card-hover);
        }

        /* ─── left panel ─── */
        .panel-left {
            padding: 48px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            background: linear-gradient(160deg, #ffffff 0%, #fafbfc 100%);
            border-right: 1px solid var(--clr-border);
        }

        /* subtle top-left geometric accent */
        .panel-left::before {
            content: '';
            position: absolute;
            top: -60px;
            left: -60px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(245, 158, 11, .08) 0%, transparent 70%);
            pointer-events: none;
        }

        /* ─── brand row ─── */
        .brand-row {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 32px;
            position: relative;
            z-index: 1;
        }

        .brand-icon {
            width: 38px;
            height: 38px;
            border-radius: 9px;
            background: var(--clr-text);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .brand-icon svg {
            width: 20px;
            height: 20px;
        }

        .brand-name {
            font-size: 15px;
            font-weight: 600;
            letter-spacing: -.2px;
            color: var(--clr-text);
        }

        .brand-sub {
            font-size: 12px;
            color: var(--clr-text-xs);
            margin-top: 1px;
        }

        /* ─── status badge ─── */
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: var(--clr-status-bg);
            color: var(--clr-status-txt);
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .3px;
            text-transform: uppercase;
            padding: 5px 11px;
            border-radius: var(--radius-badge);
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
            width: fit-content;
        }

        .status-badge .dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--clr-status-dot);
            /* gentle pulse */
            animation: pulse 2.4s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: .4;
            }
        }

        /* ─── headline block ─── */
        .headline-block {
            position: relative;
            z-index: 1;
        }

        .headline-block h1 {
            font-size: 24px;
            font-weight: 600;
            line-height: 1.3;
            letter-spacing: -.3px;
            color: var(--clr-text);
            margin: 0 0 12px;
        }

        .headline-block p {
            font-size: 14px;
            color: var(--clr-text-sm);
            line-height: 1.65;
            margin: 0 0 8px;
        }

        .headline-block p strong {
            color: var(--clr-text);
            font-weight: 500;
        }

        /* ─── CTA row ─── */
        .cta-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 28px;
            position: relative;
            z-index: 1;
        }

        .btn-pay {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: linear-gradient(135deg, var(--clr-cta-from), var(--clr-cta-to));
            color: #fff;
            font-family: var(--font-sans);
            font-size: 13.5px;
            font-weight: 500;
            padding: 10px 22px;
            border-radius: var(--radius-btn);
            border: none;
            text-decoration: none;
            cursor: pointer;
            letter-spacing: -.1px;
            transition: transform .15s ease, box-shadow .2s ease, filter .2s ease;
            box-shadow: 0 2px 10px rgba(26, 26, 46, .25);
        }

        .btn-pay:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 16px rgba(26, 26, 46, .35);
            filter: brightness(1.08);
            color: #fff;
            text-decoration: none;
        }

        .btn-pay:active {
            transform: translateY(0);
        }

        .btn-pay svg {
            width: 14px;
            height: 14px;
            flex-shrink: 0;
        }

        .btn-contact {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--clr-ghost-bg);
            color: var(--clr-text);
            font-family: var(--font-sans);
            font-size: 13.5px;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: var(--radius-btn);
            border: 1px solid var(--clr-border);
            text-decoration: none;
            cursor: pointer;
            letter-spacing: -.1px;
            transition: background .18s ease, border-color .18s ease;
        }

        .btn-contact:hover {
            background: var(--clr-ghost-hover);
            border-color: var(--clr-border-lg);
            color: var(--clr-text);
            text-decoration: none;
        }

        .btn-contact svg {
            width: 13px;
            height: 13px;
            flex-shrink: 0;
            color: var(--clr-text-sm);
        }

        /* ─── right panel (invoice) ─── */
        .panel-right {
            padding: 48px 36px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #fafbfc;
        }

        .panel-label {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .6px;
            text-transform: uppercase;
            color: var(--clr-text-xs);
            margin-bottom: 20px;
        }

        /* ─── invoice card ─── */
        .invoice-card {
            background: var(--clr-surface);
            border: 1px solid var(--clr-border);
            border-radius: 10px;
            overflow: hidden;
        }

        .invoice-header {
            padding: 16px 18px;
            border-bottom: 1px solid var(--clr-border);
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .invoice-header-left .inv-label {
            font-size: 11px;
            color: var(--clr-text-xs);
            text-transform: uppercase;
            letter-spacing: .5px;
            margin-bottom: 3px;
        }

        .invoice-header-left .inv-id {
            font-family: var(--font-mono);
            font-size: 13px;
            font-weight: 500;
            color: var(--clr-text);
            letter-spacing: -.2px;
        }

        .invoice-header-right {
            text-align: right;
        }

        .invoice-header-right .inv-label {
            font-size: 11px;
            color: var(--clr-text-xs);
            text-transform: uppercase;
            letter-spacing: .5px;
            margin-bottom: 3px;
        }

        .invoice-header-right .inv-amount {
            font-size: 22px;
            font-weight: 600;
            color: var(--clr-text);
            letter-spacing: -.5px;
        }

        /* ─── invoice rows ─── */
        .inv-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 11px 18px;
            border-bottom: 1px solid var(--clr-border);
        }

        .inv-row:last-child {
            border-bottom: none;
        }

        .inv-row-label {
            font-size: 12.5px;
            color: var(--clr-text-sm);
        }

        .inv-row-value {
            font-size: 12.5px;
            font-weight: 500;
            color: var(--clr-text);
        }

        .inv-row-value.overdue {
            color: #b91c1c;
            font-weight: 600;
        }

        /* ─── policy note ─── */
        .policy-note {
            margin-top: 24px;
            padding: 14px 16px;
            background: rgba(239, 68, 68, .04);
            border: 1px solid rgba(239, 68, 68, .14);
            border-radius: 8px;
        }

        .policy-note p {
            font-size: 12px;
            color: var(--clr-text-sm);
            line-height: 1.6;
            margin: 0;
        }

        .policy-note p strong {
            color: var(--clr-text);
            font-weight: 500;
        }

        /* ─── footer note ─── */
        .footer-note {
            margin-top: 20px;
            font-size: 11.5px;
            color: var(--clr-text-xs);
            line-height: 1.55;
        }

        /* ─── responsive ─── */
        @media (max-width: 767px) {
            .page-shell {
                padding: 24px 16px;
                align-items: flex-start;
            }

            .card-wrap {
                grid-template-columns: 1fr;
            }

            .panel-left {
                border-right: none;
                border-bottom: 1px solid var(--clr-border);
                padding: 32px 24px;
            }

            .panel-left::before {
                display: none;
            }

            .panel-right {
                padding: 28px 24px;
            }

            .headline-block h1 {
                font-size: 20px;
            }

            .cta-row {
                flex-direction: column;
            }

            .btn-pay,
            .btn-contact {
                justify-content: center;
                width: 100%;
            }
        }

        /* ─── focus-visible ─── */
        a:focus-visible,
        button:focus-visible {
            outline: 2px solid var(--clr-status-dot);
            outline-offset: 2px;
        }
    </style>
</head>

<body>

    <main class="page-shell" role="main">
        <div class="card-wrap" aria-labelledby="suspension-title">

            <!-- ─── Left: Context + CTA ─── -->
            <section class="panel-left" aria-label="Informasi Penangguhan">

                <div class="brand-row">
                    <div class="brand-icon" aria-hidden="true">
                        <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2" y="2" width="16" height="16" rx="4" stroke="#ffffff"
                                stroke-width="1.5" fill="none" />
                            <path d="M6 10.5L8.5 13L14 7" stroke="#ffffff" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div>
                        <div class="brand-name">{{ $domain ?? request()->getHost() }}</div>
                        <div class="brand-sub">Layanan Terkelola</div>
                    </div>
                </div>

                <div class="status-badge" role="status" aria-live="polite">
                    <span class="dot" aria-hidden="true"></span>
                    Akses Dibatalkan — Tindakan Diperlukan
                </div>

                <div class="headline-block">
                    <h1 id="suspension-title">Layanan Anda sedang<br>ditangguhkan sementara</h1>
                    <p>
                        Situs <strong>{{ $domain ?? request()->getHost() }}</strong> saat ini tidak dapat diakses karena
                        terdapat tagihan yang belum diselesaikan. Ini merupakan tindakan administratif otomatis — bukan
                        masalah teknis.
                    </p>
                    <p>
                        Selesaikan pembayaran untuk memulihkan akses penuh. Jika Anda sudah melakukan pembayaran, kirim
                        bukti pembayaran dan kami akan mengaktifkan kembali dalam waktu 24 jam kerja.
                    </p>
                </div>

                <div class="cta-row">
                    <a href="{{ $pay_url ?? '#' }}" class="btn-pay"
                        aria-label="Bayar tagihan sekarang untuk memulihkan akses">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <rect x="1" y="3" width="14" height="10" rx="2" stroke="currentColor"
                                stroke-width="1.4" fill="none" />
                            <path d="M1 6.5h14" stroke="currentColor" stroke-width="1.3" />
                        </svg>
                        Bayar Sekarang
                    </a>
                    <a href="{{ isset($contact_phone) ? 'https://wa.me/' . preg_replace('/\\D+/', '', $contact_phone) . '?text=' . urlencode('Halo, saya ingin konfirmasi pembayaran untuk ' . ($domain ?? request()->getHost())) : '#' }}"
                        class="btn-contact" target="_blank" rel="noopener noreferrer"
                        aria-label="Hubungi tim penagihan via WhatsApp">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M20.52 3.48A11.95 11.95 0 0012 0C5.373 0 .002 5.373 0 12c0 2.118.554 4.093 1.606 5.854L0 24l6.44-1.7A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12 0-3.21-1.255-6.11-3.48-8.52zM12 21.5c-1.846 0-3.66-.5-5.2-1.437l-.37-.211-3.83 1.01 1.017-3.73-.22-.38A9.51 9.51 0 012.5 12 9.5 9.5 0 1112 21.5z"
                                fill="currentColor" />
                            <path
                                d="M17.2 14.03c-.28-.14-1.66-.82-1.92-.92-.26-.1-.44-.14-.62.14-.18.28-.72.92-.88 1.11-.16.18-.32.21-.59.07-.27-.15-1.13-.42-2.15-1.33-.8-.71-1.34-1.58-1.5-1.85-.16-.27-.02-.42.12-.56.12-.12.26-.31.39-.46.13-.15.17-.26.26-.43.09-.18.05-.33-.02-.46-.07-.13-.62-1.5-.85-2.03-.22-.53-.45-.46-.62-.47l-.53-.01c-.18 0-.46.07-.7.33-.24.26-.95.93-.95 2.27 0 1.34.97 2.64 1.1 2.82.13.18 1.9 3 4.6 4.2 1.99.9 2.82.97 3.05.86.23-.11 1.4-.56 1.6-1.1.2-.53.2-.99.14-1.1-.06-.11-.25-.18-.53-.32z"
                                fill="#fff" />
                        </svg>
                        Hubungi via WhatsApp
                    </a>
                </div>
            </section>

            <!-- ─── Right: Invoice summary ─── -->
            <aside class="panel-right" aria-label="Ringkasan Tagihan">

                <p class="panel-label">Ringkasan Tagihan</p>

                @php
                    // Perhitungan tagihan dinamis: hosting bulanan + utang jasa
                    $today = \Carbon\Carbon::now();
                    $asOf = isset($as_of_date) ? \Carbon\Carbon::parse($as_of_date) : $today;
                    // default start: 1 Agustus yang paling dekat sebelum/atau sama dengan asOf
                    $startCandidate = \Carbon\Carbon::create($asOf->year, 8, 1);
                    if ($startCandidate->gt($asOf)) {
                        $start = $startCandidate->subYear();
                    } else {
                        $start = $startCandidate;
                    }
                    // jika ada input hosting_start_date, gunakan itu (mis. '2025-08-01')
                    if (isset($hosting_start_date)) {
                        try {
                            $start = \Carbon\Carbon::parse($hosting_start_date)->startOfMonth();
                        } catch (\Exception $e) {
                            // fallback ke computed start
                        }
                    }
                    $months =
                        $start
                            ->copy()
                            ->startOfMonth()
                            ->diffInMonths($asOf->copy()->startOfMonth()) + 1; // inklusif bulan awal
                    $monthly = isset($hosting_monthly) ? (int) $hosting_monthly : 200000; // default 200K
                    $hosting_subtotal = $monthly * max(0, $months);
                    $service_debt = isset($service_debt) ? (int) $service_debt : 500000; // default 500K utang jasa
                    $total_due = $hosting_subtotal + $service_debt;
                    function rp_format($n)
                    {
                        return 'Rp ' . number_format($n, 0, ',', '.');
                    }
                @endphp

                <div class="invoice-card" role="region" aria-label="Detail faktur">
                    <div class="invoice-header">
                        <div class="invoice-header-left">
                            <div class="inv-label">Faktur</div>
                            <div class="inv-id">{{ $invoice ?? '—' }}</div>
                        </div>
                        <div class="invoice-header-right">
                            <div class="inv-label">Jumlah</div>
                            <div class="inv-amount">{{ $amount ?? rp_format($total_due) }}</div>
                        </div>
                    </div>

                    <div class="inv-row">
                        <span class="inv-row-label">Periode Hosting</span>
                        <span class="inv-row-value">{{ $start->format('M Y') }} — {{ $asOf->format('M Y') }}
                            ({{ $months }} bulan)</span>
                    </div>

                    <div class="inv-row">
                        <span class="inv-row-label">Hosting ({{ rp_format($monthly) }} / bulan)</span>
                        <span class="inv-row-value">{{ rp_format($hosting_subtotal) }}</span>
                    </div>

                    <div class="inv-row">
                        <span class="inv-row-label">Jasa</span>
                        <span class="inv-row-value">{{ rp_format($service_debt) }}</span>
                    </div>

                    <div class="inv-row">
                        <span class="inv-row-label">Status</span>
                        <span class="inv-row-value overdue">Belum Dibayar</span>
                    </div>

                    <div class="inv-row">
                        <span class="inv-row-label">Total Terhutang</span>
                        <span class="inv-row-value" style="font-weight:700">{{ rp_format($total_due) }}</span>
                    </div>

                    <div class="inv-row">
                        <span class="inv-row-label">Jatuh Tempo</span>
                        <span class="inv-row-value">{{ $due_date ?? 'Segera' }}</span>
                    </div>

                    <div class="inv-row">
                        <span class="inv-row-label">Layanan</span>
                        <span
                            class="inv-row-value">{{ $service_name ?? 'Hosting Bulanan dan Layanan Tambahan' }}</span>
                    </div>

                    <div class="inv-row">
                        <span class="inv-row-label">Klien</span>
                        <span class="inv-row-value">{{ $clientName ?? '—' }}</span>
                    </div>
                </div>

                <div class="policy-note" role="note">
                    <p>
                        <strong>Kebijakan Retensi:</strong> Jika tidak ada tanggapan dalam <strong>30 hari</strong>
                        sejak
                        tanggal jatuh tempo, layanan dan data terkait dapat ditangguhkan atau dihapus secara permanen
                        sesuai
                        dengan ketentuan layanan yang berlaku.
                    </p>
                </div>

                <p class="footer-note">
                    Butuh perpanjangan waktu atau ada kendala pembayaran? Hubungi tim penagihan kami di
                    <a href="mailto:{{ $contact_email ?? 'raghib.smp@' . ($domain ?? 'gmail.com') }}"
                        style="color: var(--clr-text-sm); text-decoration: underline; text-underline-offset: 2px;">{{ $contact_email ?? 'raghib.smp@' . ($domain ?? 'gmail.com') }}</a>
                    —&nbsp;kami siap membantu menyelesaikannya.
                </p>
            </aside>

        </div>
    </main>

    <script>
        // Keyboard accessibility: allow Enter to activate link-style CTAs
        document.querySelectorAll('a.btn-pay, a.btn-contact').forEach(function(el) {
            el.addEventListener('keyup', function(e) {
                if (e.key === 'Enter') el.click();
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
