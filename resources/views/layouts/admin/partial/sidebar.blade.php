<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">
                <i class="bi bi-grid"></i>
                <span>Website</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link" href="@route('dashboard')">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <!-- Location start -->
        @isset(auth()->user()->role->permission['permission']['location']['list'])
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
        @endisset
        <!-- location end -->

        <!-- services -->
        @isset(auth()->user()->role->permission['permission']['service']['list'])
            <li class="nav-item">
                <a class="nav-link" href="@route('services.index')">
                    <i class="bi bi-grid"></i>
                    <span>Services</span>
                </a>
            </li>
        @endisset
        <!-- End services -->

        <!-- services -->
        @isset(auth()->user()->role->permission['permission']['book_tutor']['list'])
            <li class="nav-item">
                <a class="nav-link" href="@route('tutor.payment.index')">
                    <i class="bi bi-grid"></i>
                    <span>Book Tutor</span>
                </a>
            </li>
        @endisset
        <!-- End services -->

        <!-- tutor education -->
        @isset(auth()->user()->role->permission['permission']['tutor_education']['list'])
            <li class="nav-item">
                <a class="nav-link" href="@route('tutor-education.index')">
                    <i class="bi bi-grid"></i>
                    <span>Tutor Education</span>
                </a>
            </li>
        @endisset
        <!-- End tutor education -->

        <!-- testimonial start here -->
        @isset(auth()->user()->role->permission['permission']['testimonial']['list'])
            <li class="nav-item">
                <a class="nav-link" href="@route('testimonial.index')">
                    <i class="bi bi-grid"></i>
                    <span>Testimonial</span>
                </a>
            </li>
        @endisset
        <!-- End testimonial -->

        <!-- subject -->
        @isset(auth()->user()->role->permission['permission']['subject']['list'])
            <li class="nav-item">
                <a class="nav-link" href="@route('subject.index')">
                    <i class="bi bi-grid"></i>
                    <span>Subject</span>
                </a>
            </li>
        @endisset
        <!-- End subject -->

        <!-- contact -->
        @isset(auth()->user()->role->permission['permission']['contact']['list'])
            <li class="nav-item">
                <a class="nav-link" href="@route('contact.index')">
                    <i class="bi bi-grid"></i>
                    <span>Contact list</span>
                </a>
            </li>
        @endisset
        <!-- End subject -->

        <!-- role -->
        @isset(auth()->user()->role->permission['permission']['role']['list'])
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#role-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Role</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="role-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="@route('role.index')">
                            <i class="bi bi-circle"></i><span>List of Role</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endisset
        <!-- End rolr -->

        <!-- permission -->
        @isset(auth()->user()->role->permission['permission']['location']['list'])
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#Permission-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Permission</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="Permission-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="@route('permission.index')">
                            <i class="bi bi-circle"></i><span>List of permission</span>
                        </a>
                    </li>

                    <li>
                        <a href="@route('permission.create')">
                            <i class="bi bi-circle"></i><span>Permission Create</span>
                        </a>
                    </li>

                </ul>
            </li>
        @endisset
        <!-- End permission -->

        <li class="nav-item">
            <a class="nav-link" href="@route('logouts')">
                <i class="bi bi-grid"></i>
                <span>Logout</span>
            </a>
        </li><!-- End Dashboard Nav -->
    </ul>
</aside>
