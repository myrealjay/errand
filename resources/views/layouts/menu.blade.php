<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-tags"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('customerinfos*') ? 'active' : '' }}">
    <a href="{!! route('customerinfos.index') !!}"><i class="fa fa-university"></i><span>Customers info</span></a>
</li>

<li class="{{ Request::is('drivers*') ? 'active' : '' }}">
    <a href="{!! route('drivers.index') !!}"><i class="fa fa-database"></i><span>Drivers</span></a>
</li>
<li class="{{ Request::is('driver-request*') ? 'active' : '' }}">
    <a href="{!! url('driver-request') !!}"><i class="fa fa-paperclip"></i><span>Become a Driver Request</span></a>
</li>

