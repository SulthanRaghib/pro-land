<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih Telah Menghubungi Kami</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .email-container {
            max-width: 640px;
            margin: 40px auto;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        }

        .email-header {
            background-color: #0d6efd;
            color: #fff;
            padding: 30px 20px;
            text-align: center;
        }

        .email-header h1 {
            margin: 0;
            font-size: 24px;
        }

        .email-body {
            padding: 30px 20px;
        }

        .email-body h2 {
            font-size: 20px;
            margin-bottom: 10px;
            text-align: center;
            color: #0d6efd;
        }

        .email-body p {
            margin: 12px 0;
            line-height: 1.6;
        }

        .message-box {
            background-color: #f1f3f5;
            border-left: 4px solid #0d6efd;
            padding: 15px;
            border-radius: 4px;
            margin-top: 15px;
            white-space: pre-line;
        }

        .email-footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 14px;
        }

        .email-footer a {
            color: #fff;
            margin: 0 6px;
            text-decoration: none;
        }

        .email-footer a:hover {
            text-decoration: underline;
        }

        .social-icons {
            margin-top: 10px;
        }

        .divider {
            height: 1px;
            background-color: #ddd;
            margin: 30px 0;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <h1>Terima Kasih Telah Menghubungi Kami</h1>
            <p>Kami sangat menghargai waktu dan kepercayaan Anda</p>
        </div>

        <div class="email-body">
            <p>Halo <strong>{{ $contactData['name'] }}</strong>,</p>
            <p>Pesan Anda telah kami terima dan akan segera ditinjau oleh tim kami. Kami akan berusaha memberikan
                tanggapan secepatnya.</p>

            <div class="divider"></div>

            <h2>📋 Rincian Pesan Anda</h2>
            <p><strong>Nama:</strong> {{ $contactData['name'] }}</p>
            <p><strong>Email:</strong> {{ $contactData['email'] }}</p>
            <p><strong>Subjek:</strong> {{ $contactData['subject'] }}</p>
            <p><strong>Pesan:</strong></p>
            <div class="message-box">
                {{ $contactData['message'] }}
            </div>

            <div class="divider"></div>

            <p>Jika Anda memiliki pertanyaan lebih lanjut, silakan balas email ini atau hubungi kami di <a
                    href="mailto:prolandjas@gmail.com">prolandjas@gmail.com</a>.</p>
            <p>Salam hangat,<br><strong>Tim JAS PRO LAND</strong></p>
        </div>

        <div class="email-footer">
            <p>&copy; {{ date('Y') }} JAS PRO LAND & DEVELOPMENT. All rights reserved.</p>
            {{-- <div class="social-icons">
                <a href="https://www.facebook.com/JasProLand">Facebook</a> |
                <a href="https://www.instagram.com/jasproland/">Instagram</a> |
                <a href="https://www.linkedin.com/company/jasproland/">LinkedIn</a> |
                <a href="https://www.youtube.com/@jasproland">YouTube</a>
            </div> --}}
        </div>
    </div>
</body>

</html>
