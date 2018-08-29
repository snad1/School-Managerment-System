<!-- MENU SIDEBAR-->
<aside class="menu-sidebar2">
    <div class="logo bg-success">
        <a href="#">
            <img src="images/icon/logo-white.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            <div class="image img-cir img-120">
                <img src="images/icon/avatar-big-01.jpg" alt="John Doe" />
            </div>
        </div>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i> Academics
                        <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('subject.index')}}">
                                Subjects</a>
                        </li>
                        <li>
                            <a href="{{ route('classes.index')}}">
                                Classes</a>
                        </li>
                        <li>
                            <a href="#">
                                TimeTable</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                         <i class="fas fa-users"></i>Students
                        <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('student.index')}}">
                                All Students</a>
                        </li>
                        <li>
                            <a href="register.html">
                                Admit New Students </a>
                        </li>
                        <li>
                            <a href="forget-pass.html">
                                Attendance</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas  fa-money"></i>Finance
                        <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="button.html">
                                </i>Fees</a>
                        </li>
                        <li>
                            <a href="badge.html">
                                </i>Billing</a>
                        </li>
                        <li>
                            <a href="tab.html">
                                </i>Fees Log</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-sort"></i>Performance
                        <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="button.html">
                                Class Performance</a>
                        </li>
                        <li>
                            <a href="badge.html">
                               Student Performance</a>
                        </li>
                        <li>
                            <a href="tab.html">
                                Subject Performance</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
