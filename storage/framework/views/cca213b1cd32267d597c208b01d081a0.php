
<?php $__env->startSection('content'); ?>
<div class="row">
<div class="p-5 text-center">
    <div class="h3">Immobilier.shop Agency</div>
    <span class="fw-bold">Immobilier.shop Agency is a real estate agency that specializes in property transactions and services. With a focus on the real estate market, their main objective is to assist clients in buying, selling, renting, or investing in properties
    </div>
<div class="col-lg-9">

</span>
<div class="h4 px-2">Les derniers biens</div>
    <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card mb-3" >
  <div class="row g-0">
    <div class="col-md-5">
      <img src="<?php echo e(asset('images/' . $property->image)); ?>" class="img-fluid rounded-start" alt="Immobiler.shop">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h5 class="card-title"><?php echo e($property->title); ?> | <?php echo e($property->price); ?> MAD</h5>
        <p class="card-text"><?php echo e($property->description); ?></p>
        Surface: <?php echo e($property->surface); ?> m² | Rooms: <?php echo e($property->room_count); ?><br>
        <i class="fa-solid fa-location-dot fa-lg" style="color: #000000;"></i> <?php echo e($property->address); ?> <br>
        <a href="https://wa.me/<?php echo e($property->phone_number); ?>" class="text-decoration-none btn btn-success mt-1" target="_blank"><i class="bi bi-whatsapp"></i> Contact</a>
        <a href="<?php echo e(route('properties.show', $property->id)); ?>" class="btn btn-warning mt-1"><i class="fa-solid fa-eye" style="color: #000000;"></i> View article</a>
        <p class="card-text float-end mt-4"><small class="text-body-secondary"><i class="fa-regular fa-clock"></i>  <?php echo e($property->created_at->format('Y-m-d')); ?></small></p>
    </div>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="mt-3">
<?php echo e($properties->links()); ?>

 </div>
    </div>
    <!-- filter and searsh -->
    <div class="col-lg-3 mt-4">

   <!-- Search     -->
   <div class="mt-3">
   <form action="<?php echo e(route('properties.index')); ?>" method="GET">
    <div class="input-group mb-3">
        <input type="text" name="search" class="form-control" placeholder="Enter Article name" value="<?php echo e(request('search')); ?>" required>
            <button class="btn btn-primary" type="submit">Search</button>
    </div>
    </div>
</form>


<!-- filter by price -->
<div class="my-3">
    <form action="<?php echo e(route('properties.index')); ?>" method="GET">
        <div class="input-group mb-3">
            <input type="number" name="price" min="0" class="form-control" placeholder="your budget" aria-label="Max Price" required>
            <button class="btn btn-primary" type="submit">Filter</button>
        </div>
    </form>
</div>

<!-- filter by surface  -->
<div class="mt-3">
    <form action="<?php echo e(route('properties.index')); ?>" method="GET">
        <div class="input-group mb-3">
            <input type="number" min="0" name="surface" class="form-control" placeholder="Min Surface" aria-label="Min Surface" required>
            <button class="btn btn-primary" type="submit">Filter</button>
        </div>
    </form>
</div>

<!-- delete filter  -->
<div class="mt-3 text-center">
<a href="<?php echo e(route('properties.index')); ?>" class="btn btn-danger ">Delete Filter</a> 
</div>


    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('properties.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Desktop\project\immobilier\resources\views/properties/index.blade.php ENDPATH**/ ?>