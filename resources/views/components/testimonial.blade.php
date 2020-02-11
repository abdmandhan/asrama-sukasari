<!-- testimonial_area  -->
<div class="testimonial_area ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    @foreach ($impressions as $item)
                    @if (!$item->hidden)
                    @include('components.impression',['message'=>$item->message,'imgSrc'=>$item->imgSrc,'name'=>$item->name,'majors'=>$item->majors])
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /testimonial_area  -->