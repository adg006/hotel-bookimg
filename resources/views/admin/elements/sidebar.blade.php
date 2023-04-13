<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Admin Panel</a>
        </div>

        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}"></a>
        </div>

        <ul class="sidebar-menu">
            <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-hand-point-right"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item dropdown {{ request()->is('admin/pages*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Pages</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/pages/about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pages.about') }}"><i class="fas fa-angle-right"></i>
                            About</a>
                    </li>

                    <li class="{{ request()->is('admin/pages/image') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pages.image') }}"><i class="fas fa-angle-right"></i>
                            Image</a>
                    </li>

                    <li class="{{ request()->is('admin/pages/video') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pages.video') }}"><i class="fas fa-angle-right"></i>
                            Video</a>
                    </li>

                    <li class="{{ request()->is('admin/pages/blog') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pages.blog') }}"><i class="fas fa-angle-right"></i>
                            Blog</a>
                    </li>

                    <li class="{{ request()->is('admin/pages/faq') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pages.faq') }}"><i class="fas fa-angle-right"></i>
                            FAQ</a>
                    </li>

                    <li class="{{ request()->is('admin/pages/contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pages.contact') }}"><i class="fas fa-angle-right"></i>
                            Contact</a>
                    </li>

                    <li class="{{ request()->is('admin/pages/tnc') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pages.tnc') }}"><i class="fas fa-angle-right"></i>
                            TnC</a>
                    </li>

                    <li class="{{ request()->is('admin/pages/privacy') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pages.privacy') }}"><i class="fas fa-angle-right"></i>
                            Privacy Policy</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ request()->is('admin/slider*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Sliders</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/slider') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.slider') }}"><i class="fas fa-angle-right"></i>
                            View</a>
                    </li>

                    <li class="{{ request()->is('admin/slider/add') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.slider.add') }}"><i class="fas fa-angle-right"></i>
                            Add</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ request()->is('admin/features*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Features</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/features') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.features') }}"><i class="fas fa-angle-right"></i>
                            View</a>
                    </li>

                    <li class="{{ request()->is('admin/features/add') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.features.add') }}"><i class="fas fa-angle-right"></i>
                            Add</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ request()->is('admin/testimonials*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Testimonials</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/testimonials') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.testimonials') }}"><i class="fas fa-angle-right"></i>
                            View</a>
                    </li>

                    <li class="{{ request()->is('admin/testimonials/add') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.testimonials.add') }}"><i
                                class="fas fa-angle-right"></i> Add</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ request()->is('admin/posts*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Posts</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/posts') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.posts') }}"><i class="fas fa-angle-right"></i>
                            View</a>
                    </li>

                    <li class="{{ request()->is('admin/posts/add') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.posts.add') }}"><i class="fas fa-angle-right"></i>
                            Add</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ request()->is('admin/images*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Photos</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/images') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.images') }}"><i class="fas fa-angle-right"></i>
                            View</a>
                    </li>

                    <li class="{{ request()->is('admin/images/add') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.images.add') }}"><i class="fas fa-angle-right"></i>
                            Add</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ request()->is('admin/videos*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Videos</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/videos') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.videos') }}"><i class="fas fa-angle-right"></i>
                            View</a>
                    </li>

                    <li class="{{ request()->is('admin/videos/add') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.videos.add') }}"><i class="fas fa-angle-right"></i>
                            Add</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ request()->is('admin/faq*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>FAQs</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/faq') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.faq') }}"><i class="fas fa-angle-right"></i>
                            View</a>
                    </li>

                    <li class="{{ request()->is('admin/faq/add') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.faq.add') }}"><i class="fas fa-angle-right"></i>
                            Add</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
