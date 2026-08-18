<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4 custom-navbar">
    <div class="container">

        <a class="navbar-brand fw-bold" href="<?php echo e(url('/dashboard')); ?>">
             <img src="<?php echo e(asset('storage/logo.jpg')); ?>"
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
                    <a class="nav-link" href="<?php echo e(url('/dashboard')); ?>">
                        <i class="bi bi-house-check-fill"></i>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('admin.users')); ?>">
                        <i class="bi bi-people-fill"></i>
                        Users
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/produk')); ?>">
                        <i class="bi bi-box2-heart-fill"></i>
                        Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/penjualan')); ?>">
                        <i class="bi bi-cart-check-fill"></i>
                        Penjualan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/profile')); ?>">
                        <i class="bi bi-person-circle"></i>
                        Profile
                    </a>
                </li>
            </ul>

            <?php if(auth()->guard()->check()): ?>
                <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-info text-white">
                        Logout
                    </button>
                </form>
            <?php endif; ?>

        </div>
    </div>
</nav><?php /**PATH C:\laragon\www\pos_qiya1\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>