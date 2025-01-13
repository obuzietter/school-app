<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABOUT US</title>
    @include('head-links')
    <link rel="stylesheet" href="/css/about.css">
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
                                <h1>HOME / <span class="text-warning">ABOUT</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- foundation story --}}
        <section>
            <div class="container-fluid px-md-5">
                <div class="row">
                    <h1 class="text-center my-5 text-warning">Foundation Story</h1>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center mt-3" style="min-width: 300px;">
                        <p class="px-2 lh-lg">
                            Founded in 2023, our institute began with a simple goal: to make quality web development
                            education accessible to aspiring tech enthusiasts in our community. Recognizing the demand
                            for digital skills in today’s job market, we established our first web development course,
                            blending practical skills with industry-relevant knowledge. With a dedicated team of
                            instructors and a passion for innovation, we strive to empower students to thrive in the
                            evolving tech landscape.
                        </p>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center" style="min-width: 300px;">

                        <picture class="fade-in">
                            <source
                                srcset="https://img.freepik.com/premium-photo/premium-photo-render-aesthetic-arc-gate-ring-light-background-scenes_1033579-198092.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid-rr-similar"
                                type="image/svg+xml">
                            <img src="" class="img-fluid img-thumbnail" alt="..."
                                style="border: none; box-shadow: rgb(33,37,41) -30px 30px 3.2px; padding:0 ">
                        </picture>
                    </div>

                </div>
            </div>

        </section>
        {{-- mission vision section --}}
        <section class="d-flex justify-content-center align-items-center flex-wrap"
            style="min-height: 100dvh; background: url('/aAnimated-Shape.svg')">

            <div class="container-fluid mt-5  px-5">

                <div class="d-flex flex-wrap-reverse">
                    <div class="col d-flex justify-content-center align-items-center" style="min-width: 300px;">
                        <picture class="bg-dark fade-in" style="border-radius: 100%;">
                            <source
                                srcset="https://img.freepik.com/free-vector/happy-corporate-man-done-his-job-as-vison-mission-celebrating-leadership-success-career-progress-concept-flat-illustration_1150-37407.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid"
                                type="image/svg+xml">
                            <img src="" class="img-fluid img-thumbnail" alt="..."
                                style="border: none; padding:0; height:200px; width:200px; border-radius: 100%; margin: 1.2rem 0 1.2rem 1.2rem; ">
                        </picture>
                    </div>
                    <div class="col d-flex flex-column justify-content-center align-items-start mt-3"
                        style="min-width: 300px;">
                        <h1 class="text-warning">
                            Our Mission
                        </h1>
                        <p class="lh-lg">
                            To provide accessible, high-quality education in technology that equips learners with the
                            skills, creativity, and confidence needed to succeed in a digital world.
                        </p>
                    </div>
                </div>


            </div>
            <div class="container-fluid mt-5 px-5">

                <div class="row">
                    <div class="col d-flex flex-column justify-content-center align-items-start mt-3"
                        style="min-width: 300px;">
                        <h1 class="text-warning">
                            Our Vision
                        </h1>

                        <p class="lh-lg">
                            To become a leading center for technology education, expanding our impact through diverse,
                            innovative programs that inspire lifelong learning and foster future-ready talent.
                        </p>
                    </div>

                    <div class="col d-flex justify-content-center align-items-center" style="min-width: 300px;">

                        <picture class="bg-dark fade-in" style="border-radius: 100%;">
                            <source
                                srcset="https://img.freepik.com/premium-vector/vector-someone-using-binoculars-with-simple-minimalist-flat-design-style_995281-40588.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid"
                                type="image/svg+xml">
                            <img src="" class="img-fluid img-thumbnail" alt="..."
                                style="border: none; padding:0; height:200px; width:200px; border-radius: 100%; margin: 1.2rem 1.2rem 1.2rem 0; ">
                        </picture>
                    </div>


                </div>
            </div>

        </section>
        {{-- team section --}}
        <section class="mt-5">
            <div class="row mb-5">
                <h1 class="text-warning text-center">
                    Our Team
                </h1>
            </div>
            <div class="row">
                <div class="card-group justify-content-center">
                    <div class="card mx-3 text-center fade-in"
                        style="max-width: 18rem;border: none; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <img src="https://img.freepik.com/premium-photo/portrait-black-african-man-standing-with-arm-crossed-black-people-concept_1025753-140852.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid"
                            class="card-img-top mx-auto mt-3" alt="Hollywood Sign on The Hill"
                            style="height: 150px; width:150px; border-radius:100%; object-fit:cover;" />
                        <div class="card-body">
                            <h3 class="card-title">Victor Ombeba</h3>
                            <h6>~ CO-FOUNDER ~</h6>
                            <p class="card-text">
                                "Inspiring growth and change begins with empowering others to realize their full
                                potential."
                            </p>

                        </div>
                    </div>
                    <div class="card mx-3 text-center fade-in"
                        style="max-width: 18rem; border: none; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <img src="https://img.freepik.com/free-photo/young-handsome-man-posing_23-2148884333.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid"
                            class="card-img-top mx-auto mt-3" alt="Hollywood Sign on The Hill"
                            style="height: 150px; width:150px; border-radius:100%; object-fit:cover;" />
                        <div class="card-body">
                            <h3 class="card-title">Calvince Obuya</h3>
                            <h6>~ CO-FOUNDER ~</h6>
                            <p class="card-text">
                                "The foundation of success lies in dedication, resilience, and a commitment to lifelong
                                learning."
                            </p>

                        </div>
                    </div>


                </div>
            </div>
        </section>
        {{-- get in touch section --}}
        <section class="my-5">
            <div class="row justify-content-center">
                <div class="col mt-5 bg-dark text-white py-5 px-3"
                    style="min-width: 300px; max-width: 75%;; border-radius:20px">
                    <h1>Get in Touch</h1>
                    <p>Have questions about our programs or want to learn more about how Palmate can help
                        you build a career in tech? Our team is ready to assist with any inquiries. Feel free to reach
                        out via the contact form below, give us a call, or send us an email. We’ll get back to you
                        as soon as possible!</p>
                    @include('inquiry.inquiry-form')
                </div>
            </div>

        </section>


    </main>
    @include('footer')
    @include('bootstrap-scripts')
</body>

</html>
