@extends('layouts.app')

@section('navigation')
    @include('includes.navigation')
@endsection

@section('content')


<div class="artical_page">
	<div class="container">
        <div class="artical_bar">
            @if ($post)

            <div class="artical">
                <div class="date">{{$post->created_at->format('jS \\of F Y')}}</div>
                <div class="artical_content">{{$post->artical_content}}</div>
            </div>

            @endif
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
