<div class="d-flex align-items-stretch">
  <!-- Sidebar Navigation-->
  <nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="{{asset('admincss/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle">
      </div>
      <div class="title">
        <h1 class="h5">Mark Stephen</h1>
        <p>Web Designer</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus-->
    <span class="heading">Main</span>
    <ul class="list-unstyled">

      <li class="{{ Request::is('admin_home') ? 'active' : '' }}">
        <a href="{{url('admin_home')}}"> <i class="icon-home"></i>Home </a>
      </li>

      
      <li class="{{ Request::is('create_room') || Request::is('view_room') ? 'active' : '' }}">

        <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse">
          <i class="icon-windows"></i>Hotel Rooms </a>

        <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
          <li class="{{ Request::is('create_room') ? 'active' : '' }}">
            <a href="{{url('create_room')}}">Add Rooms</a>
          </li>

          <li class="{{ Request::is('view_room') ? 'active' : '' }}">
            <a href="{{url('view_room')}}">View Rooms</a>
          </li>

        </ul>
      </li>


      <li class="{{ Request::is('bookings') ? 'active' : '' }}">
        <a href="{{url('bookings')}}"> <i class="icon-layers"></i>Bookings </a>
      </li>


      <li class="{{ Request::is('view_gallery') ? 'active' : '' }}">
        <a href="{{url('view_gallery')}}"> <i class="icon-presentation-1"></i>Gallery</a>
      </li>


      <li class="{{ Request::is('all_messages') ? 'active' : '' }}">
        <a href="{{url('all_messages')}}"> <i class="icon-mail"></i>Messages</a>
      </li>

    </ul>
  </nav>