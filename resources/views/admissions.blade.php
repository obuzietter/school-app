<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMISSIONS</title>
    @include('head-links')
    <link rel="stylesheet" href="/css/admissions.css">
    <link rel="stylesheet" href="/css/animations.css">
</head>

<body>
    @include('header')
    <main>

        {{-- hero section --}}
        <section class="d-flex" style="min-height: 50vh; background-image:url(/images/bg.jpeg); background-size:cover">
            <div class="container-fluid"
                style="display: grid; place-items:center;flex: 1; background: linear-gradient(to right, rgb(0, 0, 0), rgba(0, 0, 0, 0.774), rgba(0, 0, 0))">
                <div class="container-fluid px-10">
                    <div class="row">
                        <div class="col text-white" style="min-width: 300px">
                            <div class="row text-center">
                                <h1>HOME / <span class="text-warning">ADMISSIONS</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- how to apply --}}
        <section>
            <div class="container-fluid px-md-5">
                <div class="row">
                    <h1 class="text-center my-5 text-warning">How To Apply</h1>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center mt-3" style="min-width: 300px;">
                        <p class="px-2">
                            Go through the course cards below to identify your course of interest. Check the course requirements and prerequisites by clicking the details button at the bottom of the card. once you ascertain that it is the right course for you, go ahead and click the <span class="text-warning">Enroll Now</span> Button to proceed. You will be redirected to another page and be prompted to enter personal and payment details as well as the intake you would like to enroll for.
                        </p>
                    </div>


                </div>
            </div>

        </section>
        {{-- all courses --}}
       @include('courses.all_courses')
        {{-- application form --}}
        {{-- frequently asked questions --}}
        <section class="mt-5">
            <div class="row mb-5">
                <h1 class="text-warning text-center">Frequently Asked Questions (FAQs)</h1>
            </div>
            <div class="row justify-content-center mb-5 fade-in">
                <div class="accordion" id="accordionPanelsStayOpenExample" style="min-width: 300px; max-width:75%;">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-1" aria-expanded="true"
                                aria-controls="panelsStayOpen-1">
                                How many intakes do you have in a year?
                                
                            </button>
                        </h2>
                        <div id="panelsStayOpen-1" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                We currently have 3 intakes in a year, that is March, June and September.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed bg-dark text-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-2" aria-expanded="false"
                                aria-controls="panelsStayOpen-2">
                                What level of education do i need to attain to apply for the course?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-2" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                The courses we provide have are suitable for a large group of people including highschool undergraduates.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed bg-dark text-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-3" aria-expanded="false"
                                aria-controls="panelsStayOpen-3">
                                What are the payment terms?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-3" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                               Each course you apply for will require you to make the full payment before you can be provided with credentials to access your student portal.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed bg-dark text-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-4" aria-expanded="false"
                                aria-controls="panelsStayOpen-3">
                                What are the tuition fees and payment options?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-4" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                Tuition fees vary by program and course length. Payment of fees is through M-pesa only which you will be prompted to pay during enrollment for the course.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

    </main>

    @include('footer')
    @include('bootstrap-scripts')


</body>

</html>
