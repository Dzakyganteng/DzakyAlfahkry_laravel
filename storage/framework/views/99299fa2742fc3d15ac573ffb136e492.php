

<?php $__env->startSection('buku.content'); ?>

<div class="container mt-4">

    <div class="card">

        <div class="card-header bg-warning">
            <h4>Edit Buku</h4>
        </div>

        <div class="card-body">

            <form action="/buku/<?php echo e($buku->id); ?>"
                  method="POST">

                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="mb-3">
                    <label class="form-label">
                        Judul Buku
                    </label>

                    <input type="text"
                           name="judul"
                           value="<?php echo e($buku->judul); ?>"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Penulis
                    </label>

                    <input type="text"
                           name="penulis"
                           value="<?php echo e($buku->penulis); ?>"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Penerbit
                    </label>

                    <input type="text"
                           name="penerbit"
                           value="<?php echo e($buku->penerbit); ?>"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Tahun Terbit
                    </label>

                    <input type="number"
                           name="tahun_terbit"
                           value="<?php echo e($buku->tahun_terbit); ?>"
                           class="form-control">
                </div>

                <button type="submit"
                        class="btn btn-primary">
                    Update
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\crud-app\resources\views/buku/edit.blade.php ENDPATH**/ ?>