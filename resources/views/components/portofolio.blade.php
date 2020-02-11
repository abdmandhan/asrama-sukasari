<!-- portfolio_image_area  -->
<div class="portfolio_image_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb-90">
                    <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Our Activity</h3>
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Tour function information
                        without cross action media value quickly maximize timely deliverables.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($activities as $item)
            @if (!$item->hidden)
            @include('components.activity',['weight'=>$item->weight,'imgSrc'=>$item->imgSrc])
            @endif
            @endforeach
        </div>
    </div>
</div>
<!--/ portfolio_image_area  -->