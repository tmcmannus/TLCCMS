<nav class="navbar has-shadow">
  <div class="navbar-brand">
    <a class="is-paddingless" href="<?php echo e(route('home')); ?>">
      <img src="/images/logo/TLCLogo.png" alt="Training In Life Choices" width="140" height="140" class="m-l-50">
    </a>
    <button class="button navbar-burger" data-target="navMenu" onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">>
      <span></span>
      <span></span>
      <span></span>
    </button>
</div>
  <div class="navbar-menu">
    <div class="navbar-start">
        <a class="navbar-item is-tab" href="<?php echo e(url('home')); ?>">
          Home
        </a>
        <a class="navbar-item is-tab" href="<?php echo e(url('about-tlc')); ?>">
          About TLC
        </a>
        <a class="navbar-item is-tab" href="#">
          Our Services
        </a>
        <a class="navbar-item is-tab" href="#">
          Meet The Team
        </a>
        <a class="navbar-item is-tab" href="#">
          Upcoming Events
        </a>
        <a class="navbar-item is-tab" href="#">
          Contact Us
        </a>
    </div>
    <div class="navbar-end navbar-menu">
      <?php if(auth()->guard()->guest()): ?>
      <a href="<?php echo e(route('login')); ?>" class="navbar-item is-tab">Login</a>
      <a href="<?php echo e(route('register')); ?>" class="navbar-item is-tab">Register</a>
    <?php else: ?>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">Hey <?php echo e(Auth::user()->name); ?></a>
        <div class="navbar-dropdown is-right" >
          <a href="#" class="navbar-item">
            <span class="icon">
              <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
            </span>Profile
          </a>

          <a href="#" class="navbar-item">
            <span class="icon">
              <i class="fa fa-fw fa-bell m-r-5"></i>
            </span>Notifications
          </a>
          <a href="<?php echo e(route('manage.dashboard')); ?>" class="navbar-item">
            <span class="icon">
              <i class="fa fa-fw fa-cog m-r-5"></i>
            </span>Manage
          </a>
          <hr class="navbar-divider">
          <a href="<?php echo e(route('logout')); ?>" class="navbar-item" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            <span class="icon">
              <i class="fa fa-fw fa-sign-out m-r-5"></i>
            </span>
            Logout
          </a>
          <?php echo $__env->make('inc.logout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>  <!-- End Navbar-End -->
</div>
</div>
</nav>
