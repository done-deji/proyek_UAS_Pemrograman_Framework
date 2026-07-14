

<?php $__env->startSection('content'); ?>

<div class="card shadow">

    <div class="card-header bg-success text-white">

        <h4>
            <i class="fa fa-plus"></i>
            Tambah Sparepart
        </h4>

    </div>

    <div class="card-body">

        <form action="<?php echo e(route('sparepart.store')); ?>" method="POST">

            <?php echo csrf_field(); ?>

           <div class="mb-3">
    <label>Kode Sparepart</label>
    <input type="text"
           name="kode"
           class="form-control"
           placeholder="Contoh: SP001"
           required>
</div>

                <label>Nama Sparepart</label>

                <input type="text"
                       name="nama"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label>Harga</label>

                <input type="number"
                       name="harga"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label>Stok</label>

                <input type="number"
                       name="stok"
                       class="form-control"
                       required>

            </div>

            <button class="btn btn-success">
                <i class="fa fa-save"></i> Simpan
            </button>

            <a href="<?php echo e(route('sparepart.index')); ?>" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/sparepart/create.blade.php ENDPATH**/ ?>