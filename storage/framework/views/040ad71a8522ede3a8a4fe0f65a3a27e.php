

<?php $__env->startSection('buku.content'); ?>

<div class="container mt-4">

    <div class="card">

        <div class="card-header bg-primary text-white">
            <h4>Tambah Buku</h4>
        </div>

        <div class="card-body">

            <?php if($errors->any()): ?>

                <div class="alert alert-danger">

                    <ul class="mb-0">

                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <li><?php echo e($error); ?></li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>

                </div>

            <?php endif; ?>

            <form action="/buku" method="POST">

                <?php echo csrf_field(); ?>

                <div class="mb-3">

                    <label class="form-label">
                        Judul Buku
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control"
                           value="<?php echo e(old('judul')); ?>"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Penulis
                    </label>

                    <input type="text"
                           name="penulis"
                           class="form-control"
                           value="<?php echo e(old('penulis')); ?>"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Penerbit
                    </label>

                    <input type="text"
                           name="penerbit"
                           class="form-control"
                           value="<?php echo e(old('penerbit')); ?>"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Tahun Terbit
                    </label>

                    <input type="number"
                           name="tahun_terbit"
                           class="form-control"
                           value="<?php echo e(old('tahun_terbit')); ?>"
                           required>

                </div>

                <button type="submit"
                        class="btn btn-success">
                    Simpan
                </button>

                <a href="/buku"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\crud-app\resources\views/buku/create.blade.php ENDPATH**/ ?>