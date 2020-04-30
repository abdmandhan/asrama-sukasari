<!-- begin:: Aside -->
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

    <!-- begin:: Aside Menu -->
    <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1">
            <ul class="kt-menu__nav ">
                <li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true"><a href="index.html"
                        class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-architecture-and-city"></i><span
                            class="kt-menu__link-text">Dashboard</span></a></li>
                <li class="kt-menu__section ">
                    <h4 class="kt-menu__section-text">Menu</h4>
                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon2-contract"></i><span
                            class="kt-menu__link-text">Menu</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                    class="kt-menu__link"><span class="kt-menu__link-text">Menu</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{ route('admin.blog.index')}}"
                                    class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Blogs</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{ route('admin.goal.index')}}"
                                    class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Goals</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a
                                    href="{{ route('admin.impression.index')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Impression</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{ route('admin.team.index')}}"
                                    class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Team</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{ route('admin.activity.index')}}"
                                    class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Activity</span></a></li>
                        </ul>
                    </div>
                </li>
                {{-- @include('components/menu',['mainMenu'=>'Migrasi','subMenu'=>[['name'=>'satu','link'=>'linksatu'],['name'=>'dua','link'=>'linkdua']]]) --}}
            </ul>
        </div>
    </div>

    <!-- end:: Aside Menu -->
</div>
<!-- end:: Aside -->