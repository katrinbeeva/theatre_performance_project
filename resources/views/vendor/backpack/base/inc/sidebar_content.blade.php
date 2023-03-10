{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-th-list"></i> Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('performance') }}"><i class="nav-icon la la-th-list"></i> Performance</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('venue') }}"><i class="nav-icon la la-th-list"></i> Venues</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('ticket') }}"><i class="nav-icon la la-th-list"></i> Tickets</a></li>
