<nav class="navbar navbar-expand-lg bg-white shadow-sm">

    <div class="container-fluid">

        <h4 class="mb-0">
            Dashboard Admin
        </h4>

        <div>

            <span class="me-3">
                <?php echo e(Auth::user()->name); ?>

            </span>

            <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-inline">

                <?php echo csrf_field(); ?>

                <button class="btn btn-danger btn-sm">

                    Logout

                </button>

            </form>

        </div>

    </div>

</nav><?php /**PATH C:\laragon\www\bengkel\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>