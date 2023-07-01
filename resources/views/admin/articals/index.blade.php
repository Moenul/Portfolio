@extends('layouts.admin')

@section('content')

<div class="content_section">
    <!-- start header -->
    <div class="header">
        <h3>Articals</h3>&nbsp;&nbsp;<span>View Articals</span>
        <a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="row">
        <div class="col-7">
            <h3>Posts</h1>
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
                        <td>{!! Str::limit($post->artical_content, 100, ' ...') !!}</td>
                        <td>{{$post->artical_views}}</td>
                        <td style="width:80px; text-align:center; font-size: 20px;"><a href="{{ Route('admin.articals.edit', $post->id) }}"><i class="far fa-edit text-warning"></i></a></td>
                        <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminArticalsController@destroy', $post->id]]) !!}
                            {{ Form::button('<i class="fas fa-trash-alt text-danger"></i>', ['type' => 'submit', 'class' => 'btn'] )  }}
                        {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                @endif
             </table>
        </div>



        <div class="col-5">
            <h3>Quote</h1>
            <table class="table table-dark table-hover mx-auto">
                <thead>
                <tr>
                    <th style="width:40px; text-align:center;">ID</th>
                    <th>Content</th>
                    <th style="width:80px; text-align:center;">Edit</th>
                    <th style="width:80px; text-align:center;">Delete</th>
                </tr>
                </thead>
                @if ($quotes)
                <tbody>
                    @foreach ($quotes as $quote)
                    <tr>
                        <td style="width:40px; text-align:center;">{{$quote->id}}</td>
                        <td>{{$quote->artical_content}}</td>
                        <td style="width:80px; text-align:center; font-size: 20px;"><a href="{{ Route('admin.articals.edit', $quote->id) }}"><i class="far fa-edit text-warning"></i></a></td>
                        <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminArticalsController@destroy', $quote->id]]) !!}
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
