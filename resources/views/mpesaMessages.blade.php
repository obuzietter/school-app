<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M-Pesa Messages</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">M-Pesa Messages</h1>

        <!-- Flash Messages -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif --}}

        @if (session('error'))
            <div class="alert alert-danger">
                {!! session('error') !!} <!-- This will render the <br> line breaks -->
            </div>
        @endif


        <!-- Firebase Messages -->
        <div class="firebase-messages mb-4" style="max-height: 50vh; overflow-y: scroll;">
            <h2>Firebase Messages</h2>
            @if ($error)
                <div class="alert alert-danger text-center">{{ $error }}</div>
            @else
                <table class="table table-bordered table-striped" style="background-color: orange">
                    <thead>
                        <tr class="table-warning">
                            <th>#</th>
                            <th>Address</th>
                            <th>Body</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($messages as $key => $message)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $message['address'] }}</td>
                                <td>{{ $message['body'] }}</td>
                                <td>{{ \Carbon\Carbon::createFromTimestampMs($message['date'])->toDateTimeString() }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No messages found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            @endif
        </div>

        <!-- Action Buttons -->
        <form action="{{ route('messages.store') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-database" viewBox="0 0 16 16">
                    <path
                        d="M4.318 2.687C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4c0-.374.356-.875 1.318-1.313M13 5.698V7c0 .374-.356.875-1.318 1.313C10.766 8.729 9.464 9 8 9s-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777A5 5 0 0 0 13 5.698M14 4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13zm-1 4.698V10c0 .374-.356.875-1.318 1.313C10.766 11.729 9.464 12 8 12s-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777A5 5 0 0 0 13 8.698m0 3V13c0 .374-.356.875-1.318 1.313C10.766 14.729 9.464 15 8 15s-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13s3.022-.289 4.096-.777c.324-.147.633-.323.904-.525" />
                </svg>
                Store Messages in Database
            </button>
        </form>

        <form action="{{ route('messages.delete') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-fire" viewBox="0 0 16 16">
                    <path
                        d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15" />
                </svg>
                Delete Messages from Firebase
            </button>
        </form>

        <!-- Database Messages -->
        <div class="db-messages mt-4" style="height: 50vh; overflow-y: scroll;">
            <h2>Database Messages</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="table-success">
                        <th>#</th>
                        <th>#Voucher</th>
                        <th>Amount</th>
                        <th>Description</th>
                        <th>Date</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($db_messages as $db_message)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $db_message->transaction_code }}</td>
                            {{-- <td>{{ $db_message->amount }}</td> --}}
                            <td>{{ number_format($db_message->amount, 2) }}</td>
                            <td>{{ $db_message->description }}</td>
                            <td>{{ $db_message->date }}</td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No messages found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
