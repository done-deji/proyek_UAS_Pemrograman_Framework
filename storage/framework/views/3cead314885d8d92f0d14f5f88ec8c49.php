

<?php $__env->startSection('content'); ?>

<div class="card shadow">

    <div class="card-header bg-success text-white">
        <h4>Tambah Booking Servis</h4>
    </div>

    <div class="card-body">

        <form action="<?php echo e(route('booking-servis.store')); ?>" method="POST">

            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label>Pelanggan</label>

                <select name="pelanggan_id" class="form-control" required>

                    <option value="">-- Pilih Pelanggan --</option>

                    <?php $__currentLoopData = $pelanggans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($pelanggan->id); ?>">
                            <?php echo e($pelanggan->nama); ?>

                        </option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>

            </div>

            <div class="mb-3">

                <label>Kendaraan</label>

                <select name="kendaraan_id" class="form-control" required>

                    <option value="">-- Pilih Kendaraan --</option>

                    <?php $__currentLoopData = $kendaraans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kendaraan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($kendaraan->id); ?>">
                            <?php echo e($kendaraan->merk); ?> - <?php echo e($kendaraan->plat_nomor); ?>

                        </option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>

            </div>

            <div class="mb-3">

                <label>Tanggal Booking</label>

                <input type="date"
                       name="tanggal_booking"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label>Keluhan</label>

                <textarea name="keluhan"
                          class="form-control"
                          rows="4"
                          required></textarea>

            </div>

            <button class="btn btn-success">
                Simpan
            </button>

            <a href="<?php echo e(route('booking-servis.index')); ?>"
               class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/booking-servis/create.blade.php ENDPATH**/ ?>