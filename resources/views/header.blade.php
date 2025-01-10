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
