
@foreach ($abouts as $about)


<aside class="author">
    <img src="{{ asset('front') }}/img/profile-picture.png" alt="" data-rjs="2">
    <h2>{{ $about->name }}</h2>
    <span class="author-info">{{ $about->job }}</span>

    <div class="social">
        <a href="#" title="Twitter"><i class="icon-social_twitter_circle"></i></a>
        <a href="#" title="Github"><i class="icon-social_github_circle"></i></a>
        <a href="#" title="LinkedIn"><i class="icon-social_linkedin_circle"></i></a>
    </div>
    <ul class="author-nav">
        <li><a href="{{ asset('front') }}/{{ $about->cw }}" title=""><i class="pe-7s-bookmarks"></i> Cv İndir</a></li>
        <li><a href="#" title=""><i class="pe-7s-paper-plane"></i> Mesaj Yazın</a></li>
    </ul>
</aside>



@endforeach
