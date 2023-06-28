@extends('layouts.admin')

@section('content')

<div class="content_section">
    <!-- start header -->
    <div class="header">
        <h3>Gallary</h3>&nbsp;&nbsp;<span>View Gallaries</span>
        <a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="row">
        <div class="col-6">
            {!! Form::open(['method'=>'POST', 'action'=>'AdminGallariesController@store', 'files'=>true]) !!}
            <div class="mb-2 d-flex justify-content-center">
                <img  class="action_field border border-secondary" id="preview_img" width="340px" height="230px"  src="{{ '/images/Empty _Images.jpg' }}">
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Image:') !!}
                {!! Form::file('photo_id', ['id' => 'imgInp'], null) !!}
            </div>
            <div class="form-group">
                {!! Form::label('gallary_desc','Gallary Description:') !!}
                {!! Form::textarea('gallary_desc', null, ['class'=>'form-control', 'rows'=>2]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('gallary_link','Gallary Link:') !!}
                {!! Form::text('gallary_link', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Category', ['class'=>'btn btn-success  float-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>

        <div class="col-6">
            <table class="table table-dark table-hover mx-auto">
                <thead>
                <tr>
                    <th style="width:40px; text-align:center;">ID</th>
                    <th>Image</th>
                    <th style="width:80px; text-align:center;">Edit</th>
                    <th style="width:80px; text-align:center;">Delete</th>
                </tr>
                </thead>
                @if ($gallaries)
                <tbody>
                    @foreach ($gallaries as $gallary)
                    <tr>
                        <td style="width:40px; text-align:center;">{{$gallary->id}}</td>
                        <td>
                            <img class="action_field border border-secondary" id="preview_img" width="180px" height="120px" src="{{ $gallary->photo ? $gallary->photo->file : '/images/Empty _Images.jpg' }}">
                        </td>
                        <td style="width:80px; text-align:center; font-size: 20px;"><a href="{{ Route('admin.gallaries.edit', $gallary->id) }}"><i class="far fa-edit text-warning"></i></a></td>
                        <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminGallariesController@destroy', $gallary->id]]) !!}
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
