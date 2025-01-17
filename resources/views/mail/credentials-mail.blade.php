<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Login Credentials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa; font-family: Arial, sans-serif;">

<div class="container mt-4" style="background-color: #ffffff; border: 1px solid #dee2e6; border-radius: 8px; padding: 30px; max-width: 600px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <h3 class="text-center text-primary">Your Login Credentials</h3>
    <hr>
    <p>Dear <strong>{{ $data['name'] }}</strong>,</p>

    <p>Your login credentials are as follows:</p>
    <ul>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
        <li><strong>Password:</strong> {{ $data['password'] }}</li>
    </ul>

    <p>Please use these credentials to log in to your account. We recommend changing your password after the first login for security purposes.</p>

    <p>Best regards,</p>
    <p><strong>The Admin Team</strong></p>
    
    <hr>
    <p class="text-muted text-center" style="font-size: 0.9em;">
        If you did not request these credentials, please contact our support team immediately.
    </p>
</div>

</body>
</html>
