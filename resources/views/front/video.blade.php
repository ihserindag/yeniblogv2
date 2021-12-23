
<x-front.layout.master>

    <main>
        <div class="container">
            <div class="row">

                <!-- PORTFOLIO MENU -->
                <div class="col-xs-12">
                    <nav class="portfolio-menu">
                        <ul>
                            <li class="active"><a href="#" data-portfolio="all" title="All">Tümü</a></li>

                            @foreach ($data['categories'] as $category)
                            <li class=""><a href="#" data-portfolio="{{ $category->slug  }}" title="{{ $category->slug  }}">{{ $category->title }}</a></li>

                            @endforeach

                        </ul>
                    </nav>
                </div>

                <!-- PORTFOLIO -->
                <div class="col-xs-12">
                    <div class="portfolio">
                        <p class="portfolio-empty" style="display: none;"><i class="pe-7s-attention"></i>Şu anlık bu alanda projelerimiz geliştirme aşamasındadır.</p>


                        @foreach ($data['videos'] as $video)


                        <div class="portfolio-item white-box " data-portfolio="{{ $video->yetkili->slug }}" style="display: block;">
                            <h1>{{ $video->title }}</h1>

                                <iframe style="width:100%; height:70%" src="{{ $video->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p style="text-align: right">Yükleyen: {{ $video->writer->name }}</p>
                        </div>
                        <div style="clear: both;" ></div>
                        @endforeach






                    </div>
                </div>




            </div>

        </div>

    </main>


</x-front.layout.master>


