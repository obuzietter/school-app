<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top p-3">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="/">Palmate</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admissions">ADMISSIONS</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">PROGRAMS</a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/community" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            COMMUNITY
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/community#learners">Learners Community</a></li>
                            <li><a class="dropdown-item" href="/community#alumni">Alumni Network</a></li>
                            
                        </ul>
                    </li>
                    
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li>
                        <form action="{{ route('application-form') }}" method="get" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-fire" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15" />
                                </svg>
                                Enroll Now
                            </button>
                        </form>

                    </li>
                </ul>
                {{-- <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle" style="font-size: 1.5rem;"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul> --}}
            </div>
        </div>
    </nav>
</header>
