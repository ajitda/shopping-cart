<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Sign In</h1>
            <?php if(count($errors) > 0 ): ?>
                <div class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($error); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('user.signin')); ?>" method="POST">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
                <?php echo e(csrf_field()); ?>

            </form>
            <p>Don't have an account? <a href="<?php echo e(route('user.signup')); ?>">Sign Up Here</a></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>