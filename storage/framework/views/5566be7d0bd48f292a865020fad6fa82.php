

<?php $__env->startSection('content'); ?>

<div class="card shadow">

    <div class="card-header bg-warning">

        <h4>
            <i class="fa fa-edit"></i>
            Edit Pelanggan
        </h4>

    </div>

    <div class="card-body">

        <form action="<?php echo e(route('pelanggan.update',$pelanggan->id)); ?>" method="POST">

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-3">

                <label>Nama</label>

                <input
                    type="text"
                    name="nama"
                    class="form-control"
                    value="<?php echo e($pelanggan->nama); ?>"
                    required>

            </div>

            <div class="mb-3">

                <label>Alamat</label>

                <textarea
                    name="alamat"
                    class="form-control"
                    rows="4"
                    required><?php echo e($pelanggan->alamat); ?></textarea>

            </div>

            <div class="mb-3">

                <label>Telepon</label>

                <input
                    type="text"
                    name="telepon"
                    class="form-control"
                    value="<?php echo e($pelanggan->telepon); ?>"
                    required>

            </div>

            <button class="btn btn-warning">

                <i class="fa fa-save"></i>
                Update

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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/pelanggan/edit.blade.php ENDPATH**/ ?>