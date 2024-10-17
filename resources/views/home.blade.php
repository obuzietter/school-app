<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>

    @include('head-links')


</head>

<body style="">
    
        @include('header')
    
    <main>
        {{-- Hero section --}}
        <section class="d-flex" style="min-height: 80vh; background-image:url(/images/bg.jpeg); background-size:cover">
            <div class="container-fluid"
                style="display: grid; place-items:center;flex: 1; background: linear-gradient(to right, rgba(0, 0, 0, 0.734), rgba(128, 128, 128, 0.307), rgba(0, 0, 0, 0.773))">
                <div class="container-fluid px-10">
                    <div class="row">
                        <div class="col text-white" style="min-width: 300px">
                            <div class="row">
                                <h1>BUILDING YOUR SKILLS
                                    FOR THE DIGITAL WORLD</h1>
                                <p class="">We inspire creativity and foster a culture of innovation, turning your passion for
                                    technology into a career that changes the world.</p>
                            </div>
                            <div class="row">
                                <div class="col">

                                    <button type="button" class="btn btn-outline-warning w-100">Learn More</button>

                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-warning w-100">View Courses</button>
                                </div>
                            </div>
                        </div>
                        <div class="col text-warning py-3 d-flex justify-content-center align-items-center"
                            style="min-width: 300px">
                            <h1>
                                LEARN . CREATE . INNOVATE
                            </h1>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- Intro section --}}
        <section>
            <div class="container-fluid">
                <div class="row">
                    <h1 class="text-center my-5">Your Gateway to the Future of Tech</h1>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center" style="min-width: 300px;">

                        <picture>
                            <source
                                srcset="https://img.freepik.com/premium-photo/premium-photo-render-aesthetic-arc-gate-ring-light-background-scenes_1033579-198092.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid-rr-similar"
                                type="image/svg+xml">
                            <img src="" class="img-fluid img-thumbnail" alt="..." style="border: none; ">
                        </picture>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center mt-3" style="min-width: 300px;">
                        <p>
                            At <span class="text-warning">Palmate Institute</span>, we believe in the power of
                            technology to change the world. Our
                            mission is to ignite curiosity, fuel creativity, and equip the next generation of innovators
                            with the skills they need to thrive in a digital-first future. From AI and mobile app
                            development to web design and beyond, we offer cutting-edge courses that combine theory with
                            hands-on experience, empowering you to lead in tomorrow’s tech-driven landscape.
                        </p>
                    </div>
                </div>
            </div>

        </section>

        <section>
            <div class="container-fluid">
                <div class="row">
                    <h1 class="text-center my-5">Why Choose Palmate?</h1>
                </div>
                <div class="row">
                    <div class="col d-flex
                    justify-content-center align-items-center"
                        style="min-width: 300px;">
                        <p>
                            <span class="text-warning">Palmate Institute</span> is more than just a school. We’re a
                            community of
                            learners, creators, and innovators who are passionate about technology and its potential to
                            change the world. Here are a few reasons why students choose Palmate:
                        </p>
                    </div>
                    <div class="col d-flex
                    justify-content-center align-items-center"
                        style="min-width: 300px;">
                        <ul style=" list-style-type: circle!important;">
                            <li>Expert Instructors: Learn from industry professionals with real-world experience</li>
                            <li>Hands-On Learning: Gain practical skills through projects, labs, and internships</li>

                            <li>Community Support: Join a network of peers, mentors, and alumni who share your passion
                                for
                                tech</li>

                        </ul>
                    </div>
                </div>
            </div>

        </section>
        {{-- Courses section --}}
        <section>
            <div class="container-fluid">
                <div class="row">
                    <h1 class="text-center my-5">Popular Courses</h1>
                </div>
                <div class="row d-flex justify-content-center">
                    <p class="text-center">
                        Develop essential skills in programming, AI, web development, and more,
                        preparing you for success in the fast-paced tech industry. These are some of the most popular
                        courses.
                        <span class="text-warning">Explore Courses.</span>
                    </p>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="card m-2" style="width: 20rem;">

                        <img class="card-img-top"
                            src="https://img.freepik.com/premium-photo/free-picture-computer-laptop-program-code_934342-141.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid"
                            alt="Card image cap">
                        <div class="card-body">
                            <span class="badge badge-danger bg-danger">8 WEEKS</span>

                            <h5 class="card-title">INTRODUCTION TO WEB DEVELOPMENT</h5>
                            <ul>
                                <li>Learn the basics of HTML, CSS, and JavaScript</li>
                                <li>Build and deploy your first website</li>
                                <li>Explore advanced topics like responsive design and web accessibility</li>

                            </ul>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-warning w-100">Learn More</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-outline-success w-100">Enroll Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 20rem;">

                        <img class="card-img-top"
                            src="https://img.freepik.com/premium-photo/free-picture-computer-laptop-program-code_934342-141.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid"
                            alt="Card image cap">
                        <div class="card-body">
                            <span class="badge badge-danger bg-danger">8 WEEKS</span>

                            <h5 class="card-title">INTRODUCTION TO WEB DEVELOPMENT</h5>
                            <ul>
                                <li>Learn the basics of HTML, CSS, and JavaScript</li>
                                <li>Build and deploy your first website</li>
                                <li>Explore advanced topics like responsive design and web accessibility</li>
                                <li>Explore advanced topics like responsive design and web accessibility</li>

                            </ul>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-warning w-100">Learn More</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-outline-success w-100">Enroll Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 20rem;">

                        <img class="card-img-top"
                            src="https://img.freepik.com/premium-photo/free-picture-computer-laptop-program-code_934342-141.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid"
                            alt="Card image cap">
                        <div class="card-body">
                            <span class="badge badge-danger bg-danger">8 WEEKS</span>

                            <h5 class="card-title">INTRODUCTION TO WEB DEVELOPMENT</h5>
                            <ul>
                                <li>Learn the basics of HTML, CSS, and JavaScript</li>
                                <li>Build and deploy your first website</li>
                                <li>Explore advanced topics like responsive design and web accessibility</li>

                            </ul>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-warning w-100">Learn More</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-outline-success w-100">Enroll Now</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>


        </section>



        {{-- Get in touch section --}}
        <section class="mt-5">
            <div class="container-fluid py-5 bg-dark text-white">
                <div class="row">
                    <div class="col" style="min-width: 300px">
                        <img src="https://img.freepik.com/premium-photo/creative-technology-communication-concept_23-2148945731.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid"
                            class="img-fluid img-thumbnail" alt="..." width="100%">
                    </div>
                    <div class="col" style="min-width: 300px">
                        <h1>Get in Touch</h1>
                        <p>Have questions about our programs or want to learn more about how Palmate can help
                            you
                            build a career in tech? Our team is ready to assist with any inquiries. Feel free to reach
                            out via the contact form below, give us a call, or send us an email. We’ll get back to you
                            as soon as possible!</p>
                        <form action="">
                            <div class="mb-3">
                                <label for="exampleInputEmail1"
                                    class="form-label
                                    ">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputName"
                                    class="form-label
                                    ">Name</label>
                                <input type="text" class="form-control" id="exampleInputName">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputMessage"
                                    class="form-label
                                    ">Message</label>
                                <textarea class="form-control" id="exampleInputMessage" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-warning">Submit</button>


                        </form>
                    </div>
                </div>

        </section>
        {{-- Alumni Section --}}
        <section>
            <div class="container-fluid">
                <div class="row">
                    <h1 class="text-center my-5">Our Alumni</h1>
                </div>
                <div class="row">
                    <!-- Carousel wrapper -->
                    <div id="testimonialCarousel" class="carousel slide text-center carousel-dark" data-bs-ride="carousel">
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
                                            fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
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
                                    src="https://img.freepik.com/free-photo/person-holding-speech-official-event_23-2151054239.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid-rr-similar" alt="avatar"
                                    style="width: 150px; height: 150px; object-fit:cover" />
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-8">
                                        <h5 class="mb-3">Joe Biden</h5>
                                        <p>UX Designer</p>
                                        <p class="text-muted">
                                            <i class="fas fa-quote-left pe-2"></i>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                            fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
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
                                            fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon text-body" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
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

    {{-- bootstrap js links --}}
    @include('bootstrap-scripts')
    
         
   
</body>

</html>
