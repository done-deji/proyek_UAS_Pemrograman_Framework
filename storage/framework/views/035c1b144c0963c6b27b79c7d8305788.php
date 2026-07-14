

<?php $__env->startSection('content'); ?>

<div class="container">

    <div class="d-flex justify-content-between mb-3">
        <h3>Data Mekanik</h3>

        <a href="<?php echo e(route('mekanik.create')); ?>" class="btn btn-primary">
            Tambah Mekanik
        </a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table class="table table-bordered">

        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Keahlian</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

        <?php $__empty_1 = true; $__currentLoopData = $mekaniks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mekanik): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <tr>

            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($mekanik->nama); ?></td>
            <td><?php echo e($mekanik->no_hp); ?></td>
            <td><?php echo e($mekanik->alamat); ?></td>
            <td><?php echo e($mekanik->keahlian); ?></td>

            <td>

                <a href="<?php echo e(route('mekanik.edit',$mekanik->id)); ?>"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="<?php echo e(route('mekanik.destroy',$mekanik->id)); ?>"
                      method="POST"
                      style="display:inline">

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin ingin menghapus?')">

                        Hapus

                    </button>

                </form>

            </td>

        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <tr>

            <td colspan="6" class="text-center">
                Belum ada data mekanik
            </td>

        </tr>

        <?php endif; ?>

        </tbody>

    </table>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/mekanik/index.blade.php ENDPATH**/ ?>