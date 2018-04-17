<?php $__env->startSection('content'); ?>

<div class="columns">
  <div class="column is-one-third is-offset-one-third m-t-100">
      <div class="card">
             <div class="card-content">
                  <h1 class="title">Log In</h1>
                  <form action="<?php echo e(route('login')); ?>" method="POST" class="">
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
                  <div class="field">
                       <label for="password" class="label">Password</label>
                       <p class="control">
                            <input type="password" name="password" id="email" class="input <?php echo e($errors->has('password')?'is-danger':''); ?>">
                       </p>
                       <?php if($errors->has('password')): ?>
                       <p class="help is-danger"><?php echo e($errors->first('password')); ?></p>
                       <?php endif; ?>
                  </div>
                  <b-checkbox name="remember" class="m-t-20">Remember Me</b-checkbox>
                <button class="button is-primary is-outlined is-fullwidth m-t-30" name="button">Log In</button>
              </form>
             </div> <!--End of Card-Content -->
           </div><!-- End of Card -->
           <h5 class="has-text-centered m-t-20"><a href="<?php echo e(route('password.request')); ?>" class="is-muted">Forgot Password</a>
              </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>