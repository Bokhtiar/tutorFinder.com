<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="@route('admin.dashboard')">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <!-- categories start -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="category-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="@route('admin.category.index')">
                        <i class="bi bi-circle"></i><span>List of categorys</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- categories end -->


        <!-- course start -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#course-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Courses</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="course-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="@route('admin.course.index')">
                        <i class="bi bi-circle"></i><span>List of course</span>
                    </a>
                </li>
                <li>
                    <a href="@route('admin.course.create')">
                        <i class="bi bi-circle"></i><span>Create course</span>
                    </a>
                </li>

                <li>
                    <a href="@route('admin.module.index')">
                        <i class="bi bi-circle"></i><span>Create course module</span>
                    </a>
                </li>
                <li>
                    <a href="@route('admin.module.create')">
                        <i class="bi bi-circle"></i><span>Create course module</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- course end -->


        <!-- mentor start -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#mentor-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Mentors</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="mentor-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="@route('admin.mentor.index')">
                        <i class="bi bi-circle"></i><span>List of mentors</span>
                    </a>
                </li>
                <li>
                    <a href="@route('admin.mentor.create')">
                        <i class="bi bi-circle"></i><span>Create of mentors</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- mentor end -->

        <!-- Tools start -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tools-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Tools</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tools-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="@route('admin.tool.index')">
                        <i class="bi bi-circle"></i><span>List of tool</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Tools end -->

        <!-- testimonial start -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#testimonial-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Testimonial</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="testimonial-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="@route('admin.testimonial.index')">
                        <i class="bi bi-circle"></i><span>List of testimonial</span>
                    </a>
                </li>
                <li>
                    <a href="@route('admin.testimonial.create')">
                        <i class="bi bi-circle"></i><span>Testimonial Create</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- testimonial end -->

        <!-- evnet start -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#event-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-calendar-event"></i><span>Event</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="event-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="@route('admin.event.index')">
                        <i class="bi bi-circle"></i><span>List of event</span>
                    </a>
                </li>
                <li>
                    <a href="@route('admin.event.create')">
                        <i class="bi bi-circle"></i><span>Event Create</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- testimonial end -->

        <!-- course-registration start -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#course-registration-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person"></i><span>Course Registration</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="course-registration-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="@route('admin.course-registration.index')">
                        <i class="bi bi-circle"></i><span>List of course registration</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- course-registration end -->

         <!-- contact start -->
         <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#contact-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-phone"></i><span>Contact</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="contact-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="@route('admin.contact.index')">
                        <i class="bi bi-circle"></i><span>List of contact</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- contact end -->

        <!-- counter start -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#counter-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-arrow-clockwise"></i><span>Counter Setting</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="counter-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="@route('admin.counter.edit',1)">
                        <i class="bi bi-circle"></i><span>List of Counter Setting</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- counter end -->

        <!-- web start -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#web-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gear"></i><span>Web Setting</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="web-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="@route('admin.web')">
                        <i class="bi bi-circle"></i><span>List of webSetting</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- web end -->

        <li class="nav-item">
            <a class="nav-link " href="@route('admin.logout')">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li><!-- End Dashboard Nav -->

    </ul>
</aside>
