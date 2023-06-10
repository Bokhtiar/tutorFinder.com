<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="@route('dashboard')">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <!-- Location start -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#location-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Location</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="location-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="@route('country.index')">
                        <i class="bi bi-circle"></i><span>List of Country</span>
                    </a>
                </li>
                <li>
                    <a href="@route('state.index')">
                        <i class="bi bi-circle"></i><span>List of State</span>
                    </a>
                </li>

                <li>
                    <a href="@route('city.index')">
                        <i class="bi bi-circle"></i><span>List of City</span>
                    </a>
                </li>
                <li>
                    <a href="@route('village.index')">
                        <i class="bi bi-circle"></i><span>List of Village</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- location end -->

        <!-- services -->
        <li class="nav-item">
            <a class="nav-link" href="@route('services.index')">
                <i class="bi bi-grid"></i>
                <span>Services</span>
            </a>
        </li>
        <!-- End services -->

        <!-- services -->
        <li class="nav-item">
            <a class="nav-link" href="@route('tutor.payment.index')">
                <i class="bi bi-grid"></i>
                <span>Book Tutor</span>
            </a>
        </li>
        <!-- End services -->

        <!-- tutor education -->
        <li class="nav-item">
            <a class="nav-link" href="@route('tutor-education.index')">
                <i class="bi bi-grid"></i>
                <span>Tutor Education</span>
            </a>
        </li>
        <!-- End tutor education -->

        <!-- testimonial start here -->
        <li class="nav-item">
            <a class="nav-link" href="@route('testimonial.index')">
                <i class="bi bi-grid"></i>
                <span>Testimonial</span>
            </a>
        </li>
        <!-- End testimonial -->

        <!-- subject -->
        <li class="nav-item">
            <a class="nav-link" href="@route('subject.index')">
                <i class="bi bi-grid"></i>
                <span>Subject</span>
            </a>
        </li>
        <!-- End subject -->




        {{-- <li class="nav-item">
            <a class="nav-link " href="@route('admin.logout')">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li><!-- End Dashboard Nav --> --}}

    </ul>
</aside>
