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
                            <option value="highschool" {{ old('education') == 'highschool' ? 'selected' : '' }}>High
                                School</option>
                            <option value="diploma" {{ old('education') == 'diploma' ? 'selected' : '' }}>Diploma
                            </option>
                            <option value="bachelor" {{ old('education') == 'bachelor' ? 'selected' : '' }}>Bachelor's
                                Degree</option>
                            <option value="master" {{ old('education') == 'master' ? 'selected' : '' }}>Master's Degree
                            </option>
                            <option value="doctorate" {{ old('education') == 'doctorate' ? 'selected' : '' }}>Doctorate
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
                            <option value="march" {{ old('preferred_intake') == 'march' ? 'selected' : '' }}>March
                                Intake</option>
                            <option value="june" {{ old('preferred_intake') == 'june' ? 'selected' : '' }}>June
                                Intake</option>
                            <option value="september" {{ old('preferred_intake') == 'september' ? 'selected' : '' }}>
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
                        <option value="friends" {{ old('referral') == 'friends' ? 'selected' : '' }}>Friends</option>
                        <option value="social_media" {{ old('referral') == 'social_media' ? 'selected' : '' }}>Social
                            Media</option>
                        <option value="website" {{ old('referral') == 'website' ? 'selected' : '' }}>Website</option>
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
                            <li>Select <strong>Buy Goods and Services</strong>.</li>
                            <li>Enter the <strong>Till Number</strong>: <span class="fw-bold">3174638 </span></li>
                            <li>Enter the <strong>Store Number</strong>: <span class="fw-bold">9551994</span><small>
                                    (If
                                    requested)</small></li>
                            <li>Enter the amount <strong>(KES 5, 000/=)</strong>.</li>
                            <li>Enter your M-Pesa PIN and confirm the transaction.</li>
                            <li>Wait for the confirmation SMS from M-Pesa.</li>
                            <li>Copy and paste the Transaction code below <small>(It should Be 10 Characters
                                    Long)</small></li>
                            <div class="col-md-6">
                                <label for="confirmationMessage" class="form-label">Transaction Code</label>
                                <input type="text" id="confirmationMessage" name="confirmation_message"
                                    value="{{ old('confirmation_message') }}" class="form-control"
                                    placeholder="Paste the M-Pesa confirmation code here">
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
