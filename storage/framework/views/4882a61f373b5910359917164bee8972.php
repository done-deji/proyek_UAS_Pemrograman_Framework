

<?php $__env->startSection('content'); ?>

<div class="card shadow">

    <div class="card-header bg-warning">
        <h4>Edit Servis</h4>
    </div>

    <div class="card-body">

        <form action="<?php echo e(route('servis.update', $servis->id)); ?>" method="POST">

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-3">

                <label>Booking Servis</label>

                <select name="booking_servis_id" class="form-control" required>

                    <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($booking->id); ?>"
                            <?php echo e($servis->booking_servis_id == $booking->id ? 'selected' : ''); ?>>

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

                    <?php $__currentLoopData = $mekaniks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mekanik): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($mekanik->id); ?>"
                            <?php echo e($servis->mekanik_id == $mekanik->id ? 'selected' : ''); ?>>

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
                    value="<?php echo e($servis->tanggal_servis); ?>"
                    required>

            </div>

            <div class="mb-3">

                <label>Biaya Jasa</label>

                <input
                    type="number"
                    name="biaya_jasa"
                    class="form-control"
                    value="<?php echo e($servis->biaya_jasa); ?>"
                    required>

            </div>

            <button class="btn btn-warning">
                Update
            </button>

            <a href="<?php echo e(route('servis.index')); ?>" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/servis/edit.blade.php ENDPATH**/ ?>