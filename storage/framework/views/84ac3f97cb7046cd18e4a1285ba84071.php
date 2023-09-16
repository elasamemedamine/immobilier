<!-- resources/views/biens_immobiliers/create.blade.php -->



<?php $__env->startSection('content'); ?>
    <h1>Create Bien Immobilier</h1>

    <form action="<?php echo e(route('biens-immobiliers.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div>
            <label for="titre">Titre:</label>
            <input type="text" name="titre" id="titre" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <div>
            <label for="surface">Surface:</label>
            <input type="number" name="surface" id="surface" required>
        </div>
        <div>
            <label for="nombre_pieces">Nombre de pièces:</label>
            <input type="number" name="nombre_pieces" id="nombre_pieces" required>
        </div>
        <div>
            <label for="prix">Prix:</label>
            <input type="number" name="prix" id="prix" required>
        </div>
        <div>
            <label for="adresse">Adresse:</label>
            <input type="text" name="adresse" id="adresse" required>
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" required>
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Desktop\project\immobilier\resources\views/biens_immobiliers/create.blade.php ENDPATH**/ ?>