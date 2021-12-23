<!-- HEADER -->
<header class="navbar-fixed-top">
    <div class="container">
        <div class="row">

            <!-- HEADER TOP -->
            <div class="col-lg-12">
                <div class="header-top">
                    <div class="header-top-logo">
                        <a href="index-2.html" title="Logo"><img src="{{ asset('front') }}/img/logo.png" alt="Dblog Logo" data-rjs="2"></a>
                    </div>
                    <div class="header-top-text">
                        <p><span class="font-italic">“Maksat Öğrenmek Olsun”


                        </span>

                        </p>
                    </div>
                    <nav class="header-top-nav">
                        <ul>
                            <li class="header-top-nav-search">
                                <a href="#" class="light-link" title="Search"><i class="pe-7s-search"></i></a>
                                <form action="#" method="get">
                                    <input type="text" class="form-control" placeholder="Arama...">
                                    <button type="submit"><i class="pe-7s-search"></i></button>
                                </form>
                            </li>
                            <li><a href="#" class="light-link" title="Menu">
                                <div id="menu-animate-icon" class="header-top-nav-menu-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- end HEADER TOP -->

            <!-- HEADER NAVIGATION -->
            <div class="col-lg-12">
                <nav class="header-nav">
                    <ul>
                        <li class="@if (Request::segment(1)=="") active @endif"><a href="{{ route('front.index') }}" title="Start page">Anasayfa</a></li>
                        <li class="@if (Request::segment(1)=="kurumsal") active @endif"><a href="{{ route('front.hakkinda') }}" title="Start page">Hakkında</a></li>
                        <li class="dropdown @if (Request::segment(1)=="kategori") active @endif">
                            <a href="#" class="dropdown-toggle" title="Blog articles">Kategoriler</a>
                            <ul class="dropdown-menu">
                                @foreach ($categories as $category)
                                <li class="nav-elipse-{{ $category->color }}"><a href="{{ route('front.kategori',$category->slug) }}" title="{{ $category->slug }}">{{ $category->title }}</a>
                                </li>
                                @endforeach



                            </ul>
                        </li>
                        <li class="@if (Request::segment(1)=="video") active @endif"><a href="{{ route('front.video') }}" title="About me">Video İçerik </a></li>
                        <li class="@if (Request::segment(1)=="proje") active @endif"><a href="{{ route('front.proje') }}" title="My projects">Projeler</a></li>
                        <li class="@if (Request::segment(1)=="iletisim") active @endif"><a href="{{ route('front.iletisim') }}" title="Contact me">İletişim</a></li>



                        @if (auth()->user())



                            <li class="giris-link dropdown"><a href="#" >  {{ Auth::user()->name }}</a>

                                <ul class="dropdown-menu">
                                @foreach ($authorities as $authority)







                                    @if (($authority->id==Auth::user()->yetki_id )&& ($authority->name=='Admin'))


                                        <li><a href="{{ route('admin.index') }}" title="">Yönetim Paneli</a>
                                        </li>







                                    @elseif (($authority->id==Auth::user()->yetki_id )&& ($authority->name=='Moderatör'))


                                        <li><a href="{{ route('admin.index') }}" title="">Moderetör Paneli</a>
                                        </li>


                                    @elseif (($authority->id==Auth::user()->yetki_id )&& ($authority->name=='Kullanıcı'))

                                    <li><a href="{{ route('admin.index') }}" title="">Kullanıcı Paneli</a>
                                        </li>


                                    @endif



                                @endforeach

                                <li>

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="btn btn-sm" type="submit">
                                            <i class="fas fa-user"></i>   Çıkış
                                        </button>

                                    </form>

                                </li>

                                    </ul>


                            </li>
                            @else

                            <li class="giris-link"><a href="{{ route('register') }}" title="Buy products"><i class="far fa-id-card"></i> Kayıt Ol</a></li>

                            <li class="giris-link"><a href="{{ route('login') }}" title="Buy products"> <i class="fas fa-user"></i> Giriş</a></li>

                        @endif







                    </ul>
                </nav>
            </div>
        </div>
        <!-- end HEADER NAVIGATION -->

    </div>
</header>
<!-- end HEADER -->
<!-- MOBILE NAVIGATION -->

<nav class="mobile-nav header-nav">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Auto Copy Header Navigation -->
            </div>
        </div>
    </div>
</nav>

<!-- end MOBILE NAVIGATION -->
