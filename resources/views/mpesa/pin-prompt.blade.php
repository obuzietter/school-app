<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIN Prompt</title>
    <!-- Include Bootstrap CSS -->
    @Include('head-links')
    <link rel="stylesheet" href="/css/theme.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card p-4 shadow-sm" style="max-width: 400px; width: 100%;">
        <h1 class="text-center mb-4">Enter Your PIN</h1>
        
        <!-- Error Message -->
        @if (session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif
        
        <!-- PIN Form -->
        <form method="get" action="/mpesa-messages" id="pin-form">
            @csrf
            <div class="mb-3">
                <label for="pin" class="form-label">PIN:</label>
                <input type="password" name="pin" id="pin" class="form-control" required>
            </div>
            <div>
                <button type="submit" class="btn btn-primary w-100" style="background-color: var(--primary-color); outline: transparent; border: transparent;">Submit</button>
            </div>
        </form>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
