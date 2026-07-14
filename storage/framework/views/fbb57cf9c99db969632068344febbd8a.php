

<?php $__env->startSection('content'); ?>

<div class="card shadow">

    <div class="card-header bg-warning text-dark">
        <h4>Edit Mekanik</h4>
    </div>

    <div class="card-body">

        <form action="<?php echo e(route('mekanik.update', $mekanik->id)); ?>" method="POST">

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-3">
                <label>Nama</label>
                <input type="text"
                       name="nama"
                       class="form-control"
                       value="<?php echo e($mekanik->nama); ?>"
                       required>
            </div>

            <div class="mb-3">
                <label>No HP</label>
                <input type="text"
                       name="no_hp"
                       class="form-control"
                       value="<?php echo e($mekanik->no_hp); ?>"
                       required>
            </div>

            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat"
                          class="form-control"
                          rows="3"><?php echo e($mekanik->alamat); ?></textarea>
            </div>

            <div class="mb-3">
                <label>Keahlian</label>
                <input type="text"
                       name="keahlian"
                       class="form-control"
                       value="<?php echo e($mekanik->keahlian); ?>"
                       required>
            </div>

            <button type="submit" class="btn btn-warning">
                Update
            </button>

            <a href="<?php echo e(route('mekanik.index')); ?>" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/mekanik/edit.blade.php ENDPATH**/ ?>