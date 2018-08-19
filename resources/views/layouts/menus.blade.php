<li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
  <a class="nav-link" href="{{url('/dashboard')}}">
    <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
  </a>
</li>
<li class="nav-item {{ Request::is('customer/request*') ? 'active' : '' }}">
  <a class="nav-link" href="{{url('customer/request')}}">
    <i class="fas fa-fw fa-bicycle"></i> 
      <span> Request an Errand </span>
  </a>
</li>
<li class="nav-item {{ Request::is('customer/track*') ? 'active' : '' }}">
  <a class="nav-link" href="{{url('customer/track')}}">
    <i class="fas fa-fw fa-book"></i>
    <span>Track your Request </span>
  </a>
</li>
<li class="nav-item {{ Request::is('customer/logs*') ? 'active' : '' }}">
  <a class="nav-link" href="{{url('customer/logs')}}">
    <i class="fas fa-fw fa-database"></i>
    <span> Your Errand Logs</span>
  </a>
</li>
<li class="nav-item {{ Request::is('customer/update*') ? 'active' : '' }}">
  <a class="nav-link" href="{{url('customer/update')}}">
    <i class="fas fa-fw fa-book"></i>
    <span> Update Your Profile</span>
  </a>
</li>




       