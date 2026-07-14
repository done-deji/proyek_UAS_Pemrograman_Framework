<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-12">

        <div class="alert alert-primary shadow">
            <h3>🚗 Smart Garage Management System</h3>
            <p class="mb-0">
                Selamat datang <b><?php echo e(Auth::user()->name); ?></b>,
                semoga harimu menyenangkan.
            </p>
        </div>

    </div>

</div>

<div class="row g-4">

    <div class="col-md-3">

        <div class="card text-white bg-primary shadow">

            <div class="card-body">

                <h5>Pelanggan</h5>

                <h2><?php echo e($totalPelanggan); ?></h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card text-white bg-success shadow">

            <div class="card-body">

                <h5>Kendaraan</h5>

                <h2><?php echo e($totalKendaraan); ?></h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card text-white bg-warning shadow">

            <div class="card-body">

                <h5>Mekanik</h5>

                <h2><?php echo e($totalMekanik); ?></h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card text-white bg-danger shadow">

            <div class="card-body">

                <h5>Sparepart</h5>

                <h2><?php echo e($totalSparepart); ?></h2>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card text-white bg-info shadow">

            <div class="card-body">

                <h5>Booking Servis</h5>

                <h2><?php echo e($totalBooking); ?></h2>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card text-white bg-secondary shadow">

            <div class="card-body">

                <h5>Servis</h5>

                <h2><?php echo e($totalServis); ?></h2>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card text-white bg-dark shadow">

            <div class="card-body">

                <h5>Pembayaran</h5>

                <h2><?php echo e($totalPembayaran); ?></h2>

            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/dashboard.blade.php ENDPATH**/ ?>