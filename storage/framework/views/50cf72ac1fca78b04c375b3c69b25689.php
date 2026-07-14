

<?php $__env->startSection('content'); ?>

<div class="card shadow">

    <div class="card-header bg-warning">
        <h4>
            <i class="fa fa-edit"></i> Edit Kendaraan
        </h4>
    </div>

    <div class="card-body">

        <form action="<?php echo e(route('kendaraan.update', $kendaraan->id)); ?>" method="POST">

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-3">
                <label>Pemilik Kendaraan</label>

                <select name="pelanggan_id" class="form-control" required>

                    <?php $__currentLoopData = $pelanggans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($pelanggan->id); ?>"
                            <?php echo e($kendaraan->pelanggan_id == $pelanggan->id ? 'selected' : ''); ?>>

                            <?php echo e($pelanggan->nama); ?>


                        </option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>

            </div>

            <div class="mb-3">
                <label>Merk</label>

                <input type="text"
                       name="merk"
                       class="form-control"
                       value="<?php echo e($kendaraan->merk); ?>"
                       required>

            </div>

            <div class="mb-3">
                <label>Tipe</label>

                <input type="text"
                       name="tipe"
                       class="form-control"
                       value="<?php echo e($kendaraan->tipe); ?>"
                       required>

            </div>

            <div class="mb-3">
                <label>Plat Nomor</label>

                <input type="text"
                       name="plat_nomor"
                       class="form-control"
                       value="<?php echo e($kendaraan->plat_nomor); ?>"
                       required>

            </div>

            <div class="mb-3">
                <label>Tahun</label>

                <input type="number"
                       name="tahun"
                       class="form-control"
                       value="<?php echo e($kendaraan->tahun); ?>"
                       required>

            </div>

            <button class="btn btn-warning">
                <i class="fa fa-save"></i> Update
            </button>

            <a href="<?php echo e(route('kendaraan.index')); ?>" class="btn btn-secondary">
                <i class="fa fa-arrow-left"></i> Kembali
            </a>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/kendaraan/edit.blade.php ENDPATH**/ ?>