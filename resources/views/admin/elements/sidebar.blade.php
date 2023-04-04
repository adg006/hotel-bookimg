<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Admin Panel</a>
        </div>

        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}"></a>
        </div>

        <ul class="sidebar-menu">
            <li class="{{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a>
            </li>

            <li class="nav-item dropdown {{ (request()->is('admin/slider*')) ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Sliders</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ (request()->is('admin/slider')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.slider') }}"><i class="fas fa-angle-right"></i> View</a>
                    </li>

                    <li class="{{ (request()->is('admin/slider/add')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.slider.add') }}"><i class="fas fa-angle-right"></i> Add</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ (request()->is('admin/features*')) ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Features</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ (request()->is('admin/features')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.features') }}"><i class="fas fa-angle-right"></i> View</a>
                    </li>

                    <li class="{{ (request()->is('admin/features/add')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.features.add') }}"><i class="fas fa-angle-right"></i> Add</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ (request()->is('admin/testimonials*')) ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Testimonials</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ (request()->is('admin/testimonials')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.testimonials') }}"><i class="fas fa-angle-right"></i> View</a>
                    </li>

                    <li class="{{ (request()->is('admin/testimonials/add')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.testimonials.add') }}"><i class="fas fa-angle-right"></i> Add</a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i> <span>Setting</span></a>
            </li>

            <li class="">
                <a class="nav-link" href="form.html"><i class="fas fa-hand-point-right"></i> <span>Form</span></a>
            </li>

            <li class="">
                <a class="nav-link" href="table.html"><i class="fas fa-hand-point-right"></i> <span>Table</span></a>
            </li>

            <li class="">
                <a class="nav-link" href="invoice.html"><i class="fas fa-hand-point-right"></i> <span>Invoice</span></a>
            </li>
        </ul>
    </aside>
</div>