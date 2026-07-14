

<?php $__env->startSection('content'); ?>

<div class="card shadow">

    <div class="card-header bg-warning">
        <h4>Edit Booking Servis</h4>
    </div>

    <div class="card-body">

        <form action="<?php echo e(route('booking-servis.update', $booking->id)); ?>" method="POST">

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-3">
                <label>Pelanggan</label>

                <select name="pelanggan_id" class="form-control" required>

                    <?php $__currentLoopData = $pelanggans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($pelanggan->id); ?>"
                            <?php echo e($booking->pelanggan_id == $pelanggan->id ? 'selected' : ''); ?>>

                            <?php echo e($pelanggan->nama); ?>


                        </option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>

            </div>

            <div class="mb-3">
                <label>Kendaraan</label>

                <select name="kendaraan_id" class="form-control" required>

                    <?php $__currentLoopData = $kendaraans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kendaraan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($kendaraan->id); ?>"
                            <?php echo e($booking->kendaraan_id == $kendaraan->id ? 'selected' : ''); ?>>

                            <?php echo e($kendaraan->merk); ?> - <?php echo e($kendaraan->plat_nomor); ?>


                        </option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>

            </div>

            <div class="mb-3">
                <label>Tanggal Booking</label>

                <input
                    type="date"
                    name="tanggal_booking"
                    class="form-control"
                    value="<?php echo e($booking->tanggal_booking); ?>"
                    required>

            </div>

            <div class="mb-3">
                <label>Keluhan</label>

                <textarea
                    name="keluhan"
                    class="form-control"
                    rows="4"
                    required><?php echo e($booking->keluhan); ?></textarea>

            </div>

            <div class="mb-3">
                <label>Status</label>

                <select name="status" class="form-control">

                    <option value="Menunggu" <?php echo e($booking->status=='Menunggu' ? 'selected' : ''); ?>>
                        Menunggu
                    </option>

                    <option value="Diproses" <?php echo e($booking->status=='Diproses' ? 'selected' : ''); ?>>
                        Diproses
                    </option>

                    <option value="Selesai" <?php echo e($booking->status=='Selesai' ? 'selected' : ''); ?>>
                        Selesai
                    </option>

                    <option value="Batal" <?php echo e($booking->status=='Batal' ? 'selected' : ''); ?>>
                        Batal
                    </option>

                </select>

            </div>

            <button class="btn btn-warning">
                Update
            </button>

            <a href="<?php echo e(route('booking-servis.index')); ?>"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/booking-servis/edit.blade.php ENDPATH**/ ?>