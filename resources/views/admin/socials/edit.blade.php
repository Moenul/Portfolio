@extends('layouts.admin')

@section('content')

<div class="content_section">
    <!-- start header -->
    <div class="header">
        <h3>Social</h3>&nbsp;&nbsp;<span>Edit Social</span>
        <a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="row">
        @if ($social)

        <div class="col-6 m-0">
            {!! Form::model($social, ['method'=>'PATCH', 'action'=> ['AdminSocialsController@update', $social->id]]) !!}

            <div class="form-group">
                {!! Form::label('social_icon','Icon:') !!}
                {!! Form::text('social_icon', $social->social_icon, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('social_icon_color','Icon Color:') !!}
                {!! Form::text('social_icon_color', $social->social_icon_color, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('social_icon_link','Social Link:') !!}
                {!! Form::text('social_icon_link', $social->social_icon_link, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update service', ['class'=>'btn btn-primary float-right']) !!}
            </div>

            {!! Form::close() !!}
        </div>

        @endif
    </div>


    <!-- end dashboard content -->
</div>


@endsection
