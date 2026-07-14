

<?php $__env->startSection('content'); ?>

<div class="card shadow">

    <div class="card-header bg-success text-white">

        <h4>Tambah Servis</h4>

    </div>

    <div class="card-body">

        <form action="<?php echo e(route('servis.store')); ?>" method="POST">

            <?php echo csrf_field(); ?>

            <div class="mb-3">

                <label>Booking Servis</label>

                <select name="booking_servis_id" class="form-control" required>

                    <option value="">-- Pilih Booking --</option>

                    <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($booking->id); ?>">

                            <?php echo e($booking->pelanggan->nama); ?>

                            -
                            <?php echo e($booking->kendaraan->plat_nomor); ?>


                        </option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>

            </div>

            <div class="mb-3">

                <label>Mekanik</label>

                <select name="mekanik_id" class="form-control" required>

                    <option value="">-- Pilih Mekanik --</option>

                    <?php $__currentLoopData = $mekaniks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mekanik): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($mekanik->id); ?>">

                            <?php echo e($mekanik->nama); ?>


                        </option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>

            </div>

            <div class="mb-3">

                <label>Tanggal Servis</label>

                <input
                    type="date"
                    name="tanggal_servis"
                    class="form-control"
                    required>

            </div>

            <div class="mb-3">

                <label>Biaya Jasa</label>

                <input
                    type="number"
                    name="biaya_jasa"
                    class="form-control"
                    required>

            </div>

            <button class="btn btn-success">

                Simpan

            </button>

            <a href="<?php echo e(route('servis.index')); ?>"
               class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/servis/create.blade.php ENDPATH**/ ?>