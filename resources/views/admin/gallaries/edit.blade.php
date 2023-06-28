@extends('layouts.admin')

@section('content')

<div class="content_section">
    <!-- start header -->
    <div class="header">
        <h3>Gallary</h3>&nbsp;&nbsp;<span>Edit Gallary</span>
        <a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="row">
        @if ($gallary)

        <div class="col-2"></div>
        <div class="col-6">
            {!! Form::model($gallary, ['method'=>'PATCH', 'action'=> ['AdminGallariesController@update', $gallary->id], 'files'=>true]) !!}

            <div class="mb-2 d-flex justify-content-center">
                <img class="action_field border border-secondary" id="preview_img" width="340px" height="230px" src="{{ $gallary->photo ? $gallary->photo->file : '/images/Empty _Images.jpg' }}">
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Image:') !!}
                {!! Form::file('photo_id', ['id' => 'imgInp'], null) !!}
            </div>
            <div class="form-group">
                {!! Form::label('gallary_desc','Gallary Description:') !!}
                {!! Form::textarea('gallary_desc', $gallary->gallary_desc, ['class'=>'form-control', 'rows'=>2]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('gallary_link','Gallary Link:') !!}
                {!! Form::text('gallary_link', $gallary->gallary_link, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Gallary', ['class'=>'btn btn-primary float-right']) !!}
            </div>

            {!! Form::close() !!}
        </div>

        @endif
    </div>


    <!-- end dashboard content -->
</div>


@endsection
