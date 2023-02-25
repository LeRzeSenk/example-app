<form action="<?php echo e(route('film.update',$film->id)); ?>" method="POST" formenctype="multipart/form-data">
    <input type="text" name="name" value="<?php echo e($film->name); ?>">
    <input type="file">
    <select name="genre_ids" multiple>
        <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($genre->id); ?>"><?php echo e($genre->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <select name="status">
        <?php $__currentLoopData = $film->statusList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status_id => $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($status_id); ?>"><?php echo e($status); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php echo method_field('PATCH'); ?>
    <?php echo csrf_field(); ?>
    <input type="submit">
</form>
<?php /**PATH C:\xampp\htdocs\resources\views/films/edit.blade.php ENDPATH**/ ?>