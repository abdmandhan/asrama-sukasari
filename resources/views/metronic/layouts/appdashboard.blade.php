<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- <base href="../../../"> --}}
    <meta charset="utf-8" />
    <title>Asrama IPB Sukasari</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Asap+Condensed:500">

    <!--end::Fonts -->

    @stack('css')
    <link href="{{asset('metronic/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{asset('metronic/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('metronic/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->
    <link rel="shortcut icon" href="{{asset('metronic/media/logos/logo-sya.png')}}" />
</head>

<body
    class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">
    @include('metronic/layouts.headermobile')

    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                @include('metronic/layouts.header')
                <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch"
                    id="kt_body">
                    <div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">
                        @include('metronic/layouts.navbar')
                        @yield('content')
                    </div>
                </div>
                @include('metronic/layouts.footer')
            </div>
        </div>
    </div>
</body>

<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
</script>

<!-- end::Global Config -->
<script src="{{asset('metronic/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript">
</script>
<script src="{{asset('metronic/plugins/custom/gmaps/gmaps.js')}}" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{asset('metronic/js/pages/dashboard.js')}}" type="text/javascript"></script>


<!--begin::Global Theme Bundle(used by all pages) -->

<script src="{{asset('metronic/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/js/scripts.bundle.js')}}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

@stack('scripts')

</html>