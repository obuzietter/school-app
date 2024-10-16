<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMISSIONS</title>
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eleifend, sem ac feugiat
                            scelerisque, metus quam dapibus dolor, ut lacinia est felis a purus. Proin euismod blandit
                            libero, non facilisis massa lobortis a. Duis a libero convallis felis dignissim congue non
                            at quam. In et accumsan dolor.
                        </p>
                    </div>


                </div>
            </div>

        </section>
        {{-- all courses --}}
        <section class="mt-5">
            <div class="row">
                <h1 class="text-warning text-center">All Courses</h1>
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

        </section>
        {{-- frequently asked questions --}}
        <section class="mt-5">
            <div class="row mb-5">
                <h1 class="text-warning text-center">Frequently Asked Questions (FAQs)</h1>
            </div>
            <div class="row justify-content-center mb-5">
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
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
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
                                <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and hiding
                                via CSS transitions. You can modify any of this with custom CSS or overriding our
                                default variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
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
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
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
