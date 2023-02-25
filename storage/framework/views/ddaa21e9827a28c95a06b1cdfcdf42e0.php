<a href="<?php echo e(route('genre.index')); ?>">Назад</a>
<?php $__currentLoopData = $films; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ol>
        <li>ID:<?php echo e($film->id); ?></li>
        <li>Название:<?php echo e($film->name); ?></li>
        <li>Статус:<?php echo e($film->filmStatus()); ?></li>
        <li>Создано:<?php echo e($film->timeCarbon('M d y')); ?></li>
        <li>Постер URL:<?php echo e($film->poster_url); ?></li>
    </ol>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo e($films->links()); ?>

<?php /**PATH C:\Users\festo\PhpstormProjects\untitled\resources\views/genre/films.blade.php ENDPATH**/ ?>