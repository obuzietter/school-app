<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COMMUNITY</title>
    @include('head-links')
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/community.css">
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
                                <h1>HOME / <span class="text-warning">COMMUNITY</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- LEARNERS SECTION --}}

        <section class="d-flex justify-content-center align-items-center flex-wrap" id="learners"
            style="min-height: 100dvh;">
            <div class="row mt-5">
                <h1 class="text-warning">Learners' Community</h1>
            </div>
            <div class="container-fluid mt-5  px-5">

                <div class="d-flex flex-wrap-reverse">
                    <div class="col d-flex justify-content-center align-items-center" style="min-width: 300px;">
                        <picture class="bg-dark fade-in" style="border-radius: 100%;">
                            <source
                                srcset="https://img.freepik.com/free-vector/people-cooperating-make-puzzle_23-2148077316.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid"
                                type="image/svg+xml">
                            <img src="" class="img-fluid img-thumbnail" alt="..."
                                style="border: none; padding:0; height:200px; width:200px; border-radius: 100%; margin: 1.2rem 0 1.2rem 1.2rem; ">
                        </picture>
                    </div>
                    <div class="col d-flex flex-column justify-content-center align-items-start mt-3"
                        style="min-width: 300px;">
                        <h1 class="text-warning">
                            Connect & Collaborate
                        </h1>
                        <p class="lh-lg">
                            Join a vibrant community of learners eager to grow and support one another. Share your journey, exchange ideas, and collaborate on projects with fellow students who are just as passionate about learning as you are. Together, we’re building a network that thrives on knowledge and encouragement.
                        </p>
                    </div>
                </div>


            </div>
            <div class="container-fluid mt-5 px-5">

                <div class="row">
                    <div class="col d-flex flex-column justify-content-center align-items-start mt-3"
                        style="min-width: 300px;">
                        <h1 class="text-warning">
                            Events & Workshops
                        </h1>

                        <p class="lh-lg">
                            Expand your skills and gain real-world experience through our events and webinars. From coding challenges to guest lectures, these interactive sessions provide hands-on learning and opportunities to connect with industry professionals.
                        </p>
                    </div>

                    <div class="col d-flex justify-content-center align-items-center" style="min-width: 300px;">

                        <picture class="bg-dark fade-in" style="border-radius: 100%;">
                            <source
                                srcset="https://img.freepik.com/free-vector/workplace-culture-abstract-concept-vector-illustration-shared-values-belief-systems-attitude-work-company-team-corporate-culture-high-performance-employee-health-abstract-metaphor_335657-4191.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid"
                                type="image/svg+xml">
                            <img src="" class="img-fluid img-thumbnail" alt="..."
                                style="border: none; padding:0; height:200px; width:200px; border-radius: 100%; margin: 1.2rem 1.2rem 1.2rem 0; ">
                        </picture>
                    </div>


                </div>
            </div>

        </section>
        {{-- ALUMNI SECTION --}}
       @include('alumni.alumni_carousel')
        
        
    </main>
    @include('footer')
    @include('bootstrap-scripts')

</body>

</html>
