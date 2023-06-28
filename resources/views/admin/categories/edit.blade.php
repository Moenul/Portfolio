@extends('layouts.admin')

@section('content')

<div class="content_section">
    <!-- start header -->
    <div class="header">
        <h3>Category</h3>&nbsp;&nbsp;<span>Edit Category</span>
        <a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="row">
        @if ($category)

        <div class="col-4 m-0">
            {!! Form::model($category, ['method'=>'PATCH', 'action'=> ['AdminCategoriesController@update', $category->id]]) !!}

            <div class="form-group">
                {!! Form::label('name','Category Name:') !!}
                {!! Form::text('name', $category->name, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('link','Link:') !!}
                {!! Form::text('link',  $category->link, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Category', ['class'=>'btn btn-primary float-right']) !!}
            </div>

            {!! Form::close() !!}
        </div>

        @endif
    </div>


    <!-- end dashboard content -->
</div>


@endsection
