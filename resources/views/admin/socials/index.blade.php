@extends('layouts.admin')

@section('content')

<div class="content_section">
    <!-- start header -->
    <div class="header">
        <h3>Social</h3>&nbsp;&nbsp;<span>View Social</span>
        <a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="row">
        <div class="col-4">
            {!! Form::open(['method'=>'POST', 'action'=>'AdminSocialsController@store']) !!}
            <div class="form-group">
                {!! Form::label('social_icon','Icon:') !!}
                {!! Form::text('social_icon', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('social_icon_color','Icon Color:') !!}
                {!! Form::text('social_icon_color', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('social_icon_link','Social Link:') !!}
                {!! Form::text('social_icon_link', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Category', ['class'=>'btn btn-success  float-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-2"></div>
        <div class="col-6">
            <table class="table table-dark table-hover mx-auto">
                <thead>
                <tr>
                    <th style="width:40px; text-align:center;">ID</th>
                    <th>Icon</th>
                    <th>Link</th>
                    <th style="width:80px; text-align:center;">Edit</th>
                    <th style="width:80px; text-align:center;">Delete</th>
                </tr>
                </thead>
                @if ($socials)
                <tbody>
                    @foreach ($socials as $social)
                    <tr>
                        <td style="width:40px; text-align:center;">{{$social->id}}</td>
                        <td style="font-size:40px; line-height:0">
                            <span class="iconify" data-icon="{{$social->social_icon}}"></span>
                        </td>
                        <td>{{$social->social_icon_link}}</td>
                        <td style="width:80px; text-align:center; font-size: 20px;"><a href="{{ Route('admin.socials.edit', $social->id) }}"><i class="far fa-edit text-warning"></i></a></td>
                        <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminSocialsController@destroy', $social->id]]) !!}
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
