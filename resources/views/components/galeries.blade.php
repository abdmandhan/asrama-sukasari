<div class="container box_1170">
    <div class="section-top-border text-center img-galery">
        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="font-size: 30px">Our Activity</h3>
        <div class="row gallery-item">
            @foreach ($activities as $item)
            @if (!$item->hidden)
            @include('components.galery',['weight'=>$item->weight,'imgSrc'=>$item->imgSrc])
            @endif
            @endforeach
        </div>
    </div>
</div>