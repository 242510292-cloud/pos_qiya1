<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4 custom-navbar">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ url('/dashboard') }}">
             <img src="{{ asset('storage/logo.jpg') }}"
                        alt="Logo"
                        class="logo">
            POS
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dashboard') }}">
                        <i class="bi bi-house-check-fill"></i>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.users') }}">
                        <i class="bi bi-people-fill"></i>
                        Users
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/produk') }}">
                        <i class="bi bi-box2-heart-fill"></i>
                        Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/penjualan') }}">
                        <i class="bi bi-cart-check-fill"></i>
                        Penjualan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile') }}">
                        <i class="bi bi-person-circle"></i>
                        Profile
                    </a>
                </li>
            </ul>

            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-info text-white">
                        Logout
                    </button>
                </form>
            @endauth

        </div>
    </div>
</nav>