@extends('layouts.app')

{{-- @section('style')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
@endsection --}}

@section('navigation')
    @include('includes.navigation')
@endsection

@section('content')


<div class="artical_page">
	<div class="container">
        <div class="artical_bar">
            @if ($posts)
                @foreach ($posts as $post)
                <div class="artical">
                    <div class="date">{{$post->created_at->format('jS \\of F Y')}}</div>
                    <div class="artical_content">{!! Str::limit($post->artical_content, 200, ' ...') !!}</div>
                    <div class="artical_views"><a href="{{ action('ArticalsController@show', ['id'=>$post->id ]) }}" class="see_more">See More </a>
                        <p> <span class="iconify" data-icon="carbon:view-filled"></span>
                        @if ($post->artical_views !== NULL)
                            {{$post->artical_views}}
                        @else
                            0
                        @endif
                        </p></div>
                </div>
                @endforeach
            @endif

            <div style="width:100%; display: flex; justify-content:center;">{{ $posts->links("pagination::bootstrap-4") }}</div>

        </div>

        <div class="quote_bar">
            @if ($quotes)
                @foreach ($quotes as $quote)
                <div class="quote">
                    <p>{{$quote->artical_content}}</p>
                </div>
                @endforeach
            @endif
        </div>

	</div>
</div>



@endsection

@section('footer_content')
    @include('includes.footer_content')
@endsection

{{-- @section('scripts')
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection --}}
