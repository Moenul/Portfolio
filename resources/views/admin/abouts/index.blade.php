@extends('layouts.admin')

@section('content')

<div class="content_section">
    <!-- start header -->
    <div class="header">
        <h3>About</h3>&nbsp;&nbsp;<span>View Abouts</span>
        <a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a>
        <hr>
    </div>
    <!-- end header -->

    <!-- start dashboard content -->

    <div class="row">

        <div class="col-1"></div>
        <div class="col-6">
            @if ($abouts)
                @foreach ($abouts as $about)

            <div class="mb-2 d-flex justify-content-center">
                <img class="action_field border border-secondary" width="180px" height="160px" src="{{ $about->photo ? $about->photo->file : '/images/Empty _Images.jpg' }}">
            </div>
            <div class="form-group">
                <label for=""><b>Gallary Intro:</b></label>
                <p>{{$about->service_intro}}</p>
            </div>
            <div class="form-group">
                <label for=""><b>Article Intro:</b></label>
                <p>{{$about->article_intro}}</p>
            </div>
            <div class="form-group">
                <label for=""><b>Contact Intro:</b></label>
                <p>{{$about->contact_intro}}</p>
            </div>
            <div class="form-group">
                <label for=""><b>Footer Intro:</b></label>
                <p>{{$about->footer_intro}}</p>
            </div>

            <a class="btn btn-primary" href="{{ Route('admin.abouts.edit', $about->id) }}">Edit Abouts</a>
                @endforeach
            @endif
        </div>

    </div>


    <!-- end dashboard content -->
</div>


@endsection
