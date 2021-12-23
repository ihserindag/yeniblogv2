
    <aside class="categories">
        <h2 class="aside-title">Kategoriler</h2>
        <ul>

            @foreach ($categories as $category)

            <li class="nav-elipse-{{ $category->color }}"><a href="{{ route('front.kategori',$category->slug) }}" title="{{ $category->slug }}">{{ $category->title }}</a></li>

            @endforeach
        </ul>
    </aside>
