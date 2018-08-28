<li class="nav-item {{ Request::is('driver/dashboard*') ? 'active' : '' }}">
  <a class="nav-link" href="{{url('/driver/dashboard')}}">
    <i class="fas fa-fw fa-tachometer-alt"></i>
      <span> My Dashboard </span>
  </a>
</li>
<li class="nav-item {{ Request::is('driver/current*') ? 'active' : '' }}">
  <a class="nav-link" href="{{url('driver/current')}}">
    <i class="fas fa-fw fa-bicycle"></i> 
      <span> Current Task </span>
  </a>
</li>
<li class="nav-item {{ Request::is('driver/logs*') ? 'active' : '' }}">
  <a class="nav-link" href="{{url('driver/logs')}}">
    <i class="fas fa-fw fa-book"></i>
    <span> Your Logs </span>
  </a>
</li>
<li class="nav-item {{ Request::is('driver/profile*') ? 'active' : '' }}">
  <a class="nav-link" href="{{url('driver/profile')}}">
    <i class="fas fa-fw fa-database"></i>
    <span> Your Profile </span>
  </a>
</li>




       