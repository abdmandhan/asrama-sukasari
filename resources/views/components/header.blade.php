<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="{{ route('/')}}">
                                <img src="img/logo-sv.png" alt="" width="100%" class="img-mobile">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="main-menu  d-none d-lg-block text-center">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="active" href="{{ route('/') }}">home</a></li>
                                    <li><a class="active" href="{{ route('blogs') }}">blog</a></li>
                                    <li><a class="active" href="{{ route('contact') }}">Contact</a></li>
                                    <li><a class="active" href="{{ route('login') }}">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block">
                        <div class="log_chat_area d-flex align-items-end">
                            <a href="#" data-scroll-nav="0" class="say_hi">Say Hello</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->