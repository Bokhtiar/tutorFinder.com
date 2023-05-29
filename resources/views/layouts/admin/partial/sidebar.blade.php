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
                    <a href="">
                        <i class="bi bi-circle"></i><span>Create country</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Create country module</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Create country module</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- course end -->



        {{-- <li class="nav-item">
            <a class="nav-link " href="@route('admin.logout')">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li><!-- End Dashboard Nav --> --}}

    </ul>
</aside>
