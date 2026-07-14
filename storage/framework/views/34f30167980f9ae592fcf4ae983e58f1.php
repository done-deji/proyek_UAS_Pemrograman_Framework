

<?php $__env->startSection('content'); ?>

<div class="container">

    <h3>Tambah Mekanik</h3>

    <form action="<?php echo e(route('mekanik.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text"
                   name="nama"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text"
                   name="no_hp"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat"
                      class="form-control"
                      required></textarea>
        </div>

        <div class="mb-3">
            <label>Keahlian</label>

            <select name="keahlian"
                    class="form-control">

                <option value="Mesin">Mesin</option>
                <option value="Kelistrikan">Kelistrikan</option>
                <option value="Body Repair">Body Repair</option>
                <option value="AC Mobil">AC Mobil</option>

            </select>

        </div>

        <button class="btn btn-success">
            Simpan
        </button>

        <a href="<?php echo e(route('mekanik.index')); ?>"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/mekanik/create.blade.php ENDPATH**/ ?>