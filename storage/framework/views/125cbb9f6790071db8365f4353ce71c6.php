<a href="<?php echo e(route('film.create')); ?>">Создать</a>
<?php if($film_status): ?>
    <a href="<?php echo e(route('film.index')); ?>">Не Опубликованные</a>
<?php else: ?>
    <a href="<?php echo e(route('film.published.index')); ?>">Опубликованные</a>
<?php endif; ?>
<?php $__currentLoopData = $films; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ol>
        <li>ID:<?php echo e($film->id); ?></li>
        <li>Название:<?php echo e($film->name); ?></li>
        <li>Жанры:<?php $__currentLoopData = $film->genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($genre->name); ?>,
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
        <img src="<?php echo e($film->poster()); ?>" alt="poster"><br>
        <a href="<?php echo e(route('film.show',$film->id)); ?>">Перейти</a>
        <a href="<?php echo e(route('film.edit',$film->id)); ?>">Редактировать</a>
        <form action="<?php echo e(route('film.delete',$film->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <input type="submit" value="Удалить">
        </form>
    </ol>
    <br><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo e($films->links()); ?>

<?php /**PATH C:\Users\festo\PhpstormProjects\untitled\resources\views/films/index.blade.php ENDPATH**/ ?>