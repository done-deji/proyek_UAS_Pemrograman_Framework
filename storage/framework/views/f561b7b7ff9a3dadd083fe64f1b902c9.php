

<?php $__env->startSection('content'); ?>

<div class="card shadow">

    <div class="card-header bg-success text-white">

        <h4>
            <i class="fa fa-user-plus"></i>
            Tambah Pelanggan
        </h4>

    </div>

    <div class="card-body">

        <form action="<?php echo e(route('pelanggan.store')); ?>" method="POST">

            <?php echo csrf_field(); ?>

            <div class="mb-3">

                <label class="form-label">
                    Nama Pelanggan
                </label>

                <input
                    type="text"
                    name="nama"
                    class="form-control"
                    placeholder="Masukkan Nama"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Alamat
                </label>

                <textarea
                    name="alamat"
                    class="form-control"
                    rows="4"
                    placeholder="Masukkan Alamat"
                    required></textarea>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Nomor Telepon
                </label>

                <input
                    type="text"
                    name="telepon"
                    class="form-control"
                    placeholder="08xxxxxxxxxx"
                    required>

            </div>

            <button class="btn btn-success">

                <i class="fa fa-save"></i>
                Simpan

            </button>

            <a href="<?php echo e(route('pelanggan.index')); ?>"
               class="btn btn-secondary">

                <i class="fa fa-arrow-left"></i>
                Kembali

            </a>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/pelanggan/create.blade.php ENDPATH**/ ?>