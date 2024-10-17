<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COMMUNITY</title>
    @include('head-links')
</head>

<body>
    @include('header')
    <main>
        {{-- hero section --}}
        <section class="d-flex" style="min-height: 50vh; background-image:url(/images/bg.jpeg); background-size:cover">
            <div class="container-fluid"
                style="display: grid; place-items:center;flex: 1; background: linear-gradient(to right, rgba(0, 0, 0, 0.892), rgba(0, 0, 0, 0.641), rgba(0, 0, 0, 0.892))">
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
                        <picture class="bg-dark" style="border-radius: 100%;">
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
                            SOMETHING
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eleifend, sem ac feugiat
                            scelerisque, metus quam dapibus dolor, ut lacinia est felis a purus. Proin euismod blandit
                            libero, non facilisis massa lobortis a. Duis a libero convallis felis dignissim congue non
                            at quam. In et accumsan dolor.
                        </p>
                    </div>
                </div>


            </div>
            <div class="container-fluid mt-5 px-5">

                <div class="row">
                    <div class="col d-flex flex-column justify-content-center align-items-start mt-3"
                        style="min-width: 300px;">
                        <h1 class="text-warning">
                            SOMETHING
                        </h1>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eleifend, sem ac feugiat
                            scelerisque, metus quam dapibus dolor, ut lacinia est felis a purus. Proin euismod blandit
                            libero, non facilisis massa lobortis a. Duis a libero convallis felis dignissim congue non
                            at quam. In et accumsan dolor.
                        </p>
                    </div>

                    <div class="col d-flex justify-content-center align-items-center" style="min-width: 300px;">

                        <picture class="bg-dark" style="border-radius: 100%;">
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
        {{-- ALUMNI SECTION --}}
        <section id="alumni">
            <div class="container-fluid">
                <div class="row">
                    <h1 class="text-center my-5 text-warning">What are the Alumni saying?</h1>
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
    @include('footer')
    @include('bootstrap-scripts')

</body>

</html>
