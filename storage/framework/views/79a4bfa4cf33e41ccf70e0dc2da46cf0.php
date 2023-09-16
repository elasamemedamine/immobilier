<!-- resources/views/biens_immobiliers/index.blade.php -->



<?php $__env->startSection('content'); ?>
    <h1>Biens Immobiliers</h1>

    <div class="row">
        <?php $__currentLoopData = $biensImmobiliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bienImmobilier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="<?php echo e(asset($bienImmobilier->image)); ?>" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($bienImmobilier->titre); ?></h5>
                        <p class="card-text"><?php echo e($bienImmobilier->description); ?></p>
                        <p class="card-text">Surface: <?php echo e($bienImmobilier->surface); ?></p>
                        <p class="card-text">Nombre de pièces: <?php echo e($bienImmobilier->nombre_pieces); ?></p>
                        <p class="card-text">Prix: <?php echo e($bienImmobilier->prix); ?></p>
                        <p class="card-text">Adresse: <?php echo e($bienImmobilier->adresse); ?></p>
                        <a href="<?php echo e(route('biens-immobiliers.show', $bienImmobilier->id)); ?>" class="btn btn-primary">Voir</a>
                        <a href="<?php echo e(route('biens-immobiliers.edit', $bienImmobilier->id)); ?>" class="btn btn-secondary">Modifier</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Desktop\project\immobilier\resources\views/biens_immobiliers/index.blade.php ENDPATH**/ ?>