<x-front.layout.master>

    <main>


        <div class="container">
            <div class="row">

                <!-- CATEGORY TITLE -->
                <div class="col-xs-12">
                    <section class="category-title">
                        <h1>{{ $data['categories1']->title }}</h1>
                        <span>{{ count($data['blogs']) }}  tane bloga ulaşıldı</span>
                    </section>
                </div>
                <!-- end CATEGORY TITLE -->

                <!-- ARTICLES -->
                <div class="col-lg-8 col-xs-12">
                    <section class="articles">


                        @foreach ($data['blogs'] as  $blog)

                        <article class="{{ $blog->kategoriGetir->color }}-article">
                            <div class="articles-header">
                                <time datetime="2016-10-11">{{ $blog->created_at->diffForHumans() }}</time>

                                <span class="articles-header-category"><a href="#" title="">{{ $blog->kategoriGetir->title }}</a></span>
                            </div>
                            <div class="articles-content">
                                <h1><a href="{{ route('front.blog',$blog->slug) }}" title="">{{ Str::limit($blog->title,35,'..') }}</a></h1>
                                <p>
                                    {!! Str::limit($blog->description, 95, '...') !!}
                                </p>
                            </div>
                            <div class="articles-footer">
                                <ul class="articles-footer-info">
                                    <li><i class="pe-7s-comment"></i> Yazar: {{ $blog->uyeGetir->name }}
                                    </li>

                                </ul>
                                <a title="" class="btn" href="{{ route('front.blog',$blog->slug) }}">Detaylar</a>

                            </div>
                        </article>



                        @endforeach
                        <!-- TEXT ARTICLE -->




                        <!-- PAGINATION -->

                        {!! $data['blogs']->links() !!}


                    </section>
                </div>

               <x-front.layout.yan />
            </div>
        </div>
        </main>

</x-front.layout.master>
