    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>ENROLL</title>
        @include('head-links')

        <style>
            h2 {
                font-weight: bold;
            }

            label {
                font-weight: bold;
                color: var(--primary-color);
            }

            input,
            select,
            textarea {
                outline: 2px solid var(--primary-color);
            }
        </style>
    </head>

    <body>
        @include('header')
        <div class="container my-5">
            <h2 class="text-center mt-5">
                <hr>
            </h2>
            <form method="POST" action="{{ route('applications.store') }}" class="mt-5">
                @csrf
                <h2 class="text-center mt-5">
                    Application Form
                </h2>
                @include('enroll.success')
                @include('enroll.errors')

                <!-- Part 1: Personal Information -->
                <fieldset class="border p-3 mb-4">
                    <legend class="w-auto px-2">1. Personal Information</legend>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" id="firstName" name="first_name" class="form-control"
                                placeholder="Enter your first name" required value="{{ old('first_name') }}">

                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" id="lastName" name="last_name" class="form-control"
                                placeholder="Enter your last name" required value="{{ old('last_name') }}">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" id="dob" name="date_of_birth" class="form-control" required
                                value="{{ old('date_of_birth') }}">

                        </div>
                        <div class="col-md-6">
                            <label for="gender" class="form-label">Gender</label>
                            <select id="gender" name="gender" class="form-select" required>
                                <option value="" disabled {{ old('gender') ? '' : 'selected' }}>Select your gender
                                </option>
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Enter your email" required value="{{ old('email') }}">

                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-control"
                                placeholder="Enter your phone number" required value="{{ old('phone') }}">

                        </div>
                    </div>
                </fieldset>

                <!-- Part 2: Academic Information -->
                <fieldset class="border p-3 mb-4">
                    <legend class="w-auto px-2">2. Academic Information</legend>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="education" class="form-label">Highest Level of Education</label>
                            <select id="education" name="education" class="form-select" required>
                                <option value="" disabled {{ old('education') ? '' : 'selected' }}>Select your
                                    education level</option>
                                <option value="highschool" {{ old('education') == 'highschool' ? 'selected' : '' }}>
                                    High
                                    School</option>
                                <option value="diploma" {{ old('education') == 'diploma' ? 'selected' : '' }}>Diploma
                                </option>
                                <option value="bachelor" {{ old('education') == 'bachelor' ? 'selected' : '' }}>
                                    Bachelor's
                                    Degree</option>
                                <option value="master" {{ old('education') == 'master' ? 'selected' : '' }}>Master's
                                    Degree
                                </option>
                                <option value="doctorate" {{ old('education') == 'doctorate' ? 'selected' : '' }}>
                                    Doctorate
                                </option>
                            </select>

                        </div>
                        <div class="col-md-6">
                            <label for="course" class="form-label">What Course Are You Applying For?</label>
                            <select id="course" name="course" class="form-select" required>
                                <option value="" disabled {{ old('course') ? '' : 'selected' }}>Select Course
                                </option>
                                @forelse ($courses as $course)
                                    <option value="{{ $course->id }}"
                                        {{ old('course') == $course->id ? 'selected' : '' }}>
                                        {{ $course->title }}
                                    </option>
                                @empty
                                    <option value="">No courses available</option>
                                @endforelse
                            </select>

                        </div>

                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="preferredIntake" class="form-label">Preferred Intake</label>
                            <select id="preferredIntake" name="preferred_intake" class="form-select" required>
                                <option value="" disabled {{ old('preferred_intake') ? '' : 'selected' }}>Which
                                    intake would you like to apply for?</option>
                                <option value="march" {{ old('preferred_intake') == 'march' ? 'selected' : '' }}>
                                    March
                                    Intake</option>
                                <option value="june" {{ old('preferred_intake') == 'june' ? 'selected' : '' }}>June
                                    Intake</option>
                                <option value="september"
                                    {{ old('preferred_intake') == 'september' ? 'selected' : '' }}>
                                    September Intake</option>
                            </select>

                        </div>
                    </div>
                </fieldset>

                <!-- Part 3: Other Information -->
                <fieldset class="border p-3 mb-4">
                    <legend class="w-auto px-2">3. Other Information</legend>
                    <div class="mb-3">
                        <label for="referral" class="form-label">How did you hear about us?</label>
                        <select id="referral" name="referral" class="form-select" required>
                            <option value="" disabled {{ old('referral') ? '' : 'selected' }}>Select an option
                            </option>
                            <option value="friends" {{ old('referral') == 'friends' ? 'selected' : '' }}>Friends
                            </option>
                            <option value="social_media" {{ old('referral') == 'social_media' ? 'selected' : '' }}>
                                Social
                                Media</option>
                            <option value="website" {{ old('referral') == 'website' ? 'selected' : '' }}>Website
                            </option>
                            <option value="advertisement" {{ old('referral') == 'advertisement' ? 'selected' : '' }}>
                                Advertisement</option>
                            <option value="other" {{ old('referral') == 'other' ? 'selected' : '' }}>Other</option>
                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="referralCode" class="form-label">Referral Code</label>
                        <input type="text" id="referralCode" name="referral_code" class="form-control"
                            placeholder="Enter referral code (if any)" maxlength="5"
                            value="{{ old('referral_code', request('referral_code')) }}" {{-- Optional: Make readonly if pre-filled  --}}
                            {{ request('referral_code') ? 'readonly' : '' }} />

                    </div>

                    <div class="mb-3">
                        <label for="additionalInfo" class="form-label">Additional Information</label>
                        <textarea id="additionalInfo" name="additional_info" class="form-control" rows="3"
                            placeholder="Provide any additional details">{{ old('additional_info') }}</textarea>

                    </div>
                </fieldset>


                <!-- Part 4: Payment Instructions -->
                <fieldset class="border p-4 mb-4 rounded shadow-sm">
                    <legend class="w-auto px-3 text-success fw-bold">4. Fee Payment Instructions</legend>
                    <div class="card shadow-sm">
                        <div class="card-header bg-success text-white">
                            <h5 class="card-title mb-0">M-Pesa Payment Instructions</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Follow these simple steps to make a payment using M-Pesa Paybill:</p>
                            <ol class="ps-3">
                                <li>Enter your M-Pesa number below.</li>
                                <li>Enter the amount you wish to pay.</li>
                                <li>Click <strong>INITIATE STK PUSH</strong>.</li>
                                <li>Authorize the payment on your phone.</li>
                                <li>Enter your M-Pesa PIN when prompted.</li>
                                <li>Wait for the confirmation SMS from M-Pesa.</li>
                                <li>If the Transaction Code is not auto-filled, copy and paste it below
                                    <small class="text-muted">(10 characters long).</small>
                                </li>
                            </ol>

                            <!-- Payment Input Fields -->
                            <div class="row g-3 align-items-center mt-3">
                                <div class="col-md-6">
                                    <label for="mpesa_number" class="form-label fw-semibold">M-Pesa Number</label>
                                    <input type="text" id="mpesa_number" name="mpesa_number" class="form-control"
                                        placeholder="Enter M-Pesa number">
                                </div>
                                <div class="col-md-6">
                                    <label for="amount" class="form-label fw-semibold">Amount (KES)</label>
                                    <input type="number" id="amount" name="amount" class="form-control"
                                        placeholder="Enter Amount">
                                </div>
                            </div>

                            <!-- STK Push Button -->
                            <div class="mt-4">
                                <button class="btn btn-primary px-4 py-2 fw-bold" id="stk-btn">
                                    <i class="bi bi-phone"></i> INITIATE STK PUSH
                                </button>
                            </div>

                            <!-- Payment Status Alert -->
                            <div id="paymentStatus" class="alert mt-3 d-none"></div>

                            <!-- Transaction Code -->
                            <div class="mt-4">
                                <label for="confirmationMessage" class="form-label fw-semibold">Transaction
                                    Code</label>
                                <input type="text" id="confirmationMessage" name="confirmation_message"
                                    value="{{ old('confirmation_message') }}" class="form-control"
                                    placeholder="M-Pesa confirmation code">
                            </div>

                            <!-- Contact Support -->
                            <p class="mt-4 text-muted">
                                For assistance, please contact our support team at
                                <strong><a href="tel:+254111521101" class="text-success text-decoration-none">+254 111
                                        521 101</a></strong>.
                            </p>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="border p-3 mb-4">
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-success" id="submitButton">Submit
                            Application</button>
                    </div>
                </fieldset>
            </form>
        </div>


        <script>
            // document.getElementById("submitButton").disabled = true;
            // document.getElementById("confirmationMessage").disabled = true;

            document.getElementById("stk-btn").addEventListener("click", function(e) {
                e.preventDefault();
                console.log('clicked');

                let mpesa_number = document.getElementById("mpesa_number").value;
                let amount = document.getElementById("amount").value;
                let statusDiv = document.getElementById("paymentStatus");

                statusDiv.classList.remove("alert-success", "alert-danger");
                statusDiv.classList.add("alert-warning");
                statusDiv.innerHTML = "⏳ Processing payment...";
                statusDiv.style.display = "block";

                fetch("{{ route('stkpush') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({
                            mpesa_number,
                            amount
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        statusDiv.classList.remove("d-none");
                        if (data.status === "ERROR") {
                            statusDiv.classList.remove("alert-warning");
                            statusDiv.classList.add("alert-danger");
                            statusDiv.innerHTML = "❌ " + data.message;
                            return;
                        }

                        let invoiceId = data.invoice_id;
                        checkPaymentStatus(invoiceId);
                    })
                    .catch(error => {
                        console.error("Error:", error);
                        statusDiv.classList.add("alert-danger");
                        statusDiv.innerHTML = "❌ An error occurred!";
                    });
            });

            function checkPaymentStatus(invoiceId) {
                let statusDiv = document.getElementById("paymentStatus");
                let lastStatus = "";
                let maxChecks = 30; // Stop after 30 tries (about 30 seconds)
                let attempts = 0;

                let checkInterval = setInterval(() => {
                    fetch("{{ route('checkPaymentStatus') }}", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                            },
                            body: JSON.stringify({
                                invoice_id: invoiceId
                            })
                        })
                        .then(response => response.json())
                        .then(data => {

                            statusDiv.classList.remove("alert-success", "alert-danger", "alert-warning",
                                "alert-primary");

                            if (data.status == "COMPLETE") {
                                clearInterval(checkInterval);
                                statusDiv.classList.add("alert-success");
                                statusDiv.innerHTML = "✅ Payment Successful!";
                                document.getElementById("confirmationMessage").value = data.mpesa_reference;
                                // document.getElementById("submitButton").disabled = false;
                                // document.getElementById("confirmationMessage").disabled = false;
                            } else if (data.status == "PENDING") {
                                statusDiv.classList.add("alert-warning");
                                statusDiv.innerHTML = "⏳ " + data.message;
                            } else if (data.status == "PROCESSING") {
                                statusDiv.classList.add("alert-primary");
                                statusDiv.innerHTML = "🔷 " + data.message;
                            } else if (data.status == "FAILED" || data.status == "CANCELED") {
                                clearInterval(checkInterval);
                                statusDiv.classList.add("alert-danger");
                                statusDiv.innerHTML = "❌ " + data.message + " (" + data.failed_reason + ")";
                            } else {
                                statusDiv.classList.add("alert-warning");
                                statusDiv.innerHTML = "⏳ " + data.message;
                            }

                            console.log(data.message + " (" + data.status + ")");


                            attempts++;
                            if (attempts >= maxChecks) {
                                clearInterval(checkInterval); // Stop checking after max attempts
                                statusDiv.classList.add("alert-danger");
                                statusDiv.innerHTML = "❌ Payment prompt timed out!";
                            }
                        })
                        .catch(error => {
                            console.error("Error:", error);
                            clearInterval(checkInterval);
                            statusDiv.classList.add("alert-danger");
                            statusDiv.innerHTML = "❌ Failed to check payment status!";
                        });
                }, 2000); // Poll every 2 seconds
            }
        </script>



    </body>

    </html>
