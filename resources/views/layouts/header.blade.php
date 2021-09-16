  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-primary navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="">
              <img class="brand-logo" alt="" src="{{ asset('register_form\assets\images\youth.png')}}" width="100%">
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
        </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
         {{--      <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <span class="user-name text-bold-700">Admin</span>
                </span>
              </a> --}}
            </li>
            <li>
              <br>
              <br>
             <a class="" style="color:#fff;" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="ft-power"></i> Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
