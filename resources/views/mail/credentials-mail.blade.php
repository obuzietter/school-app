<!DOCTYPE html>
<html>
<head>
    <title>Your Login Credentials</title>
</head>
<body>
    <p>Dear {{ $data['name'] }},</p>

    <p>Your login credentials are as follows:</p>
    <ul>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
        <li><strong>Password:</strong> {{ $data['password'] }}</li>
    </ul>

    <p>Please use these credentials to log in to your account. We recommend changing your password after the first login for security purposes.</p>

    <p>Best regards,</p>
    <p>The Admin Team</p>
</body>
</html>
