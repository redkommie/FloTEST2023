
<?php $__env->startSection('title','Flo Test'); ?>
<?php $__env->startSection('content'); ?>
<main>
    <div class="container py-4">
        <h2> REGISTRAR PROPIETARIO </h2>
        <form action="<?php echo e(url('propietarios')); ?>" method="post">
           

            <?php echo csrf_field(); ?>
            <div class="mb-3 row">
                <label for="licencia" class="col-sm-2 col-form-label"> Licencia</label>
                <div class="col-sm-5">
                   <input type="text" class="form-control" name="licencia" id="licencia" value="<?php echo e(old ('licencia')); ?>" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label"> Nombre</label>
                <div class="col-sm-5">
                   <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo e(old ('nombre')); ?>" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="direccion" class="col-sm-2 col-form-label">Direccion</label>
                <div class="col-sm-5">
                   <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo e(old ('direccion')); ?>" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label"> Email</label>
                <div class="col-sm-5">
                   <input type="text" class="form-control" name="email" id="email" value="<?php echo e(old ('email')); ?>" >
                </div>
            </div>
            <a href="<?php echo e(url('propietarios')); ?>" class="btn btn-secondary btn-sm">Regresar</a>

             <button type="submit" class="btn btn-success">Guardar</button>
             

        </form>
    </div>
</main> 
<?php echo $__env->make('layout/template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Flo-Laravel-App\resources\views/propietarios/create.blade.php ENDPATH**/ ?>