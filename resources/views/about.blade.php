<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABOUT US</title>
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
                        <p class="px-2">
                            At <span class="text-warning">Palmate Institute</span>, we believe in the power of
                            technology to change the world. Our
                            mission is to ignite curiosity, fuel creativity, and equip the next generation of innovators
                            with the skills they need to thrive in a digital-first future. From AI and mobile app
                            development to web design and beyond, we offer cutting-edge courses that combine theory with
                            hands-on experience, empowering you to lead in tomorrow’s tech-driven landscape.
                        </p>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center" style="min-width: 300px;">

                        <picture>
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
        {{-- mission section --}}
        <section class="d-flex justify-content-center align-items-center flex-wrap"  style="min-height: 100dvh">

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
                    <div class="col d-flex flex-column justify-content-center align-items-start mt-3" style="min-width: 300px;">
                        <h1 class="text-warning">
                            Our Mission
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eleifend, sem ac feugiat scelerisque, metus quam dapibus dolor, ut lacinia est felis a purus. Proin euismod blandit libero, non facilisis massa lobortis a. Duis a libero convallis felis dignissim congue non at quam. In et accumsan dolor.
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
        {{-- team section --}}
        <section class="mt-5">
            <div class="row mb-5">
                <h1 class="text-warning text-center">
                    Our Team
                </h1>
            </div>
            <div class="row">
                <div class="card-group justify-content-center">
                    <div class="card mx-3 text-center"
                        style="max-width: 18rem;border: none; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <img src="https://img.freepik.com/premium-photo/portrait-black-african-man-standing-with-arm-crossed-black-people-concept_1025753-140852.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid"
                            class="card-img-top mx-auto mt-3" alt="Hollywood Sign on The Hill"
                            style="height: 150px; width:150px; border-radius:100%; object-fit:cover;" />
                        <div class="card-body">
                            <h3 class="card-title">Victor Ombeba</h3>
                            <h5>~ CEO ~</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.
                            </p>

                        </div>
                    </div>
                    <div class="card mx-3 text-center"
                        style="max-width: 18rem; border: none; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <img src="https://img.freepik.com/free-photo/young-handsome-man-posing_23-2148884333.jpg?uid=R97350360&ga=GA1.1.569336961.1721632028&semt=ais_hybrid"
                            class="card-img-top mx-auto mt-3" alt="Hollywood Sign on The Hill"
                            style="height: 150px; width:150px; border-radius:100%; object-fit:cover;" />
                        <div class="card-body">
                            <h3 class="card-title">Calvince Obuya</h3>
                            <h5>~ CEO ~</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.
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
                    <form action="">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label
                        ">Email
                                address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label
                        ">Name</label>
                            <input type="text" class="form-control" id="exampleInputName">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputMessage"
                                class="form-label
                        ">Message</label>
                            <textarea class="form-control" id="exampleInputMessage" rows="3"></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-warning text-white"
                                style="width:150px">Submit</button>
                        </div>


                    </form>
                </div>
            </div>

        </section>


    </main>
    @include('footer')
    @include('bootstrap-scripts')
</body>

</html>
