<!-- service_area  -->
<div class="service_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb-70">
                    <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"
                        style="font-size: 30px">Goals</span>
                    <h4 class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                        With more than 20 years
                        of
                        experience we can deliver the
                        best product design.</h4>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($goals as $item)
            @if (!$item->hidden)
            @include('components.goals',['transision'=>$item->transision,'imgSrc'=>$item->imgSrc,'title'=>$item->title,'desc'=>$item->desc])
            @endif
            @endforeach
        </div>
    </div>
</div>
<!--/ service_area  -->