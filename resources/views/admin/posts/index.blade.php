@extends('layouts.admin')

@section('content')

<div class="content_section">
    <!-- start header -->
    <div class="header">
        <h3>Posts</h3>&nbsp;&nbsp;<span>View Posts</span>
        <a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="row">
        <div class="col-6">
            {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store']) !!}
            <div class="form-group">
                {!! Form::label('post_content','Add Post:') !!}
                {!! Form::textarea('post_content', null, ['class'=>'form-control','rows'=>5]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Post', ['class'=>'btn btn-success  float-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>

        <div class="col-6">
            <table class="table table-dark table-hover mx-auto">
                <thead>
                <tr>
                    <th style="width:40px; text-align:center;">ID</th>
                    <th>Content</th>
                    <th>Views</th>
                    <th style="width:80px; text-align:center;">Edit</th>
                    <th style="width:80px; text-align:center;">Delete</th>
                </tr>
                </thead>
                @if ($posts)
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td style="width:40px; text-align:center;">{{$post->id}}</td>
                        <td>{{$post->post_content}}</td>
                        <td>{{$post->views}}</td>
                        <td style="width:80px; text-align:center; font-size: 20px;"><a href="{{ Route('admin.posts.edit', $post->id) }}"><i class="far fa-edit text-warning"></i></a></td>
                        <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id]]) !!}
                            {{ Form::button('<i class="fas fa-trash-alt text-danger"></i>', ['type' => 'submit', 'class' => 'btn'] )  }}
                        {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                @endif
             </table>
        </div>
    </div>


    <!-- end dashboard content -->
</div>


@endsection
