@extends('front.layout')

@section('main')

    <!-- masonry
    ================================================== -->
    <section id="bricks">

        <div class="row masonry">
            @isset($info)
                @component('front.components.alert')
                    @slot('type')
                        info
                    @endslot
                    {!! $info !!}
                @endcomponent
            @endisset
            @if ($errors->has('search'))
                @component('front.components.alert')
                    @slot('type')
                        error
                    @endslot
                    {{ $errors->first('search') }}
                @endcomponent
            @endif  
            <!-- brick-wrapper -->
            <div class="bricks-wrapper">

                <div class="grid-sizer"></div>
@if(isset($categories))
                @foreach ($categories as $category)

                    @include('front.categories', compact('$category'))

                @endforeach

@else
                @foreach($posts as $post)

                    @include('front.brick-standard', compact('$post'))

                @endforeach
@endif

            </div>

        </div> <!-- end row -->

        <div class="row">

            {{ $posts->links('front.pagination') }}

        </div>


    </section> <!-- end bricks -->

@endsection
