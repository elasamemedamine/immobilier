

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-7">
    <h1>Ajouter Immoubilier</h1>

    <form action="<?php echo e(route('properties.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="surface" class="form-label">Surface</label>
            <input type="number" class="form-control" id="surface" name="surface" required>
        </div>
        <div class="mb-3">
            <label for="room_count" class="form-label">Number of Rooms</label>
            <input type="number" class="form-control" id="room_count" name="room_count" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('properties.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Desktop\project\immobilier\resources\views/properties/create.blade.php ENDPATH**/ ?>