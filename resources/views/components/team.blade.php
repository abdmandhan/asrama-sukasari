<!-- team_member_start -->
<div class="team_area ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb-90">
                    <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Our Team</h3>
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">Tour function information
                        without cross action media value quickly maximize timely deliverables.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($teams as $item)
            @include('components.teamperson',['imgSrc'=>$item->imgSrc,'facebookSrc'=>$item->facebookSrc,'twitterSrc'=>$item->twitterSrc,'instagramSrc'=>$item->instagramSrc,'name'=>$item->name,'position'=>$item->position,'majors'=>$item->majors])
            @endforeach

        </div>
    </div>
</div>
<!--/ team_member_end -->