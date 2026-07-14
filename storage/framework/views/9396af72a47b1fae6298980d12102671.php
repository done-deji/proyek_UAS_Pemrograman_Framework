

<?php $__env->startSection('content'); ?>

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between">

        <h4>Data Pembayaran</h4>

        <a href="<?php echo e(route('pembayaran.create')); ?>" class="btn btn-light">
            Tambah Pembayaran
        </a>

    </div>

    <div class="card-body">

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <table class="table table-bordered">

            <thead class="table-dark">

                <tr>

                    <th>No</th>
                    <th>Pelanggan</th>
                    <th>Tanggal Bayar</th>
                    <th>Total</th>
                    <th>Metode</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

            <?php $__empty_1 = true; $__currentLoopData = $pembayarans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pembayaran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <tr>

                <td><?php echo e($loop->iteration); ?></td>

                <td><?php echo e($pembayaran->servis->bookingServis->pelanggan->nama); ?></td>

                <td><?php echo e($pembayaran->tanggal_bayar); ?></td>

                <td>
                    Rp <?php echo e(number_format($pembayaran->total_bayar,0,',','.')); ?>

                </td>

                <td><?php echo e($pembayaran->metode); ?></td>

                <td>

                    <a href="<?php echo e(route('pembayaran.edit',$pembayaran->id)); ?>"
                       class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <form action="<?php echo e(route('pembayaran.destroy',$pembayaran->id)); ?>"
                          method="POST"
                          style="display:inline">

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

                <td colspan="6" class="text-center">

                    Belum ada data pembayaran

                </td>

            </tr>

            <?php endif; ?>

            </tbody>

        </table>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/pembayaran/index.blade.php ENDPATH**/ ?>