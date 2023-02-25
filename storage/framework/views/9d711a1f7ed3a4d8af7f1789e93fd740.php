<form action="<?php echo e(route('film.store')); ?>" method="POST" enctype="multipart/form-data">
    <input type="text" name="name">
    <input type="file" name="poster_url">
    <select name="genre_ids" multiple>
        <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($genre->id); ?>"><?php echo e($genre->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php echo csrf_field(); ?>
    <input type="submit">
</form>
<?php /**PATH C:\Users\festo\PhpstormProjects\untitled\resources\views/films/form.blade.php ENDPATH**/ ?>