<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Can't Be Reached</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        .error-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .error-content {
            max-width: 600px;
            padding: 40px;
        }

        .error-icon {
            width: 80px;
            height: 80px;
            margin-bottom: 30px;
        }

        .error-icon svg {
            width: 100%;
            height: 100%;
            fill: #5f6368;
        }

        h1 {
            font-size: 32px;
            font-weight: 400;
            color: #202124;
            margin-bottom: 20px;
        }

        .error-message {
            font-size: 16px;
            color: #5f6368;
            margin-bottom: 20px;
        }

        .error-code {
            font-size: 14px;
            color: #5f6368;
            font-family: 'Courier New', monospace;
        }

        .btn-reload {
            background-color: #1a73e8;
            color: white;
            border: none;
            padding: 10px 24px;
            font-size: 14px;
            font-weight: 500;
            border-radius: 4px;
            margin-top: 30px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .btn-reload:hover {
            background-color: #1557b0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="error-container">
            <div class="error-content">
                <div class="error-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M12,12H14V17H12V12M12,10H14V11H12V10Z" />
                    </svg>
                </div>

                <h1>This site can't be reached</h1>

                <p class="error-message">
                    Check if there is a typo in <strong>{{ $domain ?? 'apps.panelbear.com' }}</strong>.
                </p>

                <p class="error-code">
                    DNS_PROBE_FINISHED_NXDOMAIN
                </p>

                <button class="btn btn-reload" onclick="location.reload()">
                    Reload
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
