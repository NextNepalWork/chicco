<style>
    .active-menu{
        background-color: var(--lightblue) !important;
      
    }
</style>
<?php
$segment = Request::segment(1);

?>
<ul class="list-group">
    <li class="list-group-item {{ $segment == 'profile' ? 'active-menu': '' }}">
        <a class="nav-link active" href="/profile">
            <i class="fas fa-user"></i>
            {{ trans('lables.profile-side-menue-profile') }}
        </a>
    </li>
    <li class="list-group-item {{ $segment == 'wishlist' ? 'active-menu': ''}}">
        <a class="nav-link" href="{{ url('/wishlist') }}">
            <i class="fas fa-heart"></i>
            {{ trans('lables.profile-side-menue-wishlist') }}
        </a>
    </li>
    <li class="list-group-item {{ $segment == 'orders' ? 'active-menu': '' }}">
        <a class="nav-link" href="{{ url('/orders') }}">
            <i class="fas fa-shopping-cart"></i>
            {{ trans('lables.profile-side-menue-orders') }}
        </a>
    </li>
    <li class="list-group-item {{ $segment == 'shipping-address' ? 'active-menu': '' }}">
        <a class="nav-link" href="{{ url('/shipping-address') }}">
            <i class="fas fa-map-marker-alt"></i>
            {{ trans('lables.profile-side-menue-shipping-address') }}
        </a>
    </li>
    <li class="list-group-item">
        <a class="nav-link log_out" href="javascript:void(0)" >
            <i class="fas fa-power-off"></i>
            {{ trans('lables.profile-side-menue-logout') }}

        </a>
    </li>
    <li class="list-group-item {{ $segment == 'change-password' ? 'active-menu': '' }}">
        <a class="nav-link" href="{{ url('/change-password') }}">
            <i class="fas fa-unlock-alt"></i>
            {{ trans('lables.profile-side-menue-change-password') }}

        </a>
    </li>
</ul>