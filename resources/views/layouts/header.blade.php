<div class="header bg-white p-3">
    <a href="{{ route('dashboard') }}">Dashboard</a>

    <div class="dropdown float-right">
        <a href="#" class="dropdown-toggle" id="profileDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="{{ route('profile.edit') }}">Edit Profile</a>
            <div class="dropdown-divider"></div>

            <!-- Logout Form -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
            </form>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="dropdown-item">Logout</button>
        </form>
    </div>
</div>
