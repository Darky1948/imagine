<article class="brick entry format-standard animate-this">

    <div class="entry-thumb">
        <a href="{{ route('category', [$category->slug ]) }}" class="thumb-link"><img src="{{ $category->image }}"></a>
    </div>

    <div class="entry-text">
        <div class="entry-header">
            <h1 class="entry-title"><a href="{{ route('category', [$category->slug ]) }}">{{ $category->title }}</a></h1>
        </div>
    </div>

</article>