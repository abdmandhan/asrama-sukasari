@extends('metronic.layouts.appdashboard')
@push('css')
<!--begin::Page Vendors Styles(used by this page) -->
<link href="{{asset('metronic/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
    type="text/css" />
@endpush

@section('content')

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    @include('components.subheader',['subTitle'=>'Dashboard','subName'=>'Application'])

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <img src="{{ url('img/blog/single_blog_1.png')}}" alt="" srcset="">
    </div>

    <!-- end:: Content -->
</div>

@endsection

@push('scripts')
<!--begin::Page Vendors(used by this page) -->
<script src="{{asset('metronic/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript">
</script>
<script src="{{asset('metronic/plugins/custom/gmaps/gmaps.js')}}" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{asset('metronic/js/pages/dashboard.js')}}" type="text/javascript"></script>

<!--end::Page Scripts -->
@endpush