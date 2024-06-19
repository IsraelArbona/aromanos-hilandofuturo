<?php $__env->startSection('content'); ?>

    <h4 class="fw-300 c-grey-900 mB-40 text-center">Ingreso al Sistema </h4>

    <form class="form-horizontal" method="post" action="<?php echo e(route('login')); ?>">
        <?php echo e(csrf_field()); ?>


        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <label for="email" class="text-normal text-dark">Correo Electrónico</label>
            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

            <?php if($errors->has('email')): ?>
                <span class="form-text text-danger">
                    <small><?php echo e($errors->first('email')); ?></small>
                </span>
            <?php endif; ?>
        </div>

        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
            <label for="password" class="text-normal text-dark">Contraseña</label>
            <input id="password" type="password" class="form-control" name="password" required>

            <?php if($errors->has('password')): ?>
                <span class="form-text text-danger">
                    <small><?php echo e($errors->first('password')); ?></small>
                </span>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <div class="peers ai-c jc-sb fxw-nw">
                <div class="peer">
                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                        <input type="checkbox" id="remember" name="remember" class="peer" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                        <label for="remember" class=" peers peer-greed js-sb ai-c">
                            <span class="peer peer-greed">Recordar </span>
                        </label>
                    </div>
                </div>
                <div class="peer">
                    <button class="btn btn-primary">Inicio sesión</button>
                </div>
            </div>
        </div>
        <div class="peers ai-c jc-sb fxw-nw">
            <div class="peer">
                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                    ¿Olvidaste tu cuenta?
                </a>
            </div>
            <!--
            <div class="peer">
                <a href="/register" class="btn btn-link">Crear una nueva cuenta</a>
            </div>
            -->
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos/resources/views/auth/login.blade.php ENDPATH**/ ?>