<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta http-equiv="refresh" content="5;url=http://127.0.0.1:8000/" /> --}}

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            width: 100vw;
        }

        .container-xxl {
            padding: 3px 15px;
            max-width: 83%;
            transition: max-width 0.5s ease;
        }

        @media (max-width: 1500px) {
            .container-xxl {
                max-width: 87%
            }
        }

        @media (max-width: 1400px) {
            .container-xxl {
                max-width: 90%
            }
        }

        @media (max-width: 1300px) {
            .container-xxl {
                max-width: 95%
            }
        }

        @media (max-width: 1200px) {
            .container-xxl {
                max-width: none
            }
        }

        .navbar-nav .nav-link {
            color: black;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: rgb(89, 89, 251);
        }

        .navbar-nav .btn {
            font-weight: 630;
            transition: color, font-weight 0.3s ease;
        }

        .intro-img {
            width: 100%;
            max-height: 220px;
            object-fit: cover;
            filter: brightness(0.8);
        }

        .custom-outline {
            border: 1px solid black;
            border-radius: 5px;
        }

        .type-img {
            width: 250px;
            object-fit: cover;
            filter: brightness(0.8);
            flex: 0 0 auto;
        }

        #image-container {
            transition: transform 0.5s ease;
        }

        .cars {
            filter: brightness(1.2)
        }

        .vertical-rule {
            border-left: 1px solid #454749;
            /* Adjust the color as needed */
            height: 100%;
        }
    </style>
</head>

<body class="antialiased">

    {{-- navbar  --}}
    <nav class="navbar navbar-expand-lg navbar-white shadow-sm border-bottom">
        <div class="container-xxl">
            <a class="navbar-brand" href="#">
                <span class="fw-semibold fs-4">
                    <i class="bi bi-car-front-fill"></i>
                    Car-Rental
                </span>
            </a>

            {{-- navbar icons & tooltips --}}
            <div class="d-lg-none d-flex align-items-center gap-4 ms-auto mx-4">
                <a href="#" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sign in">
                    <span>
                        <i class="bi bi-box-arrow-in-right" style="font-size: 25px"></i>
                    </span>
                </a>
                <a href="#" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Register">
                    <span>
                        <i class="bi bi-person-fill-add" style="font-size: 25px"></i>
                    </span>
                </a>
            </div>

            {{-- toggle button --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{-- navbar links --}}
            <div class="collapse navbar-collapse justify-content-end align-center fw-medium" id="navbarTogglerDemo02"
                style="font-size: 90%">
                <ul class="navbar-nav  mb-2 mb-lg-0 gap-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item d-none d-lg-inline">
                        <div class="d-flex" style="height: 40px">
                            <div class="vr"></div>
                        </div>
                    </li>
                    <li class="nav-item mt-1 d-none d-lg-inline">
                        <a class="btn btn-success btn-outline-dark text-white btn-sm" href="{{ route('login') }}">Sign
                            in</a>
                    </li>
                    <li class="nav-item mt-1 d-none d-lg-inline">
                        <a class="btn btn-info btn-outline-dark btn-sm" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    {{-- search bar --}}
    <div class="container-xxl mt-4">
        <div class="text-start text-black p-1">
            <h2 class="text-dark" style="font-size: 33px; font-weight:640">Search cars</h2>
        </div>

        <form class="row gy-2 gx-3 align-items-center">
            <div class="col-sm-4">
                <div class="form-floating custom-outline">
                    <select class="form-select" id="select1" aria-label="Type">
                        <option selected>Type</option>
                        <option value="1">SUV</option>
                        <option value="2">Sedan</option>
                        <option value="3">Convertible</option>
                    </select>
                    <label for="select1" class="col-form-label-sm">Type</label>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-floating custom-outline">
                    <select class="form-select" id="select2" aria-label="Make">
                        <option selected>Make</option>
                        <option value="1">BMW</option>
                        <option value="2">Mercedes</option>
                        <option value="3">Toyota</option>
                    </select>
                    <label for="select2" class="col-form-label-sm">Make</label>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-floating custom-outline">
                    <select class="form-select" id="select3" aria-label="Model">
                        <option selected>Model</option>
                        <option value="1">X5</option>
                        <option value="2">C-Class</option>
                        <option value="3">Camry</option>
                    </select>
                    <label for="select3" class="col-form-label-sm">Model</label>
                </div>
            </div>

            <div class="col-auto d-sm-flex d-none">
                <button type="submit" class="btn btn-primary rounded-pill btn-lg mt-2"
                    style="--bs-btn-padding-y: 0.7rem; --bs-btn-padding-x: 4rem; --bs-btn-font-size: 1.2rem; font-weight:500;">
                    Search</button>
            </div>

            <div class="col-auto d-sm-none mx-auto">
                <button type="submit" class="btn btn-primary rounded-pill btn-lg mt-2"
                    style="--bs-btn-padding-y: 0.7rem; --bs-btn-padding-x: 4rem; --bs-btn-font-size: 1.2rem; font-weight:500;">
                    Search</button>
            </div>
        </form>

    </div>

    {{-- intro image & text --}}
    <div class="container-xxl mt-1 position-relative">
        <div class="text-black">
            <hr>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0"
                    class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="images/vehicle 1.jpg" alt="no image" class="img-fluid rounded-5 intro-img">
                    <div
                        class="opacity-100 img-overlay position-absolute top-0 start-20 w-100 h-100 d-flex flex-column justify-content-center">
                        <div class="display-3 text-white" style="margin-left: 20px; font-weight:400">Rent with us
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/vehicle 2.jpg" alt="no image" class="img-fluid rounded-5 intro-img">
                    <div
                        class="opacity-100 img-overlay position-absolute top-0 start-0 w-100 h-100 text-center d-flex flex-column justify-content-center">
                        <div class="display-3 text-white" style="font-weight: 400">From our range of cars</div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/vehicle 3.jpg" alt="no image" class="img-fluid rounded-5 intro-img">
                    <div
                        class="opacity-100 img-overlay position-absolute top-0 start-0 w-100 h-100 text-center d-flex flex-column justify-content-center">
                        <div class="display-3 text-white"
                            style="margin-left: auto; margin-right: 20px; font-weight:400">Experience new heights</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-sm-none text-black">
            <hr>
        </div>
    </div>

    {{-- car types --}}
    <div class="container-xxl mt-3">
        <div class="text-start text-black p-1">
            <h1 class="text-dark" style="font-size: 33px;font-weight:640">Find Car by Types</h1>
        </div>

        <div class="row justify-content-around mt-2 overflow-auto">
            <div id="image-container" class="d-flex gap-3">
                <div class="type-img">
                    <a href="#">
                        <img src="images/SUV.jpeg" alt="SUV" class="img-fluid rounded-5" style="height: 100%">
                        <div
                            class="opacity-100 img-overlay position-absolute top-0 start-0 w-100 h-100 text-center d-flex flex-column justify-content-center">
                            <div class="h3 text-white">SUVs</div>
                        </div>
                    </a>
                </div>
                <div class="type-img">
                    <a href="#">
                        <img src="images/sedan.jpg" alt="Sedan" class="img-fluid rounded-5" style="height: 100%">
                        <div
                            class="opacity-100 img-overlay position-absolute top-0 start-0 w-100 h-100 text-center d-flex flex-column justify-content-center">
                            <div class="h3 text-white">Sedan</div>
                        </div>
                    </a>
                </div>
                <div class="type-img">
                    <a href="#">
                        <img src="images/Hatchback.jpg" alt="Hatchback" class="img-fluid rounded-5">
                        <div
                            class="opacity-100 img-overlay position-absolute top-0 start-0 w-100 h-100 text-center d-flex flex-column justify-content-center">
                            <div class="h3 text-white">Hatchback</div>
                        </div>
                    </a>
                </div>
                <div class="type-img">
                    <a href="#">
                        <img src="images/Pickup.jpg" alt="Pickup" class="img-fluid rounded-5">
                        <div
                            class="opacity-100 img-overlay position-absolute top-0 start-0 w-100 h-100 text-center d-flex flex-column justify-content-center">
                            <div class="h3 text-white">Pickup</div>
                        </div>
                    </a>
                </div>
                <div class="type-img">
                    <a href="#">
                        <img src="images/Mini-van.jpg" alt="Mini-van" class="img-fluid rounded-5"
                            style="height: 100%">
                        <div
                            class="opacity-100 img-overlay position-absolute top-0 start-0 w-100 h-100 text-center d-flex flex-column justify-content-center">
                            <div class="h3 text-white">Mini-van</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- exploring exclusive cars --}}
    <div class="container-xxl mt-4 bg-light border-top border-bottom rounded">
        <div class="text-start text-black mt-2 p-1">
            <h1 class="text-dark" style="font-size: 33px;font-weight:640">Explore Our Exclusive Cars</h1>
        </div>

        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 justify-content-between mt-3">

            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-5">
                            <img src="images/BMW-M3-E46.jpeg" class="img-fluid cars rounded-start" alt="..."
                                style="height: 56%">
                            <h3 class="ms-2 fw-bold mb-0">Ksh. 4,000</h3>
                            <p class="ms-5 mt-0"><small>per day</small></p>
                        </div>
                        <div class="col-7">
                            <div class="card-body text-end p-3">
                                <h5 class="card-title">Sedan 4 Door Car</h5>
                                <p class="mb-1 fw-semibold"><small>BMW M3 E46</small></p>
                                <p class="fw-semibold mb-0 px-2"><small>5 People <i class="bi bi-person-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <p class="fw-semibold mb-0 px-2"><small>Manual <i class="bi bi-gear-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <p class="fw-semibold px-2"><small>Petrol <i class="bi bi-fuel-pump-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <a href="#" class="px-4 me-2 text-start btn btn-outline-secondary">Reserve</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-5">
                            <img src="images/M-C200.jpeg" class="img-fluid cars rounded-start" alt="..."
                                style="height: 56%">
                            <h3 class="ms-2 fw-bold mb-0">Ksh. 4,000</h3>
                            <p class="ms-5 mt-0"><small>per day</small></p>
                        </div>
                        <div class="col-7">
                            <div class="card-body text-end p-3">
                                <h5 class="card-title">Sedan 4 Door Car</h5>
                                <p class="mb-1 fw-semibold"><small>BMW M3 E46</small></p>
                                <p class="fw-semibold mb-0 px-2"><small>5 People <i class="bi bi-person-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <p class="fw-semibold mb-0 px-2"><small>Manual <i class="bi bi-gear-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <p class="fw-semibold px-2"><small>Petrol <i class="bi bi-fuel-pump-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <a href="#" class="px-4 me-2 text-start btn btn-outline-secondary">Reserve</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-5">
                            <img src="images/Subaru_IMPREZA.webp" class="img-fluid cars rounded-start" alt="..."
                                style="height: 56%">
                            <h3 class="ms-2 fw-bold mb-0">Ksh. 4,000</h3>
                            <p class="ms-5 mt-0"><small>per day</small></p>
                        </div>
                        <div class="col-7">
                            <div class="card-body text-end p-3">
                                <h5 class="card-title">Sedan 4 Door Car</h5>
                                <p class="mb-1 fw-semibold"><small>BMW M3 E46</small></p>
                                <p class="fw-semibold mb-0 px-2"><small>5 People <i class="bi bi-person-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <p class="fw-semibold mb-0 px-2"><small>Manual <i class="bi bi-gear-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <p class="fw-semibold px-2"><small>Petrol <i class="bi bi-fuel-pump-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <a href="#" class="px-4 me-2 text-start btn btn-outline-secondary">Reserve</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-5">
                            <img src="images/M-C200.jpeg" class="img-fluid cars rounded-start" alt="..."
                                style="height: 56%">
                            <h3 class="ms-2 fw-bold mb-0">Ksh. 4,000</h3>
                            <p class="ms-5 mt-0"><small>per day</small></p>
                        </div>
                        <div class="col-7">
                            <div class="card-body text-end p-3">
                                <h5 class="card-title">Sedan 4 Door Car</h5>
                                <p class="mb-1 fw-semibold"><small>BMW M3 E46</small></p>
                                <p class="fw-semibold mb-0 px-2"><small>5 People <i class="bi bi-person-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <p class="fw-semibold mb-0 px-2"><small>Manual <i class="bi bi-gear-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <p class="fw-semibold px-2"><small>Petrol <i class="bi bi-fuel-pump-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <a href="#" class="px-4 me-2 text-start btn btn-outline-secondary">Reserve</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-5">
                            <img src="images/M-C200.jpeg" class="img-fluid cars rounded-start" alt="..."
                                style="height: 56%">
                            <h3 class="ms-2 fw-bold mb-0">Ksh. 4,000</h3>
                            <p class="ms-5 mt-0"><small>per day</small></p>
                        </div>
                        <div class="col-7">
                            <div class="card-body text-end p-3">
                                <h5 class="card-title">Sedan 4 Door Car</h5>
                                <p class="mb-1 fw-semibold"><small>BMW M3 E46</small></p>
                                <p class=" fw-semibold mb-0 px-2"><small>5 People <i class="bi bi-person-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <p class=" fw-semibold mb-0 px-2"><small>Manual <i class="bi bi-gear-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <p class="fw-semibold px-2"><small>Petrol <i class="bi bi-fuel-pump-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <a href="#" class="px-4 me-2 text-start btn btn-outline-secondary">Reserve</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-5">
                            <img src="images/M-C200.jpeg" class="img-fluid cars rounded-start" alt="..."
                                style="height: 56%">
                            <h3 class="ms-2 fw-bold mb-0">Ksh. 4,000</h3>
                            <p class="ms-5 mt-0"><small>per day</small></p>
                        </div>
                        <div class="col-7">
                            <div class="card-body text-end p-3">
                                <h5 class="card-title">Sedan 4 Door Car</h5>
                                <p class="mb-1 fw-semibold"><small>BMW M3 E46</small></p>
                                <p class="fw-semibold px-2 mb-0"><small>5 People<i class="bi bi-person-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <p class="fw-semibold px-2 mb-0"><small>Manual <i class="bi bi-gear-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <p class="fw-semibold px-2"><small>Petrol <i class="bi bi-fuel-pump-fill ms-2"
                                            style="font-size: 20px"></i></small></p>
                                <a href="#" class="px-4 me-2 text-start btn btn-outline-secondary">Reserve</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center text-black mt-1 p-1">
            <p class="fw-semibold mb-2"><small>Don't see what you looking for?</small></p>
            <a href="#" class="btn btn-outline-primary rounded-pill mb-3">View all cars</a>
        </div>

    </div>

    {{-- most viewed cars --}}
    <div class="container-xxl mt-3">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="images/xan-unsplash.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body text-center">
                        <h1 class="Card-title text-dark p-1" style="font-size: 33px;font-weight:640">Most Viewed Cars
                        </h1>
                        <p class="card-text px-1">You can get to see and choose from our range of cars that have been
                            viewed by most of our clients.</p>
                        <p class="card-text px-1 fw-bold mt-5"><small>Want to see the most viewed cars?</small></p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                            <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                            <span role="status">Click me</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- offcanvas --}}
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
        aria-labelledby="offcanvasBottomLabel" style="height: 550px;">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title mb-0" id="offcanvasBottomLabel">Most Viewed Cars</h2>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-2">

                <div class="col">
                    <div class="card">
                        <img src="images/M-C200.jpeg" class="card-img-top" alt="no image" style="height: 270px">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sedan 4 Door Car</h5>
                            <p class="mb-1 fw-semibold"><small>BMW M3 E46</small></p>
                            <p class="fw-semibold mb-2"><i class="bi bi-person-fill ms-0"
                                    style="font-size: 20px"></i><small class="ms-1">5 People</small>
                                <i class="bi bi-gear-fill ms-4" style="font-size: 20px"></i><small
                                    class="ms-1">Manual</small>
                                <i class="bi bi-fuel-pump-fill ms-4" style="font-size: 20px"></i><small
                                    class="ms-1">Petrol</small>
                            </p>
                            <a href="#" class="btn btn-outline-secondary">Reserve</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="images/M-C200.jpeg" class="card-img-top" alt="no image" style="height: 270px">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sedan 4 Door Car</h5>
                            <p class="mb-1 fw-semibold"><small>BMW M3 E46</small></p>
                            <p class="fw-semibold mb-2"><i class="bi bi-person-fill ms-0"
                                    style="font-size: 20px"></i><small class="ms-1">5 People</small>
                                <i class="bi bi-gear-fill ms-4" style="font-size: 20px"></i><small
                                    class="ms-1">Manual</small>
                                <i class="bi bi-fuel-pump-fill ms-4" style="font-size: 20px"></i><small
                                    class="ms-1">Petrol</small>
                            </p>
                            <a href="#" class="btn btn-outline-secondary">Reserve</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="images/M-C200.jpeg" class="card-img-top" alt="no image" style="height: 270px">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sedan 4 Door Car</h5>
                            <p class="mb-1 fw-semibold"><small>BMW M3 E46</small></p>
                            <p class="fw-semibold mb-2"><i class="bi bi-person-fill ms-0"
                                    style="font-size: 20px"></i><small class="ms-1">5 People</small>
                                <i class="bi bi-gear-fill ms-4" style="font-size: 20px"></i><small
                                    class="ms-1">Manual</small>
                                <i class="bi bi-fuel-pump-fill ms-4" style="font-size: 20px"></i><small
                                    class="ms-1">Petrol</small>
                            </p>
                            <a href="#" class="btn btn-outline-secondary">Reserve</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="images/M-C200.jpeg" class="card-img-top" alt="no image" style="height: 270px">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sedan 4 Door Car</h5>
                            <p class="mb-1 fw-semibold"><small>BMW M3 E46</small></p>
                            <p class="fw-semibold mb-2"><i class="bi bi-person-fill ms-0"
                                    style="font-size: 20px"></i><small class="ms-1">5 People</small>
                                <i class="bi bi-gear-fill ms-4" style="font-size: 20px"></i><small
                                    class="ms-1">Manual</small>
                                <i class="bi bi-fuel-pump-fill ms-4" style="font-size: 20px"></i><small
                                    class="ms-1">Petrol</small>
                            </p>
                            <a href="#" class="btn btn-outline-secondary">Reserve</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Testimonials, FAQs and Tips --}}
    <div class="container-xxl mt-3">
        <div class="row">
            <!-- Carousel Column -->
            <div class="col-lg-5">
                <div class="text-start text-black mt-2 p-1">
                    <h1 class="text-dark" style="font-size: 33px;font-weight:640">Testimonials</h1>
                </div>
                <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active" data-bs-interval="5000">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="images/Face.jpg" class="img-fluid rounded-start" alt="no image">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title fw-semibold">Sarah K</h5>
                                            <p class="card-text">I am really pleased by your services. I can recommend
                                                you
                                                to every future client who wish to hire a vehicle.</p>
                                            <p class="card-text"><small class="text-body-secondary">12 March
                                                    2022</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" data-bs-interval="5000">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="images/Face 3.jpg" class="img-fluid rounded-start" alt="no image">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Juma J</h5>
                                            <p class="card-text">So far the best car hiring I have worked with.
                                                Excellent customer service</p>
                                            <p class="card-text"><small class="text-body-secondary">28 Dec
                                                    2023</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" data-bs-interval="5000">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="images/Face 4.jpeg" class="img-fluid rounded-start" alt="no image">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Oliver O</h5>
                                            <p class="card-text">I am really pleased by your services. I reccomend you
                                                to every future client
                                                who wish to have a vehicle.
                                            </p>
                                            <p class="card-text"><small class="text-body-secondary">13 May
                                                    2023</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" data-bs-interval="5000">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="images/Face 2.jpeg" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Keen F</h5>
                                            <p class="card-text">So far the best car hiring I have worked with.
                                                Excellent customer service</p>
                                            <p class="card-text"><small class="text-body-secondary">15 Dec
                                                    2023</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-1 d-none d-lg-flex ps-5">
                <hr class="vertical-rule">
            </div>
            <!-- Accordion Column -->
            <div class="col-lg-6">
                <div class="text-start text-black mt-2 p-1">
                    <h1 class="text-dark" style="font-size: 33px;font-weight:640">FAQs & Tips</h1>
                </div>
                <div class="accordion" id="accordionFAQs">
                    <div class="accordion-item mb-lg-5">
                        <h1 class="accordion-header text-dark fw-bold" style="font-size:30px; font-weight:640">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                <h3 class="text-dark" style="font-size: 17px;font-weight:500">Frequently Asked
                                    Questions
                        </h1>
                        </button>
                        </h1>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFAQs">
                            <div class="accordion-body">
                                <small class="fw-semibold">What do I need when renting a car?</small>
                                <p><small class="mt-0">All you need when renting a car with us is your national ID
                                        and sufficient funds to pay for the renting services.
                                        At the time of collecting the car you will need the National ID together with
                                        your driver's license.</small></p>
                                <small class="fw-semibold">Can I book a car for someone else?</small>
                                <p><small class="mt-0">No. You can not book a car on someone's behalf as we need
                                        individual national ID and the owner of the ID.</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion pt-2" id="accordionTips">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapsetwo" aria-expanded="false"
                                aria-controls="flush-collapsetwo">
                                <h3 class="text-dark" style="font-size: 17px;font-weight:500">Top Tips</h1>
                            </button>
                        </h2>
                        <div id="flush-collapsetwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionTips">
                            <div class="accordion-body">
                                <p><small>1. If you hiring for family or friends road trip, you might consider bigger
                                        vehicles like mini vans and SUVs so you can enjoy
                                        the luxury of space.</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Footer --}}
    <div class="container-fluid mt-5 bg-light">
        <div class="container-xxl">
            <div class="row mt-5 d-flex justify-content-between py-5">

                <div class="col-6 col-md-3">
                    <a href="#" class="text-dark" style="text-decoration: none">
                        <span class="fw-semibold fs-4">
                            <i class="bi bi-car-front-fill"></i>
                            Car-Rental
                        </span>
                    </a>
                    <p><small> We give you reliable and affordable car hire in Nairobi. Unbeatable car rental deals and
                            excellent service to our clients.</small></p>
                </div>

                <div class="col-6 col-md-3">
                    <span class="fw-semibold fs-4">
                        Offices
                    </span>
                    <p>Garden City-Cedar Court <br> off thika super highway.</p>
                </div>

                <div class="col-6 col-md-3">
                    <span class="fw-semibold fs-4">
                        Contacts
                    </span>
                    <p><i class="bi bi-envelope-at-fill" style="font-size: 20px"></i> info@carrental.com</p>
                    <p><i class="bi bi-telephone-fill" style="font-size: 20px"></i> +254 768 273979</p>
                    <p><a href="#" class="text-dark"><i class="bi bi-facebook" style="font-size: 25px"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="facebook"></i></a>
                        <a href="#" class="text-dark"><i class="bi bi-twitter-x ms-3" style="font-size: 20px"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="twitter"></i></a>
                        <a href="#" class="text-dark"><i class="bi bi-instagram ms-3" style="font-size: 20px"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="instagram"></i></a>
                    </p>
                </div>

                <div class="col-6 col-md-2">
                    <span class="fw-semibold fs-4">
                        Links
                    </span>
                    <a href="#" class="text-dark" style="text-decoration: none">
                        <p>About Us</p>
                    </a>
                    <a href="#" class="text-dark" style="text-decoration: none">
                        <p>Contact Us</p>
                    </a>
                    <a href="#" class="text-dark" style="text-decoration: none">
                        <p>Policy</p>
                    </a>
                </div>

            </div>
        </div>
        <div class="copyright row text-center">
            <p>Car Rental Copyright <b>&copy;</b> <?php echo date('Y'); ?> All rights reserved </p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].maimp(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>

    <script>
        let imageContainer = document.getElementById("image-container");
        let translateValue = 0;
        const imageWidth = document.querySelector('.type-img').offsetWidth;

        function slideImages(direction) {
            translateValue += direction * imageWidth;
            imageContainer.style.transform = `translateX(${-translateValue}px)`;
        }
    </script>

</body>

</html>
