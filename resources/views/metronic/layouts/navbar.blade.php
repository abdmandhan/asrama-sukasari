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
                {{-- @include('components/menu',['mainMenu'=>'Migrasi','subMenu'=>[['name'=>'satu','link'=>'linksatu'],['name'=>'dua','link'=>'linkdua']]]) --}}
            </ul>
        </div>
    </div>

    <!-- end:: Aside Menu -->
</div>
<!-- end:: Aside -->