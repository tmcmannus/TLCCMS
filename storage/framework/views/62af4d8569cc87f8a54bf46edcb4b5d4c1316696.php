<?php $__env->startSection('content'); ?>


<div class="columns">
  <div class="column is-one-third is-offset-one-third m-t-100">
      <div class="card">
             <div class="card-content">
                  <h1 class="title">Register</h1>
                  <form action="<?php echo e(route('register')); ?>" method="POST" class="">
                    <?php echo e(csrf_field()); ?>

                    <div class="field">
                         <label for="name" class="label">Full Name</label>
                         <p class="control">
                              <input type="text" name="name" id="name" placeholder="Full Name" class="input <?php echo e($errors->has('name')?'is-danger':''); ?>" value="<?php echo e(old('name')); ?>" required>
                         </p>
                       <?php if($errors->has('name')): ?>
                         <p class="help is-danger"><?php echo e($errors->first('name')); ?></p>
                         <?php endif; ?>
                    </div>
                  <div class="field">
                       <label for="email" class="label">Email Address</label>
                       <p class="control">
                            <input type="text" name="email" id="email" placeholder="name@example.com" class="input <?php echo e($errors->has('email')?'is-danger':''); ?>" value="<?php echo e(old('email')); ?>" required>
                       </p>
                     <?php if($errors->has('email')): ?>
                       <p class="help is-danger"><?php echo e($errors->first('email')); ?></p>
                       <?php endif; ?>
                  </div>
                  <div class="columns">
                    <div class="column">
                  <div class="field">
                       <label for="password" class="label">Password</label>
                       <p class="control">
                            <input type="password" name="password" id="email" class="input <?php echo e($errors->has('password')?'is-danger':''); ?>" required>
                       </p>
                       <?php if($errors->has('password')): ?>
                       <p class="help is-danger"><?php echo e($errors->first('password')); ?></p>
                       <?php endif; ?>
                  </div>
                </div>

                <div class="columns">
                  <div class="column">
                  <div class="field">
                       <label for="password_confirmation" class="label">Confirm Password</label>
                       <p class="control">
                            <input type="password" name="password" id="email" class="input <?php echo e($errors->has('password_confirmation')?'is-danger':''); ?>" required>
                       </p>
                       <?php if($errors->has('password')): ?>
                       <p class="help is-danger"><?php echo e($errors->first('password')); ?></p>
                       <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
                <button class="button is-primary is-outlined is-fullwidth m-t-30" name="button">Register</button>
              </form>
             </div> <!--End of Card-Content -->
           </div><!-- End of Card -->
           <h5 class="has-text-centered m-t-20"><a href="<?php echo e(route('login')); ?>" class="is-muted">Already Have An Account?</a>

              </div>
</div>






<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Register')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>