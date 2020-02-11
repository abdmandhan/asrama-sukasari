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
            @include('components.goals',['transision'=>'fadeInLeft','imgSrc'=>'img/svg_icon/1.svg','title'=>'Leadership','desc'=>'Lorem
            ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.'])
            @include('components.goals',['transision'=>'fadeInUp','imgSrc'=>'img/svg_icon/2.svg','title'=>'Family','desc'=>'Lorem
            ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.'])
            @include('components.goals',['transision'=>'fadeInRight','imgSrc'=>'img/svg_icon/3.svg','title'=>'Religion','desc'=>'Lorem
            ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.'])
        </div>
    </div>
</div>
<!--/ service_area  -->