

<?php $__env->startSection('content'); ?>

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

        <h4 class="mb-0">
            <i class="fa fa-gears"></i> Data Sparepart
        </h4>

        <a href="<?php echo e(route('sparepart.create')); ?>" class="btn btn-light">
            <i class="fa fa-plus"></i> Tambah Sparepart
        </a>

    </div>

    <div class="card-body">

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <table class="table table-bordered table-hover">

            <thead class="table-dark">
                <tr>
                    <th width="60">No</th>
                    <th>Nama Sparepart</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>

            <tbody>

            <?php $__empty_1 = true; $__currentLoopData = $spareparts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sparepart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <tr>

                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($sparepart->nama); ?></td>
                <td>Rp <?php echo e(number_format($sparepart->harga,0,',','.')); ?></td>
                <td><?php echo e($sparepart->stok); ?></td>

                <td>

                    <a href="<?php echo e(route('sparepart.edit',$sparepart->id)); ?>"
                       class="btn btn-warning btn-sm">
                        <i class="fa fa-edit"></i>
                    </a>

                    <form action="<?php echo e(route('sparepart.destroy',$sparepart->id)); ?>"
                          method="POST"
                          class="d-inline">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus?')">

                            <i class="fa fa-trash"></i>

                        </button>

                    </form>

                </td>

            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <tr>

                <td colspan="5" class="text-center">
                    Belum ada data sparepart
                </td>

            </tr>

            <?php endif; ?>

            </tbody>

        </table>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/sparepart/index.blade.php ENDPATH**/ ?>