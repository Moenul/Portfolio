@extends('layouts.admin')

@section('content')

<div class="content_section">
    <!-- start header -->
    <div class="header">
        <h3>Artical</h3>&nbsp;&nbsp;<span>Edit Artical</span>
        <a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="row">
        @if ($artical)

        <div class="col-6 m-0">
            {!! Form::model($artical, ['method'=>'PATCH', 'action'=> ['AdminArticalsController@update', $artical->id]]) !!}

            <div class="form-group">
                {!! Form::label('artical_content','Write Here:') !!}
                {!! Form::textarea('artical_content', $artical->artical_content, ['class'=>'form-control','rows'=>5]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('artical_type','Artical Type:') !!}
                <select name="artical_type" class="form-control">
                    <option value="{{ $artical->artical_type }}">{{$artical->artical_type}}</option>
                    <option value="Post">Post</option>
                    <option value="Quote">Quote</option>
                </select>
            </div>
            <div class="form-group">
                {!! Form::submit('Update artical', ['class'=>'btn btn-primary float-right']) !!}
            </div>

            {!! Form::close() !!}
        </div>

        @endif
    </div>


    <!-- end dashboard content -->
</div>


@endsection
