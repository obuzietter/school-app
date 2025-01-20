<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Details</title>
    @include('head-links')
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <img src="{{ asset('storage/' . $course->image_url) }}" class="card-img-top" alt="Course Image" style="height: 300px; object-fit: cover;">
                    <div class="card-body">
                        <h1 class="card-title">{{ $course->title }}</h1>
                        <span class="badge badge-danger bg-danger">{{ $course->badge }}</span>
                        <h5>Course Description</h5>
                        <p>{{ $course->course_description }}</p>
                        <h5>Prerequisites</h5>
                        <p>{{ $course->prerequisites }}</p>

                        <h5>Course Highlights</h5>
                        @if (is_array($course->highlights))
                            <ul>
                                @foreach ($course->highlights as $item)
                                    <li>{{ $item['highlight'] }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>No highlights available.</p>
                        @endif



                        {{-- <h5>Learning Schedule</h5>
                        @php
                            $schedule = is_string($course->learning_schedule)
                                ? json_decode($course->learning_schedule, true)
                                : $course->learning_schedule;
                        @endphp
                        @if ($schedule && is_array($schedule))
                            <ul>
                                @foreach ($schedule as $item)
                                    <li>{{ is_array($item) ? implode(', ', $item) : $item }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>No schedule available.</p>
                        @endif --}}
                    </div>
                    <div class="card-footer">
                        <a href="/application-form" class="btn btn-warning">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
