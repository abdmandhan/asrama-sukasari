<article class="blog_item">
    <div class="blog_item_img">
        <img class="card-img rounded-0" src="{{ $imgSrc }}" alt="">
        <a href="#" class="blog_item_date">
            <h3>{{ date('d', strtotime($date)) }}</h3>
            <p>{{ date('M', strtotime($date)) }}</p>
        </a>
    </div>

    <div class="blog_details">
        <a class="d-inline-block" href="{{ $link }}">
            <h2>{{ $title }}</h2>
        </a>
        <p>{{ mb_strimwidth($desc, 0, 100, '...') }}</p>
        <ul class="blog-info-link">
            <li><a href="#"><i class="fa fa-user"></i> {{ $category }}</a></li>
            <li><a href="#"><i class="fa fa-comments"></i>03 Comments</a></li>
            <li><a href="#"><i class="fa fa-user"></i>{{ $name }}</a></li>
        </ul>
    </div>
</article>