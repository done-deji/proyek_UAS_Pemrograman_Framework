

<?php $__env->startSection('content'); ?>

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between">

        <h4>Data Servis</h4>

        <a href="<?php echo e(route('servis.create')); ?>" class="btn btn-light">
            Tambah Servis
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
                    <th>Booking</th>
                    <th>Mekanik</th>
                    <th>Tanggal</th>
                    <th>Biaya Jasa</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

            <?php $__empty_1 = true; $__currentLoopData = $servis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <tr>

                <td><?php echo e($loop->iteration); ?></td>

                <td>
                    <?php echo e($item->bookingServis->pelanggan->nama); ?>

                </td>

                <td>
                    <?php echo e($item->mekanik->nama); ?>

                </td>

                <td>
                    <?php echo e($item->tanggal_servis); ?>

                </td>

                <td>
                    Rp <?php echo e(number_format($item->biaya_jasa,0,',','.')); ?>

                </td>

                <td>

                    <a href="<?php echo e(route('servis.edit',$item->id)); ?>"
                        class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <form action="<?php echo e(route('servis.destroy',$item->id)); ?>"
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

                    Belum ada data servis

                </td>

            </tr>

            <?php endif; ?>

            </tbody>

        </table>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\bengkel\resources\views/servis/index.blade.php ENDPATH**/ ?>