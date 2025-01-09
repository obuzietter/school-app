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
        <section class="mt-5" id="all-courses">
            <div class="row">
                <h1 class="text-warning text-center">All Courses</h1>
            </div>
            <div class="row d-flex justify-content-center">
                @forelse ($courses as $course)
                    <div class="card m-2 fade-in" style="width: 20rem;">

                        <img class="card-img-top"
                            src="storage/{{$course->image_url}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <span class="badge badge-danger bg-danger">{{$course->badge}}</span>

                            <h5 class="card-title">{{$course->title}}</h5>
                            <ul>
                                                             
                                
                                    @php
                                        $highlights = is_string($course->highlights) ? json_decode($course->highlights, true) : $course->highlights;
                                    @endphp
                                    @if ($highlights && is_array($highlights))
                                        
                                            @foreach ($highlights as $highlight)
                                                <li>{{ is_array($highlight) ? implode(', ', $highlight) : $highlight }}</li>
                                            @endforeach
                                        
                                    @else
                                        <span>No data available</span>
                                    @endif
                                

                            </ul>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-warning w-100" data-bs-toggle="modal"
                                        data-bs-target="#{{$course->id}}">Learn More</button>
                                </div>
                                <div class="col">
                                    {{-- <button type="button" class="btn btn-outline-success w-100" data-toggle="modal" data-target="#exampleModalCenter">Enroll Now</button> --}}
                                    <button type="button" class="btn btn-outline-warning w-100">
                                        <a href="/application-form" style="color: black; display: inline-block;">Enroll Now</a>

                                    </button>

                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="{{$course->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header d-flex justify-content-between">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Course Details</h5>
                                        {{-- <button type="button" class="close bg-danger text-white"
                                            data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button> --}}
                                    </div>
                                    <div class="modal-body">
                                        <h5>Prerequisites</h5>
                                        <p>
                                           {{$course->prerequisites}}
                                        </p>
                                        <h5>Course Description</h5>
                                        <p>
                                            {{$course->course_description}} 
                                        </p>
                                        <h5>Learning Schedule</h5>
                                        <ul>
                                            @php
                                                $schedule = is_string($course->learning_schedule) ? json_decode($course->learning_schedule, true) : $course->learning_schedule;
                                            @endphp
                                            @if ($schedule && is_array($schedule))
                                                
                                                    @foreach ($schedule as $item)
                                                        <li>{{ is_array($item) ? implode(', ', $item) : $item }}</li>
                                                    @endforeach
                                                
                                            @else
                                                <span>No data available</span>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning"
                                            data-bs-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @empty
                        <div class="alert alert-warning" role="alert">
                            No courses available
                        </div>
                    @endforelse


            </div>

        </section>
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
                                We have only two intakes in a year that is January Intake and June Intake
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
