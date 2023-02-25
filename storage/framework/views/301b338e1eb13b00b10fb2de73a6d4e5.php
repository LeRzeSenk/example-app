<a href="<?php echo e(route('film.index')); ?>">Назад</a><br>
<ol>
    <li>ID:<?php echo e($film->id); ?></li>
    <li>Название:<?php echo e($film->name); ?></li>
    <li>Жанры:<?php $__currentLoopData = $film->genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($genre->name); ?>,
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
    <img src="<?php echo e(asset('storage/default.jpg')); ?>" alt="poster"><br>
    <a href="<?php echo e(route('film.show',$film->id)); ?>">Просмотр фильмов</a>
    <a href="<?php echo e(route('film.show',$film->id)); ?>">Перейти</a>
    <a href="<?php echo e(route('film.edit',$film->id)); ?>">Редактировать</a>
    <form action="<?php echo e(route('film.delete',$film->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <input type="submit" value="Удалить">
    </form>
</ol>
<?php /**PATH C:\xampp\htdocs\resources\views/films/show.blade.php ENDPATH**/ ?>