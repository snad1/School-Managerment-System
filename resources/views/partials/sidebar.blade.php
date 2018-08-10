<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            @if(Auth::check())
                @if(Auth::user()->is_admin())

            <li><a><i class="fa fa-home"></i> Admin <span class="fa fa-chevron-down"></span></a></li>

                @endif
                @if (Auth::user()->is_teacher())

                        <li><a><i class="fa fa-home"></i> Teacher <span class="fa fa-chevron-down"></span></a></li>

                    @endif
                @if(Auth::user()->is_parent())

                        <li><a><i class="fa fa-home"></i> Parent <span class="fa fa-chevron-down"></span></a></li>

                    @endif
                @endif
        </ul>
    </div>
</div>
<!-- /sidebar menu -->
