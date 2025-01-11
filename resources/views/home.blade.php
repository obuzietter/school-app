<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>

    @include('head-links')

    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/animations.css">

</head>

<body style="">

    @include('header')

    <main>
        {{-- Hero section --}}
        <section class="d-flex" style="min-height: 80vh; background-image:url(/images/bg.jpeg); background-size:cover">
            <div class="container-fluid"
                style="display: grid; place-items:center;flex: 1; background: linear-gradient(to right, rgb(0, 0, 0), rgba(0, 0, 0, 0.774), rgba(0, 0, 0))">
                <div class="container-fluid px-5">
                    <div class="row">
                        <div class="col text-white" style="min-width: 300px">
                            <div class="row">
                                <h1>BUILDING YOUR SKILLS
                                    FOR THE DIGITAL WORLD</h1>
                                <p class="">We inspire creativity and foster a culture of innovation, turning your
                                    passion for
                                    technology into a career that changes the world.</p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="/about" class="text-reset">
                                        <button type="button" class="btn btn-outline-warning w-100">
                                            About Us
                                        </button>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="/admissions" class="text-reset">
                                        <button type="button" class="btn btn-warning w-100">
                                            View Courses
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col text-warning py-3 d-flex justify-content-center align-items-center"
                            style="min-width: 300px">
                            {{-- <h1 class="cursor typewriter-animation">
                                LEARN . CREATE . INNOVATE
                            </h1> --}}
                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- Intro section --}}
        <section>
            <div class="container-fluid px-5">
                <div class="row">
                    <h1 class="text-center my-5 text-warning">Your Gateway to the Future of Tech</h1>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center" style="min-width: 300px;">

                        <picture class="fade-in">
                            <source
                                srcset="https://img.freepik.com/free-vector/flat-safer-internet-day-background_52683-154501.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_siglip"
                                type="image/svg+xml">
                            <img src="" class="img-fluid img-thumbnail" alt="..." style="border: none; ">
                        </picture>
                    </div>
                    <div class="col d-flex align-items-center mt-3" style="min-width: 300px;">
                        <p class="lh-lg px-lg-5 px-2">
                            Welcome to Palmate Academy. we are committed to providing high-quality, practical training
                            to help you build essential skills in technology. Currently, we offer an in-depth Web
                            Development course, guiding students through both front-end and back-end technologies to
                            prepare them for dynamic careers in the tech industry. With experienced instructors and
                            hands-on learning, we're here to equip you with the knowledge and tools needed to thrive in
                            today’s digital world.
                        </p>
                    </div>
                </div>
            </div>

        </section>

        <section>
            <div class="container-fluid px-5">
                <div class="row">
                    <h1 class="text-center my-5 text-warning">Why Choose Palmate?</h1>
                </div>
                <div class="row">
                    <div class="col d-flex
                    justify-content-center align-items-center"
                        style="min-width: 300px;">
                        <p class="text-center lh-lg">
                            We are a community of learners, creators, and innovators who are passionate about technology
                            and its potential to change the world.
                            <br>
                            We have:
                        </p>
                    </div>

                </div>
                <div class="row">
                    <div class="col d-flex
                    justify-content-center align-items-center"
                        style="min-width: 300px;">
                        <ul style=" list-style-type: circle!important;">
                            <li>Expert Instructors: Learn from industry professionals with real-world experience</li>
                            <li>Hands-On Learning: Gain practical skills through comprehensive projects and labs</li>

                            <li>Community Support: Join a network of peers, mentors, and alumni who share your passion
                                for tech</li>

                        </ul>
                    </div>
                </div>
            </div>

        </section>
        {{-- Courses section --}}
        @include('courses.all_courses')




        {{-- Get in touch section --}}
        <section class="mt-5" id="get-in-touch">
            <div class="container-fluid py-5 bg-dark text-white">
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center fade-in" style="min-width: 300px">
                        <img src="https://img.freepik.com/premium-photo/creative-technology-communication-concept_23-2148945731.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid"
                            class="img-fluid img-thumbnail" alt="..." style="max-width: 100%;">
                    </div>

                    <div class="col" style="min-width: 300px">
                        <h1>Get in Touch</h1>
                        <p>Have questions about our programs or want to learn more about how Palmate can help
                            you
                            build a career in tech? Our team is ready to assist with any inquiries. Feel free to reach
                            out via the contact form below, give us a call, or send us an email. We’ll get back to you
                            as soon as possible!</p>
                        @include('inquiry.inquiry-form')
                    </div>
                </div>

        </section>
        {{-- Alumni Section --}}
        <section>
            <div class="container-fluid">
                <div class="row">
                    <h1 class="text-center my-5 text-warning">Our Alumni</h1>
                </div>
                <div class="row">
                    <!-- Carousel wrapper -->
                    <div id="testimonialCarousel" class="carousel slide text-center carousel-dark"
                        data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="rounded-circle shadow-1-strong mb-4"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
                                    style="width: 150px;" />
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-8">
                                        <h5 class="mb-3">Maria Kate</h5>
                                        <p>Photographer</p>
                                        <p class="text-muted">
                                            <i class="fas fa-quote-left pe-2"></i>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                            fugit consequatur laudantium velit magnam error. Consectetur distinctio
                                            fugit
                                            doloremque.
                                        </p>
                                    </div>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="far fa-star fa-sm"></i></li>
                                </ul>
                            </div>
                            <div class="carousel-item">
                                <img class="rounded-circle shadow-1-strong mb-4"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
                                    style="width: 150px;" />
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-8">
                                        <h5 class="mb-3">John Doe</h5>
                                        <p>Web Developer</p>
                                        <p class="text-muted">
                                            <i class="fas fa-quote-left pe-2"></i>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                            nesciunt sint eligendi reprehenderit reiciendis.
                                        </p>
                                    </div>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="far fa-star fa-sm"></i></li>
                                </ul>
                            </div>
                            <div class="carousel-item">
                                <img class="rounded-circle shadow-1-strong mb-4"
                                    src="https://img.freepik.com/free-photo/person-holding-speech-official-event_23-2151054239.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid-rr-similar"
                                    alt="avatar" style="width: 150px; height: 150px; object-fit:cover" />
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-8">
                                        <h5 class="mb-3">Joe Biden</h5>
                                        <p>UX Designer</p>
                                        <p class="text-muted">
                                            <i class="fas fa-quote-left pe-2"></i>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                            fugit consequatur laudantium velit magnam error. Consectetur distinctio
                                            fugit
                                            doloremque.
                                        </p>
                                    </div>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="far fa-star fa-sm"></i></li>
                                </ul>
                            </div>
                            <div class="carousel-item">
                                <img class="rounded-circle shadow-1-strong mb-4"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar"
                                    style="width: 150px;" />
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-8">
                                        <h5 class="mb-3">Anna Deynah</h5>
                                        <p>UX Designer</p>
                                        <p class="text-muted">
                                            <i class="fas fa-quote-left pe-2"></i>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                            fugit consequatur laudantium velit magnam error. Consectetur distinctio
                                            fugit
                                            doloremque.
                                        </p>
                                    </div>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="far fa-star fa-sm"></i></li>
                                </ul>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon text-body" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon text-body" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- Carousel wrapper -->
                </div>

            </div>
        </section>

    </main>
    <!-- Footer -->
    @include('footer')
    <!-- Footer -->



    {{-- <script src="/js/custom-js/course-swal.js"></script> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
</body>
{{-- bootstrap js links --}}
@include('bootstrap-scripts')

</html>
