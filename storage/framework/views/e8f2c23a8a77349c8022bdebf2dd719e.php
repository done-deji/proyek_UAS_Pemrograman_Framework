

<?php $__env->startSection('content'); ?>

<div class="card shadow">

    <div class="card-header bg-success text-white">

        <h4>Tambah Pembayaran</h4>

    </div>

    <div class="card-body">

        <form action="<?php echo e(route('pembayaran.store')); ?>" method="POST">

            <?php echo csrf_field(); ?>

            <div class="mb-3">

                <label>Servis</label>

                <select name="servis_id" class="form-control" required>

                    <option value="">-- Pilih Servis --</option>

                    <?php $__currentLoopData = $servis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($item->id); ?>">

                            <?php echo e($item->bookingServis->pelanggan->nama); ?>

                            -
                            <?php echo e($item->mekanik->nama); ?>


                        </option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>

            </div>

            <div class="mb-3">

                <label>Total Bayar</label>

                <input type="number"
                       name="total_bayar"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label>Tanggal Bayar</label>

                <input type="date"
                       name="tanggal_bayar"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label>Metode Pembayaran</label>

                <select name="metode" class="form-control">

                    <option value="Tunai">Tunai</option>
                    <option value="Transfer">Transfer</option>
                    <option value="QRIS">QRIS</option>

                </select>

            </div>

            <button class="btn btn-success">

                Simpan

            </button>

            <a href="<?php echo e(route('pembayaran.index')); ?>"
               class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/pembayaran/create.blade.php ENDPATH**/ ?>