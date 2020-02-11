<div class="col-lg-3 col-md-6">
    <div class="single_team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
        <div class="team_thumb">
            <img src="{{ $imgSrc }}" alt="">
            <div class="team_hover">
                <div class="hover_inner text-center">
                    <ul>
                        <li><a href="{{ $facebookSrc }}"> <i class="fa fa-facebook"></i> </a></li>
                        <li><a href="{{ $twitterSrc }}"> <i class="fa fa-twitter"></i> </a></li>
                        <li><a href="{{ $instagramSrc }}"> <i class="fa fa-instagram"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="team_title text-center">
            <h3>{{ $name }}</h3>
            <p><strong>{{ $position }}</strong></p>
            <p>{{ $majors }}</p>
        </div>
    </div>
</div>