@extends('layouts.admin')

@section('content')

<div class="content_section">
    <!-- start header -->
    <div class="header">
        <h3>Service</h3>&nbsp;&nbsp;<span>View Services</span>
        <a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="row">
        <div class="col-6">
            {!! Form::open(['method'=>'POST', 'action'=>'AdminServicesController@store']) !!}
            <div class="form-group">
                {!! Form::label('service_icon','Service Icon:') !!}
                {!! Form::text('service_icon', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('service_name','Service Name:') !!}
                {!! Form::text('service_name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('service_desc','Service Description:') !!}
                {!! Form::textarea('service_desc', null, ['class'=>'form-control','rows'=> 2]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('service_title','Service Title:') !!}
                {!! Form::text('service_title', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('service_type','Service Type:') !!}
                {!! Form::text('service_type', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('service_component_title','Service Component Title:') !!}
                {!! Form::text('service_component_title', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('service_components','Service Components:') !!}
                {!! Form::textarea('service_components', null, ['class'=>'form-control','rows'=> 5]) !!}
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
                    <th>Icon</th>
                    <th>Name</th>
                    <th style="width:80px; text-align:center;">Edit</th>
                    <th style="width:80px; text-align:center;">Delete</th>
                </tr>
                </thead>
                @if ($services)
                <tbody>
                    @foreach ($services as $service)
                    <tr>
                        <td style="width:40px; text-align:center;">{{$service->id}}</td>
                        <td style="font-size:50px; line-height:0">
                            <span class="iconify" data-icon="{{$service->service_icon}}"></span>
                        </td>
                        <td>{{$service->service_name}}</td>
                        <td style="width:80px; text-align:center; font-size: 20px;"><a href="{{ Route('admin.services.edit', $service->id) }}"><i class="far fa-edit text-warning"></i></a></td>
                        <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminServicesController@destroy', $service->id]]) !!}
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
