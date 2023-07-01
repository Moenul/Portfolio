@extends('layouts.admin')

@section('content')

<div class="content_section">
    <!-- start header -->
    <div class="header">
        <h3>Articals</h3>&nbsp;&nbsp;<span>Add Articals</span>
        <a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="row">
        <div class="col-6">
            {!! Form::open(['method'=>'POST', 'action'=>'AdminArticalsController@store']) !!}
            <div class="form-group">
                {!! Form::label('artical_content','Add Artical:') !!}
                {!! Form::textarea('artical_content', null, ['class'=>'form-control','rows'=>5]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('artical_type','Artical Type:') !!}
                <select name="artical_type" class="form-control">
                    <option value="Post">Post</option>
                    <option value="Quote">Quote</option>
                </select>
            </div>
            <div class="form-group">
                {!! Form::submit('Create Artical', ['class'=>'btn btn-success  float-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>

    <!-- end dashboard content -->
</div>


@endsection
