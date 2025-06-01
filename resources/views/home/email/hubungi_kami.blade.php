<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pesan Masuk Baru</title>
    <style>
        body {
            background-color: #f4f4f7;
            font-family: 'Segoe UI', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .email-wrapper {
            max-width: 640px;
            margin: 0 auto;
            padding: 40px 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .email-header {
            text-align: center;
            border-bottom: 1px solid #e1e1e1;
            padding-bottom: 20px;
        }

        .email-header h2 {
            margin: 0;
            color: #0d6efd;
        }

        .email-body {
            padding: 20px 0;
        }

        .email-body p {
            margin: 12px 0;
        }

        .email-body strong {
            display: inline-block;
            width: 80px;
        }

        .message-box {
            background-color: #f1f3f5;
            border-left: 4px solid #0d6efd;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            white-space: pre-line;
        }

        .footer {
            font-size: 13px;
            color: #999;
            text-align: center;
            margin-top: 40px;
        }

        .button {
            display: inline-block;
            margin-top: 30px;
            background-color: #0d6efd;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: bold;
        }

        a.button {
            text-decoration: none;
            color: #ffffff
        }

        .button:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>

<body>
    <div class="email-wrapper">
        <div class="email-header">
            <h2>📩 Pesan Baru Masuk</h2>
            <p>Anda menerima pesan melalui formulir kontak.</p>
        </div>

        <div class="email-body">
            <p><strong>Nama:</strong> {{ $contactData['name'] }}</p>
            <p><strong>Email:</strong> {{ $contactData['email'] }}</p>
            <p><strong>Subjek:</strong> {{ $contactData['subject'] }}</p>

            <div class="message-box">
                {{ $contactData['message'] }}
            </div>

            <a href="mailto:{{ $contactData['email'] }}" class="button">Balas Pengirim</a>
        </div>

        <div class="footer">
            &copy; {{ date('Y') }} PT. JAS PRO LAND & DEVELOPMENT – Semua hak dilindungi. <br>
            Email ini dikirim otomatis oleh sistem.
        </div>
    </div>
</body>

</html>
