<?php $__env->startSection('title'); ?> <?php echo e('Login'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 px-0">
        <div class="card-body mx-5 px-4">
            <h2 class="card-title text-center pb-4 pt-5">
                <span class="welcome-to fw-bold">Welcome to</span>
                <span class="ic fw-bold">IC</span>
                <span class="food fw-bold">Food</span>
            </h2>
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold" id="email"><?php echo e(__('Email')); ?></label>
                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-bold"><?php echo e(__('Password')); ?></label>
                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="row">
                    <div class="col mb-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                            <label class="form-check-label fw-bold" for="remember">
                                <?php echo e(__('Remember me')); ?>

                            </label>
                        </div>
                    </div>
                    <div class="col mb-6">
                        <?php if(Route::has('password.request')): ?>
                            <a class="btn btn-link fw-bold" id="fgtpass" href="<?php echo e(route('password.request')); ?>">
                                <?php echo e(__('Forgot your password?')); ?>

                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row mb-6 mx-0 mt-2">
                        <button type="submit" class="btn btn-primary fw-bold" id="sub">
                            <?php echo e(__('Login')); ?>

                        </button>
                </div>

                <h5 class="card-title text-center fw-bold py-3">
                    OR
                </h5>

                <div class="row mb-6 mx-0">
                    <!-- tambahkan script di bawah ini untuk membuat tombol signin google -->
                    <a class="btn btn-danger" style="background-color: #4285F4" href="/auth/google">Login With Google</a>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-6 px-0">
        <img src="<?php echo e(url('/images/Component 4.png')); ?>" class="img-fluid" alt="Image"/>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ICFood\resources\views/auth/login.blade.php ENDPATH**/ ?>