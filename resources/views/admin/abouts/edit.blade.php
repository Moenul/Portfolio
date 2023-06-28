@extends('layouts.admin')

@section('content')

<div class="content_section">
    <!-- start header -->
    <div class="header">
        <h3>About</h3>&nbsp;&nbsp;<span>Edit About</span>
        <a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="row">
        @if ($about)

        <div class="col-2"></div>
        <div class="col-6">
            {!! Form::model($about, ['method'=>'PATCH', 'action'=> ['AdminAboutsController@update', $about->id], 'files'=>true]) !!}

            <div class="mb-2 d-flex justify-content-center">
                <img class="action_field border border-secondary" id="preview_img" width="180px" height="160px" src="{{ $about->photo ? $about->photo->file : '/images/Empty _Images.jpg' }}">
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Image:') !!}
                {!! Form::file('photo_id', ['id' => 'imgInp'], null) !!}
            </div>
            <div class="form-group">
                {!! Form::label('service_intro','Gallary Intro:') !!}
                {!! Form::text('service_intro', $about->service_intro, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('article_intro','Article Intro:') !!}
                {!! Form::text('article_intro', $about->article_intro, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('contact_intro','Contact Intro:') !!}
                {!! Form::text('contact_intro', $about->contact_intro, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('footer_intro','Footer Intro:') !!}
                {!! Form::text('footer_intro', $about->footer_intro, ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Update Abouts', ['class'=>'btn btn-primary float-right']) !!}
            </div>

            {!! Form::close() !!}
        </div>

        @endif
    </div>


    <!-- end dashboard content -->
</div>


@endsection
