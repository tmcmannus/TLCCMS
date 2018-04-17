<?php $__env->startSection('content'); ?>
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">Manage Users</h1>
        </div>
        <div class="column">
          <a href="<?php echo e(route('users.create')); ?>" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New User</a>
        </div>
      </div>
      <hr class="m-t-0">

      <div class="card userstable">
        <div class="card-content">
          <table class="table is-narrow is-fullwidth">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date Created</th>
                <th>Actions</th>
              </tr>
            </thead>

            <tbody>
              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th><?php echo e($user->id); ?></th>
                  <td><?php echo e($user->name); ?></td>
                  <td><?php echo e($user->email); ?></td>
                  <td><?php echo e($user->created_at->toFormattedDateString()); ?></td>
                  <td><a class="button is-outlined" href="<?php echo e(route('users.edit', $user->id)); ?>">Edit</a></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.manage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>