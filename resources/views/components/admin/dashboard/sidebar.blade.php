    <nav class="ttr-sidebar-navi">
        <ul>
            <li>
                <a href="{{ route('admin.index') }}" class="ttr-material-button">
                    <span class="ttr-icon"><i class="ti-home"></i></span>
                    <span class="ttr-label">Dashborad</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.home.index') }}" class="ttr-material-button">
                    <span class="ttr-icon"><i class="ti-book"></i></span>
                    <span class="ttr-label">Home</span>
                </a>
            </li>
            <li>
                <a href="#" class="ttr-material-button">
                    <span class="ttr-icon"><i class="ti-email"></i></span>
                    <span class="ttr-label">Blog</span>
                    <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>

                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin.blog.index') }}" class="ttr-material-button"><span
                                class="ttr-label">Blog Page</span></a>
                    </li>
                    <li>
                        <a href="{{ route('admin.posts.index') }}" class="ttr-material-button"><span
                                class="ttr-label">Posts</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="ttr-material-button">
                    <span class="ttr-icon"><i class="ti-email"></i></span>
                    <span class="ttr-label">Service</span>
                    <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>

                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin.service.index') }}" class="ttr-material-button"><span
                                class="ttr-label">Service Page</span></a>
                    </li>
                    <li>
                        <a href="{{ route('admin.services.index') }}" class="ttr-material-button"><span
                                class="ttr-label">Services</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('admin.about.index') }}" class="ttr-material-button">
                    <span class="ttr-icon"><i class="ti-comments"></i></span>
                    <span class="ttr-label">About Us</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.qa.index') }}" class="ttr-material-button">
                    <span class="ttr-icon"><i class="ti-layout-accordion-list"></i></span>
                    <span class="ttr-label">Q&A</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.contact.index') }}" class="ttr-material-button">
                    <span class="ttr-icon"><i class="ti-bookmark-alt"></i></span>
                    <span class="ttr-label">Contact</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end -->
    </nav>
