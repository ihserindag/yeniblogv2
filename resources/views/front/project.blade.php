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


                        @foreach ($data['projects'] as $project)


                        <div class="portfolio-item white-box" data-portfolio="{{ $project->yetkili->slug }}" style="display: block;">
                            <div class="portfolio-item-wrapper portfolio-item-default">
                                <div class="portfolio-item-wrapper-left">
                                    <h2> {{ $project->title }} </h2>

                                    <p class="font-primary">{{ $project->shortdescription }}</p>

                                    <a href="{{ route('front.projeler',$project->slug) }}" class="btn">Detaylar</a>
                                </div>
                            </div>
                        </div>

                        @endforeach









                    </div>
                </div>


            </div>
        </div>
        </main>




</x-front.layout.master>
