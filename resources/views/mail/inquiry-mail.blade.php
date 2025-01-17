<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Inquiry Notification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f9f9f9;">

<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header text-center">
            <h1 class="text-primary">New Inquiry Received</h1>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <p><strong>Name:</strong> {{ $data['name'] }}</p>
                <p><strong>Email:</strong> {{ $data['email'] }}</p>
                <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
                <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
                <p><strong>Message:</strong></p>
                <p>{{ $data['message'] }}</p>
            </div>
        </div>
        <div class="card-footer text-center">
            <p class="text-muted" style="font-size: 0.9em;">
                Thank you for using our inquiry form. For further details, please visit 
                <a href="{{ url('/') }}" class="text-primary">our website</a>.
            </p>
        </div>
    </div>
</div>

</body>
</html>
