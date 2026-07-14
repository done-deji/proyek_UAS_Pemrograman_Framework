

<?php $__env->startSection('content'); ?>

<div class="container">

    <div class="d-flex justify-content-between mb-3">
        <h3>Data Kendaraan</h3>

        <a href="<?php echo e(route('kendaraan.create')); ?>" class="btn btn-primary">
            Tambah Kendaraan
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
                <th>Pemilik</th>
                <th>Merk</th>
                <th>Tipe</th>
                <th>Plat Nomor</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>

        </thead>

        <tbody>

            <?php $__empty_1 = true; $__currentLoopData = $kendaraans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kendaraan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <tr>

                <td><?php echo e($loop->iteration); ?></td>

                <td><?php echo e($kendaraan->pelanggan->nama); ?></td>

                <td><?php echo e($kendaraan->merk); ?></td>

                <td><?php echo e($kendaraan->tipe); ?></td>

                <td><?php echo e($kendaraan->plat_nomor); ?></td>

                <td><?php echo e($kendaraan->tahun); ?></td>

                <td>

                    <a href="<?php echo e(route('kendaraan.edit',$kendaraan->id)); ?>"
                        class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="<?php echo e(route('kendaraan.destroy',$kendaraan->id)); ?>"
                          method="POST"
                          style="display:inline;">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin?')">

                            Hapus

                        </button>

                    </form>

                </td>

            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <tr>

                <td colspan="7" class="text-center">
                    Belum ada data kendaraan
                </td>

            </tr>

            <?php endif; ?>

        </tbody>

    </table>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/kendaraan/index.blade.php ENDPATH**/ ?>