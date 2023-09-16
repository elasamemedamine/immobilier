
<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
    <div class="my-5 px-5 justify-content-center">
        <div class="card card-body bg-light">
        <div class="h3">Edit Immobilier</div>
        <form action="<?php echo e(route('dashboard.update', $property->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo e($property->title); ?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required><?php echo e($property->description); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="surface" class="form-label">Surface</label>
                <input type="number" class="form-control" id="surface" name="surface" value="<?php echo e($property->surface); ?>" required>
            </div>
            <div class="mb-3">
                <label for="room_count" class="form-label">Number of Rooms</label>
                <input type="number" class="form-control" id="room_count" name="room_count" value="<?php echo e($property->room_count); ?>" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="<?php echo e($property->price); ?>" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo e($property->address); ?>" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo e($property->phone_number); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a class="btn btn-primary text-decoration-none text-white" href="<?php echo e(route('dashboard.index')); ?>">Back</a>

        </form>
    </div>
</div>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Desktop\project\immobilier\resources\views/dashboard/edit.blade.php ENDPATH**/ ?>