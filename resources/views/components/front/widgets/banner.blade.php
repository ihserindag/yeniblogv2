<section class="banners">
    <div class="container">
        <div class="row">


            @foreach ($banners as $banner)



            <div class="@if($banner->size=="kucuk") col-md-4 @else col-md-6 @endif col-xs-12">
                <div class="banner-wrapper">
                    <a href="{{ route('front.kategori',$banner->kategori->slug) }}" title="Leveling up in CSS">
                        <div class="banner-wrapper-content">
                            <h1 class="h2">{{ $banner->title }}</h1>
                            <span class="category-tag category-tag-white">{{ $banner->kategori->title }}</span>
                            <time datetime="{{ $banner->created_at }}" class="">{{ $banner->created_at->diffForHumans() }}</time>
                        </div>
                    </a>
                    <img class="img-fluid" src="{{ asset('front') }}/img/{{ $banner->image }}" alt="Post Photo" data-rjs="2">
                </div>
            </div>



            @endforeach

        </div>
    </div>
</section>
