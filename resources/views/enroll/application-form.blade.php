<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                            placeholder="Enter your first name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" id="lastName" name="last_name" class="form-control"
                            placeholder="Enter your last name" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" id="dob" name="date_of_birth" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="gender" class="form-label">Gender</label>
                        <select id="gender" name="gender" class="form-select" required>
                            <option value="" disabled selected>Select your gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control"
                            placeholder="Enter your email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control"
                            placeholder="Enter your phone number" required>
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
                            <option value="" disabled selected>Select your education level</option>
                            <option value="highschool">High School</option>
                            <option value="diploma">Diploma</option>
                            <option value="bachelor">Bachelor's Degree</option>
                            <option value="master">Master's Degree</option>
                            <option value="doctorate">Doctorate</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="course" class="form-label">What Course Are You Applying For?</label>
                        <select id="course" name="course" class="form-select" required>
                            <option value="" disabled selected>Select Course</option>

                            @forelse ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->title }}</option>
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
                            <option value="" disabled selected>Which intake would you like to apply for?</option>
                            <option value="march">March Intake</option>
                            <option value="june">June Intake</option>
                            <option value="september">September Intake</option>
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
                        <option value="" disabled selected>Select an option</option>
                        <option value="friends">Friends</option>
                        <option value="social_media">Social Media</option>
                        <option value="website">Website</option>
                        <option value="advertisement">Advertisement</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="referralCode" class="form-label">Referral Code</label>
                    <input type="text" id="referralCode" name="referral_code" class="form-control"
                        placeholder="Enter referral code (if any)" maxlength="5">
                </div>
                <div class="mb-3">
                    <label for="additionalInfo" class="form-label">Additional Information</label>
                    <textarea id="additionalInfo" name="additional_info" class="form-control" rows="3"
                        placeholder="Provide any additional details"></textarea>
                </div>
            </fieldset>


            <!-- Part 4: Payment Instructions -->
            <fieldset class="border p-3 mb-4">
                <legend class="w-auto px-2">4. Fee Payment Instructions</legend>
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">M-Pesa Payment Instructions</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Follow these simple steps to make a payment using M-Pesa Paybill:</p>
                        <ol>
                            <li>Go to the M-Pesa menu on your phone.</li>
                            <li>Select <strong>Lipa na M-Pesa</strong>.</li>
                            <li>Select <strong>Paybill</strong>.</li>
                            <li>Enter the <strong>Business Number</strong>: <span class="fw-bold">400200</span></li>
                            <li>Enter the <strong>Account Number</strong>: <span class="fw-bold">0111521101</span></li>
                            <li>Enter the amount (KES 2, 500/=).</li>
                            <li>Enter your M-Pesa PIN and confirm the transaction.</li>
                            <li>Wait for the confirmation SMS from M-Pesa.</li>
                            <li>Copy and paste the SMS down below</li>
                            <div class="col-md-6">
                                <label for="confirmationMessage" class="form-label">Confirmation Message</label>
                                <input type="text" id="confirmationMessage" name="confirmation_message"
                                    class="form-control" placeholder="Paste the M-Pesa confirmation code here">
                            </div>
                        </ol>
                        <p class="mt-3">For assistance, please contact our support team at <strong>+254 111 521
                                101</strong>.
                        </p>
                    </div>
                </div>
            </fieldset>
            <fieldset class="border p-3 mb-4">
                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Submit
                        Application</button>
                </div>
            </fieldset>
        </form>
    </div>





</body>

</html>
