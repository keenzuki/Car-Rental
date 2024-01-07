<style>
    body {
        width: 100vw;
        margin-top: 60px;
    }

    #left-panel {
    height: 100vh;
    position: fixed;
    top: 0;
    }

    .sidebar {
        height: 100%;
    }

    .left-panel {
        max-width: 285px;
        z-index: 1;
    }

    @media (max-width: 1200px) {
    .left-panel {
        max-width: 100px
    }
    }

    @media (max-width: 765px) {
    .left-panel {
        max-width: 100vw
    }
    }
    .navbar-nav .nav-link {
        color: rgb(101, 100, 100);
        transition: color 0.3s ease;
        font-style: inherit
    }

    .navbar-nav .nav-link:hover {
        color: rgb(72, 175, 235);
    }
    .heading {
        font-weight: 620;
        color: rgb(50, 49, 49)
    }

</style>
<body>
    <div id="left-panel" class="left-panel d-md-inline collapse navbar-collapse col-md-2 col-xl-3">
        <nav class="navbar sidebar navbar-expand border-end bg-white align-items-start mt-5 shadow-sm" >
            <div id="main-menu" class="main-menu">
                <ul class="nav navbar-nav flex-column ms-3 mt-3">

                    <li class="nav-item active p-1 mb-2">
                        <a href="#" class="nav-link">
                            <i class="bi bi-laptop" style="font-size: 20px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Dashboard"></i>
                            <span class="ms-4 d-inline d-md-none d-xl-inline">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item p-1 ms-2 d-block d-md-none d-xl-block mb-2">
                        <span class="heading">CARS</span>
                    </li>

                    <li class="nav-item active p-1 mb-2">
                        <a href="#" class="nav-link">
                            <i class="bi bi-car-front" style="font-size: 20px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Cars"></i>
                            <span class="ms-4 d-inline d-md-none d-xl-inline">View Cars</span>
                        </a>
                    </li>

                    <li class="nav-item active p-1 mb-2">
                        <a href="#" class="nav-link">
                            <i class="bi bi-car-front-fill" style="font-size: 20px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Register Cars"></i>
                            <span class="ms-4 d-inline d-md-none d-xl-inline">Register Car</span>
                        </a>
                    </li>

                    <li class="nav-item p-1 ms-2 d-block d-md-none d-xl-block mb-2">
                        <span class="heading">USERS</span>
                    </li>

                    <li class="nav-item active p-1 mb-2">
                        <a href="#" class="nav-link">
                            <i class="bi bi-person-fill" style="font-size: 20px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Users"></i>
                            <span class="ms-4 d-inline d-md-none d-xl-inline">View Users</span>
                        </a>
                    </li>

                    <li class="nav-item active p-1 mb-2">
                        <a href="#" class="nav-link">
                            <i class="bi bi-person-fill-add" style="font-size: 20px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Register Users"></i>
                            <span class="ms-4 d-inline d-md-none d-xl-inline">Register Users</span>
                        </a>
                    </li>

                    <li class="nav-item p-1 ms-2 d-block d-md-none d-xl-block mb-2">
                        <span class="heading">TRANSACTIONS</span>
                    </li>

                    <li class="nav-item active p-1 mb-2">
                        <a href="#" class="nav-link">
                            <i class="bi bi-receipt-cutoff" style="font-size: 20px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Bookings"></i>
                            <span class="ms-4 d-inline d-md-none d-xl-inline">Bookings</span>
                        </a>
                    </li>

                    <li class="nav-item active p-1 mb-2">
                        <a href="#" class="nav-link">
                            <i class="bi bi-cash-coin" style="font-size: 20px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Payments"></i>
                            <span class="ms-4 d-inline d-md-none d-xl-inline">Payments</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</body>
