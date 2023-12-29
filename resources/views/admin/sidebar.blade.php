<style>
    .nav-link {
        color: #000000;

    }
</style>
<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-blue-200">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Menu</span>
        </a>
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="position-relative">
                    <img src="{{ asset('img/profiles/' . Auth::user()->photo) }}" alt="admin" width="50"
                        height="50" class="rounded-circle">
                    <span class="badge bg-success rounded-circle position-absolute top-0 end-0"
                        style="width: 6px; height: 13px;">&nbsp;</span>
                </div>
                <span class="d-none d-sm-inline mx-1">{{ Auth::user()->last_name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li>
                    <form method="get" action="">
                        @csrf
                        <button type="submit" class="btn btn-link dropdown-item">Profile</button>
                    </form>
                </li>
                <li>
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link dropdown-item">Sign out</button>
                    </form>
                </li>
            </ul>

        </div>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="{{ route('admin.sidebar') }}" class="nav-link align-middle px-0">
                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-house-door-fill"></i> <span class="ms-1 d-none d-sm-inline">Car Type</span></a>
            </li>
            <li>
                <a href="" class="nav-link px-0 align-middle">
                    <i class="fs-4 fas fa-hat-cowboy"></i></i> <span class="ms-1 d-none d-sm-inline">Car Make</span></a>
            </li>
            <li>
                <a href="" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Bookings</span></a>
            </li>
            <li>
                <a href="" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-card-checklist"></i> <span class="ms-1 d-none d-sm-inline">Payments</span></a>
            </li>
            <li>
                <a href="" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-building"></i> <span class="ms-1 d-none d-sm-inline">Cars</span></a>
            </li>
            <li>
                <a href="" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-house-door-fill"></i> <span class="ms-1 d-none d-sm-inline">Car Model</span></a>
            </li>
        </ul>
    </div>
</div>
