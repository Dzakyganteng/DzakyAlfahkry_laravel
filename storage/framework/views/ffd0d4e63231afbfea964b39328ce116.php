

<?php $__env->startSection('buku.content'); ?>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Data Buku</h2>

        <a href="/buku/create" class="btn btn-primary">
            Tambah Buku
        </a>
    </div>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th width="200">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($b->judul); ?></td>
                <td><?php echo e($b->penulis); ?></td>
                <td><?php echo e($b->penerbit); ?></td>
                <td><?php echo e($b->tahun_terbit); ?></td>

                <td>
                    <a href="/buku/<?php echo e($b->id); ?>/edit"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="/buku/<?php echo e($b->id); ?>"
                          method="POST"
                          class="d-inline">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit"
                                class="btn btn-danger btn-sm">
                            Hapus
                        </button>

                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\crud-app\resources\views/buku/index.blade.php ENDPATH**/ ?>