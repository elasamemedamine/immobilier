
<?php $__env->startSection('content'); ?>
 <div class="container">   
    <div class="row">
        <div class="col-lg-11 col-md-12 col-sm-12">
            <div class="p-3 text-center">
                <div class="h3">Welcome to Admin Interface</div>
                <div class="h4 px-2">All Immobilier</div>
                <a class="btn btn-primary text-decoration-none text-white" href="<?php echo e(route('dashboard.create')); ?>"><i class="fa-solid fa-folder-plus"></i> Ajouter Immobilier</a>
                <a class="btn btn-success m-1 text-decoration-none text-white" href="<?php echo e(route('properties.index')); ?>"><i class="fa-solid fa-link"></i> View Store</a>
                <a class="btn btn-secondary m-1 text-decoration-none text-white" href="<?php echo e(route('dashboard.index')); ?>"><i class="fa-solid fa-arrows-rotate"></i> Refresh</a>
                <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-danger" type="submit"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
                </form>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Surface</th>
                                <th>Room Count</th>
                                <th>Price</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dashboard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><img src="<?php echo e(asset('images/' . $dashboard->image)); ?>" class="img-fluid rounded" alt="dashboard Image" style="max-width: 100px;"></td>
                                    <td><?php echo e($dashboard->title); ?></td>
                                    <td><?php echo e($dashboard->description); ?></td>
                                    <td><?php echo e($dashboard->surface); ?> m²</td>
                                    <td><?php echo e($dashboard->room_count); ?></td>
                                    <td><?php echo e($dashboard->price); ?> MAD</td>
                                    <td><?php echo e($dashboard->address); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('dashboard.show', $dashboard->id)); ?>"><i class="fa-solid fa-eye fa-lg" style="color: #5fd534;"></i></a>
                                        <?php echo method_field('GET'); ?>
                                        <a href="<?php echo e(route('dashboard.edit', $dashboard->id)); ?>" class="m-3"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                        <form action="<?php echo e(route('dashboard.destroy', $dashboard->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?')">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" style="border: none; background-color: transparent;">
                                                <i class="fa-solid fa-trash fa-lg" style="color: #cc2828;"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </tbody>
                    </table>
                </div>
                <?php echo e($properties->links()); ?>

            </div>
        </div>
    </div>
 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Desktop\project\immobilier\resources\views/dashboard/index.blade.php ENDPATH**/ ?>