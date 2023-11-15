<div class="menu">
    <div class="menu-header">
        <a href="index.html" class="menu-header-logo">
           <h3>Googles Ecommerce</h3>
        </a>
        <a href="index.html" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    <img src="{{ asset('admin/assets/images/user/man_avatar3.jpg') }}"
                         class="rounded-circle" alt="image">
                </div>
                <div>
                    <div class="fw-bold">{{ \Illuminate\Support\Facades\Auth::user()->name }}</div>
                    <small class="text-muted">{{ ucfirst(Auth::user()->roles->pluck('name')->first()) }}</small>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-person dropdown-item-icon"></i> Profile
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                    <i class="bi bi-gear dropdown-item-icon"></i> Settings
                </a>
                <a href="javascript:$('#logout_form').submit();" class="dropdown-item d-flex align-items-center text-danger">
                    <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                </a>
                <form id="logout_form" action="{{ route('logout') }}" method="post">
                    @csrf
                </form>
            </div>
        </div>
        <ul>
            <li class="menu-divider">E-Commerce</li>
            <li>
                <a class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li>
            @if(Auth::user()->hasAnyRole(['admin']))
                <li>
                <a class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}" href="{{ route('admin.categories.index') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-file-earmark-text"></i>
                    </span>
                    <span>Categories</span>
                </a>
            </li>

            <li>
                <a class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}" href="{{ route('admin.products.index') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-truck"></i>
                    </span>
                    <span>Products</span>
                </a>
            </li>

            <li>
                <a class="{{ request()->routeIs('admin.customers.*') ? 'active' : '' }}" href="{{ route('admin.customers.index') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-person-badge"></i>
                    </span>
                    <span>Customers</span>
                </a>
            </li>

            @endif

            @if(Auth::user()->hasAnyRole(['admin', 'customer']))

            <li>
                <a class="{{ request()->routeIs('orders.*') ? 'active' : '' }}" href="{{ route('orders.index') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Orders</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
</div>
