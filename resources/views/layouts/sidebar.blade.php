 <div class="main-menu menu-fixed menu-light menu-accordion  menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="{{ url('home') }}"><i class="la la-home"></i><span class="menu-title">Dashboard</span></a>
        </li>

          <li class=" nav-item"><a href="{{ url('admin-create') }}"><i class="la la-user"></i><span class="menu-title">Admin Create</span></a>
        </li>
 
        <li class=" navigation-header">
          <span>Master File</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
          data-placement="right" data-original-title="Layouts"></i>
        </li>

        <li class="nav-item">
          <a href="{{ url('rooms') }}"><i class="la la-text-height"></i>
            <span class="menu-title">Add Rooms</span>
          </a>
        </li>
          <li class=" nav-item">
          <a href="{{ url('customer-reg') }}"><i class="la la-text-height"></i>
            <span class="menu-title">Add Customer</span>
          </a>
        </li>
        <li class=" nav-item">
          <a href="{{ url('booking') }}"><i class="la la-text-height"></i>
            <span class="menu-title">Add Booking</span>
          </a>
        </li>
        <li class=" nav-item">
          <a href="{{ url('end-booking') }}"><i class="la la-text-height"></i>
            <span class="menu-title">End Booking</span>
          </a>
        </li>
        <li class=" nav-item">
          <a href="{{ url('booking-room') }}"><i class="la la-text-height"></i>
            <span class="menu-title">Now Using Rooms</span>
          </a>
        </li>
      </ul>
    </div>
  </div>

  