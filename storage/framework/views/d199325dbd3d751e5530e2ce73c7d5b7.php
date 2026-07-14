

<?php $__env->startSection('content'); ?>

<div class="card shadow">

    <div class="card-header bg-warning text-dark">
        <h4>Edit Sparepart</h4>
    </div>

    <div class="card-body">

        <form action="<?php echo e(route('sparepart.update', $sparepart->id)); ?>" method="POST">

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-3">
                <label>Kode Sparepart</label>
                <input type="text"
                       name="kode"
                       class="form-control"
                       value="<?php echo e($sparepart->kode); ?>"
                       required>
            </div>

            <div class="mb-3">
                <label>Nama Sparepart</label>
                <input type="text"
                       name="nama"
                       class="form-control"
                       value="<?php echo e($sparepart->nama); ?>"
                       required>
            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input type="number"
                       name="harga"
                       class="form-control"
                       value="<?php echo e($sparepart->harga); ?>"
                       required>
            </div>

            <div class="mb-3">
                <label>Stok</label>
                <input type="number"
                       name="stok"
                       class="form-control"
                       value="<?php echo e($sparepart->stok); ?>"
                       required>
            </div>

            <button class="btn btn-warning">
                Update
            </button>

            <a href="<?php echo e(route('sparepart.index')); ?>" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/sparepart/edit.blade.php ENDPATH**/ ?>