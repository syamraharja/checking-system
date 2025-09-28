<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $header ?? 'Financial Records' }} - Catatan Keuangan</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        :root {
            --financial-primary: #2563eb;
            --financial-secondary: #10b981;
            --financial-accent: #f59e0b;
            --financial-dark: #1e293b;
            --financial-light: #f8fafc;
        }
        
        body {
            background-color: var(--financial-light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--financial-primary) !important;
        }
        
        .financial-gradient {
            background: linear-gradient(135deg, var(--financial-primary) 0%, var(--financial-secondary) 100%);
        }
        
        .shadow-financial {
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.1);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <i class="bi bi-wallet2 me-2 fs-4"></i>
                Catatan Keuangan
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>