

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-4">
                <h1><?php echo e($property->title); ?></h1>
                <div class="property-details">
                    <p><strong>Description:</strong> <?php echo e($property->description); ?></p>
                    <p><strong>Surface:</strong> <?php echo e($property->surface); ?> m²</p>
                    <p><strong>Room Count:</strong> <?php echo e($property->room_count); ?></p>
                    <p><strong>Price:</strong> $<?php echo e($property->price); ?></p>
                    <p><strong>Address:</strong> <?php echo e($property->address); ?></p>
                    <p><strong>Phone Number:</strong> <?php echo e($property->phone_number); ?></p>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <div class="card">
                    <img src="<?php echo e(asset('images/' . $property->image)); ?>" class="card-img-top img-fluid" alt="Property Image">
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit"><a class="text-decoration-none text-white" href="<?php echo e(route('dashboard.index')); ?>">Back</a></button>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Desktop\project\immobilier\resources\views/dashboard/show.blade.php ENDPATH**/ ?>