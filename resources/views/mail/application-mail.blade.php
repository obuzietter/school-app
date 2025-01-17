<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Course Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa; font-family: Arial, sans-serif;">

<div class="container mt-4" style="background-color: #ffffff; border: 1px solid #dee2e6; border-radius: 8px; padding: 20px; max-width: 600px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <h3 class="text-center text-primary">New Course Application</h3>
    <hr>
    <table class="table table-borderless">
        <tbody>
            <tr>
                <th style="width: 40%; text-align: left;">First Name:</th>
                <td>{{ $data['first_name'] }}</td>
            </tr>
            <tr>
                <th style="text-align: left;">Last Name:</th>
                <td>{{ $data['last_name'] }}</td>
            </tr>
            <tr>
                <th style="text-align: left;">Email:</th>
                <td>{{ $data['email'] }}</td>
            </tr>
            <tr>
                <th style="text-align: left;">Phone:</th>
                <td>{{ $data['phone'] }}</td>
            </tr>
            <tr>
                <th style="text-align: left;">Course:</th>
                <td>{{ $data['course'] }}</td>
            </tr>
            <tr>
                <th style="text-align: left;">M-Pesa Code:</th>
                <td>{{ $data['confirmation_message'] }}</td>
            </tr>
            <tr>
                <th style="text-align: left;">Preferred Intake:</th>
                <td>{{ $data['preferred_intake'] }}</td>
            </tr>
        </tbody>
    </table>
    <hr>
    <p class="text-muted text-center" style="font-size: 0.9em;">
        Thank you for applying for a course with us! For any inquiries, contact our support team.
    </p>
</div>

</body>
</html>
