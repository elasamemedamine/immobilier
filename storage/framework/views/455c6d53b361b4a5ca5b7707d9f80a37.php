<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid py-2">
    <a class="navbar-brand fw-bold " href="<?php echo e(route('properties.index')); ?>">Immobilier Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo e(route('properties.index')); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo e(route('ourservice')); ?>">Our Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="https://wa.me/078783909"  target="_blank">Contact us</a>
        </li>
      </ul>
    
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="<?php echo e(route('dashboard.index')); ?>" class="text-decoration-none text-white"> <button class="btn btn-success " type="button"><i class="fa-solid fa-user-gear"></i> Espace admin</button></a>
  </div>
  </div>
 
</nav>

<?php /**PATH C:\Users\LENOVO\Desktop\project\immobilier\resources\views/properties/navbar.blade.php ENDPATH**/ ?>