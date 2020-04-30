<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
    <div class="kt-container  kt-container--fluid ">

        <!-- begin:: Brand -->
        <div class="kt-header__brand " id="kt_header_brand">
            <div class="kt-header__brand-logo">
                <a href="{{ route('/')}}">
                    <h3><i>Asrama IPB Sukasari</i></h3>
                    {{-- <img alt="Logo" src="{{asset('img/logo_n.png')}}" width="5%" /> --}}
                </a>
            </div>
        </div>

        <!-- end:: Brand -->

        <!-- begin:: Header Topbar -->
        <div class="kt-header__topbar">

            <!--begin: User bar -->
            <div class="kt-header__topbar-item kt-header__topbar-item--user">
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                    <span class="kt-header__topbar-welcome kt-visible-desktop">Hi,</span>
                    <span class="kt-header__topbar-username kt-visible-desktop">{{ Auth::user()->name }}</span>
                    <img alt="Pic" src="{{asset('metronic/media/users/300_21.jpg')}}" />
                    <span class="kt-header__topbar-icon kt-bg-brand kt-hidden"><b>S</b></span>
                </div>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

                    <!--begin: Head -->
                    <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
                        <div class="kt-user-card__avatar">
                            <img class="kt-hidden-" alt="Pic" src="{{asset('metronic/media/users/300_25.jpg')}}" />

                            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                            <span
                                class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
                        </div>
                        <div class="kt-user-card__name">
                            {{ Auth::user()->name }}
                        </div>
                    </div>

                    <!--end: Head -->

                    <!--begin: Navigation -->
                    <div class="kt-notification">
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-calendar-3 kt-font-success"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title kt-font-bold">
                                    My Profile
                                </div>
                                <div class="kt-notification__item-time">
                                    Account settings and more
                                </div>
                            </div>
                        </a>

                        <div class="kt-notification__custom kt-space-between">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                                class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>

                    <!--end: Navigation -->
                </div>
            </div>

            <!--end: User bar -->
        </div>

        <!-- end:: Header Topbar -->
    </div>
</div>

<!-- end:: Header -->