

<?php $__env->startSection('content'); ?>

<div class="container">

    <h3>Tambah Kendaraan</h3>

    <form action="<?php echo e(route('kendaraan.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>

        <div class="mb-3">

            <label>Pemilik</label>

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

            <label>Merk</label>

            <input type="text"
                   name="merk"
                   class="form-control"
                   required>

        </div>

        <div class="mb-3">

            <label>Tipe</label>

            <input type="text"
                   name="tipe"
                   class="form-control"
                   required>

        </div>

        <div class="mb-3">

            <label>Plat Nomor</label>

            <input type="text"
                   name="plat_nomor"
                   class="form-control"
                   required>

        </div>

        <div class="mb-3">

            <label>Tahun</label>

            <input type="number"
                   name="tahun"
                   class="form-control"
                   required>

        </div>

        <button class="btn btn-success">
            Simpan
        </button>

        <a href="<?php echo e(route('kendaraan.index')); ?>"
            class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/kendaraan/create.blade.php ENDPATH**/ ?>