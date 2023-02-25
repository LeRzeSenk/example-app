<a href="<?php echo e(route('genre.create')); ?>">Создать</a>
<?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ol>
        <li>ID:<?php echo e($genre->id); ?></li>
        <li>Название:<?php echo e($genre->name); ?></li>
        <li>Кол-во фильмов:<?php echo e($genre->films()->count()); ?></li>
        <a href="<?php echo e(route('genre.films.show',$genre->id)); ?>">Просмотр фильмов</a>
        <a href="<?php echo e(route('genre.show',$genre->id)); ?>">Перейти</a>
        <a href="<?php echo e(route('genre.edit',$genre->id)); ?>">Редактировать</a>
        <form action="<?php echo e(route('genre.delete',$genre->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <input type="submit" value="Удалить">
        </form>
    </ol>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\Users\festo\PhpstormProjects\untitled\resources\views/genre/index.blade.php ENDPATH**/ ?>