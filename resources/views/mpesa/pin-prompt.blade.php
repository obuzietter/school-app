{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIN Prompt</title>
</head>
<body>
    <h1>Enter Your PIN</h1>
    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
    <form method="get" action="/mpesa-messages" id="pin-form">
        @csrf
        <label for="pin">PIN:</label>
        <input type="password" name="pin" id="pin" required>
        <button type="submit">Submit</button>
    </form>
    
    
    
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIN Prompt</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Card styling */
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 400px;
            width: 100%;
        }

        /* Heading styling */
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Error message styling */
        .alert {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Form elements */
        label {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 8px;
            display: block;
        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 1.1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Responsive adjustments */
        @media (max-width: 600px) {
            .card {
                padding: 20px;
            }
            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Enter Your PIN</h1>
        
        <!-- Error Message -->
        @if (session('error'))
            <div class="alert">
                {{ session('error') }}
            </div>
        @endif
        
        <!-- PIN Form -->
        <form method="get" action="/mpesa-messages" id="pin-form">
            @csrf
            <div>
                <label for="pin">PIN:</label>
                <input type="password" name="pin" id="pin" required>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
