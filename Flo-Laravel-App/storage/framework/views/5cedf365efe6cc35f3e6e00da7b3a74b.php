
<?php $__env->startSection('title','Flo Test'); ?>
<?php $__env->startSection('content'); ?>
<main>
    <div class="container py-4">
        <h2> LISTADO DE PROPIETARIOS</h2>
        <a href="<?php echo e(url('propietarios/create')); ?>" class="btn btn-primary btn-sm"> Nuevo Registro</a>
    </div>
</main>    

<?php echo $__env->make('layout/template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Flo-Laravel-App\resources\views/propietarios/index.blade.php ENDPATH**/ ?>