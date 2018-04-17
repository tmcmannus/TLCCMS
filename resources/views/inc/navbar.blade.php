<nav class="navbar has-shadow">
  <div class="navbar-brand">
    <a class="is-paddingless" href="{{route('home')}}">
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
        <a class="navbar-item is-tab" href="{{url('home')}}">
          Home
        </a>
        <a class="navbar-item is-tab" href="{{url('about-tlc')}}">
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
      @guest
      <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
      <a href="{{route('register')}}" class="navbar-item is-tab">Register</a>
    @else
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">Hey {{Auth::user()->name}}</a>
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
          <a href="{{route('manage.dashboard')}}" class="navbar-item">
            <span class="icon">
              <i class="fa fa-fw fa-cog m-r-5"></i>
            </span>Manage
          </a>
          <hr class="navbar-divider">
          <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            <span class="icon">
              <i class="fa fa-fw fa-sign-out m-r-5"></i>
            </span>
            Logout
          </a>
          @include('inc.logout')
        </div>
      </div>
    @endguest
  </div>
</div>  <!-- End Navbar-End -->
</div>
</div>
</nav>
