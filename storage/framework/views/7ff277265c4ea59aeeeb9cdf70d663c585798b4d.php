<?php $__env->startSection('content'); ?>
<?php if(session('status')): ?>
    <div class="notification is-success">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>

<div class="columns">
  <div class="column is-one-third is-offset-one-third m-t-100">
      <div class="card">
             <div class="card-content">
                  <h1 class="title">Forgot Password</h1>
                  <form action="<?php echo e(route('password.email')); ?>" method="POST" class="">
                    <?php echo e(csrf_field()); ?>

                  <div class="field">
                       <label for="email" class="label">Email Address</label>
                       <p class="control">
                            <input type="text" name="email" id="email" placeholder="name@example.com" class="input <?php echo e($errors->has('email')?'is-danger':''); ?>" value="<?php echo e(old('email')); ?>">
                       </p>
                     <?php if($errors->has('email')): ?>
                       <p class="help is-danger"><?php echo e($errors->first('email')); ?></p>
                       <?php endif; ?>
                  </div>

                <button class="button is-primary is-outlined is-fullwidth m-t-30" name="button">Get Reset Link</button>
              </form>
             </div> <!--End of Card-Content -->
           </div><!-- End of Card -->
           <h5 class="has-text-centered m-t-20"><a href="<?php echo e(route('login')); ?>" class="is-muted">Back To Login</a>
              </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>