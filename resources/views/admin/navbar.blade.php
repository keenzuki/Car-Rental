<style>
    .navbar-brand {
        margin-left: 38px
    }
    .icon {
        font-size: 22px;
        color:rgb(67, 66, 66);
    }
</style>

    <nav class="navbar navbar-expand-md border-bottom bg-white navbar-light fixed-top shadow-sm">
        <a class="navbar-brand" href="#">
        <span class="fs-4" style="font-weight: 600">
            <i class="bi bi-car-front-fill" style="font-size: 25px"></i>
            Car-Rental
        </span>
        </a>
        <div class="ms-auto me-4 me-md-5 align-items-center gap-2 d-flex">
        <ul class="navbar-nav d-flex flex-row gap-4 gap-md-3">
            <li class="nav-item mt-2">
                <a href="#" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Messages">
                    <div class="position-relative">
                    <span>
                        <i class="bi bi-envelope-fill icon"></i>
                    </span>
                     <span class="position-absolute py-1 top-0 start-100 translate-middle badge rounded-circle bg-primary"> 3</span>
                    </div>
                </a>
            </li>
            <li class="nav-item mt-2">
                <a href="#" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notifications">
                    <div class="position-relative">
                    <span>
                        <i class="bi bi-bell-fill icon"></i>
                    </span>
                     <span class="position-absolute py-1 top-0 start-100 translate-middle badge rounded-circle bg-danger"> 4</span>
                     </div>
                </a>
            </li>
            <li class="nav-item dropdown position-static">
                <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="position-relative">
                    <img src="{{ asset('img/profiles/' . Auth::user()->photo) }}" alt="admin" width="30"
                    height="30" class="rounded-circle">
                     <span class="position-absolute top-100 start-100 translate-middle p-1 bg-success border border-light rounded-circle"></span>
                     </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end position-absolute">
                    <li>
                        <form method="get" action="{{ route('profile.edit') }}">
                            @csrf
                            <button type="submit" class="btn btn-link dropdown-item">Profile</button>
                        </form>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link dropdown-item">Sign out</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#left-panel" aria-controls="left-panel" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </nav>