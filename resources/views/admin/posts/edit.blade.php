@extends('layouts.admin')

@section('content')

<div class="content_section">
    <!-- start header -->
    <div class="header">
        <h3>Post</h3>&nbsp;&nbsp;<span>Edit Post</span>
        <a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="row">
        @if ($post)

        <div class="col-6 m-0">
            {!! Form::model($post, ['method'=>'PATCH', 'action'=> ['AdminPostsController@update', $post->id]]) !!}

            <div class="form-group">
                {!! Form::label('post_content','Write Here:') !!}
                {!! Form::textarea('post_content', $post->post_content, ['class'=>'form-control','rows'=>5]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update post', ['class'=>'btn btn-primary float-right']) !!}
            </div>

            {!! Form::close() !!}
        </div>

        @endif
    </div>


    <!-- end dashboard content -->
</div>


@endsection
