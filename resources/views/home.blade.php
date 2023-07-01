@extends('layouts.app')

@section('navigation')
    @include('includes.navigation')
@endsection

@section('header_content')

<div class="into_bar">
    <span class="first_bg_style">Hi</span>
    <span class="display_name">I'm MOENUL ISLAM</span>

    <span class="second_bg_style">;</span>

    <span class="animate_title">Full-Stack</span>
    <div class="animate_section">
        <span>WEB <span class="animate_text auto-type"></span></span>
    </div>

    <div class="display_image_section">
        <div class="bg_image">
            @if ($abouts)
                @foreach ($abouts as $about)
                <img src="{{ $about->photo ? $about->photo->file : '/images/Empty _Images.jpg' }}">
                @endforeach
            @endif
        </div>
    </div>

</div>
@endsection



@section('content')


<div class="service_section">
	<div class="container">



        @if ($services)
            @foreach ($services as $service)
            <div class="service_bar">
                <div class="logo_section">
                    <div class="logo_bar">
                        <span class="iconify" data-icon="{{$service->service_icon}}"></span>
                    </div>
                </div>
                <div class="name_section">{{$service->service_name}}</div>
                <div class="desc_section"><p>{{$service->service_desc}}</p></div>
                <div class="cool_title">{{$service->service_title}}</div>
                <div class="cool_desc">{{$service->service_type}}</div>
                <div class="skill_title">{{$service->service_component_title}}</div>
                <div class="skill_desc">
                    {!! nl2br(e($service->service_components)) !!}
                </div>
            </div>
            @endforeach
        @endif

	</div>
</div>

<div class="gallary_section" id="gallary">
	<div class="container">
		<div class="main_title">My Recent Work</div>
		<div class="sub_title">Here are a few post of projects I've worked on.</div>

		<div class="gallary">


            @if ($gallaries)
                @foreach ($gallaries as $gallary)
                <div class="gallary_item">
                    <img src="{{ $gallary->photo ? $gallary->photo->file : '/images/Empty _Images.jpg' }}">
                    <div class="gallary_item_hover">
                        <div class="item_desc">{{ $gallary->gallary_desc }}</div>
                        <a href="{{ $gallary->gallary_link }}" target="_blank"><div class="item_button">Visit Website</div></a>
                    </div>
                </div>
                @endforeach
            @endif

		</div>

	</div>
</div>



<div class="artical_section">
	<div class="container">
		<div class="style_bar">
			<div class="style_box">
				<div class="span span_1">I Write,</div>
				<div class="span span_2">Sometimes</div>
				<div class="design">
					<img src="{{ '/images/star.png' }}">
				</div>
			</div>
		</div>
		<div class="button_bar">
			<div class="button_title"><p>
				@if ($abouts)
                    @foreach ($abouts as $about)
                        {{$about->article_intro}}
                    @endforeach
                @endif
			</p></div>
			<a href="{{ url('/articals') }}"><div class="button">Read my Articles <span class="iconify" data-icon="cil:arrow-right"></span></div></a>
		</div>
	</div>
</div>



<div class="contact_section" id="contact">
	<div class="container">
		<div class="main_title">Say hello?</div>
		<div class="sub_title">
            @if ($abouts)
                @foreach ($abouts as $about)
                    {{$about->contact_intro}}
                @endforeach
            @endif
        </div>

		<div class="contact_bar">
			<div class="mail_section">
				<textarea name="content" id="" cols="30" rows="5" placeholder="Write here..."></textarea>
				<input type="email" name="email" id="" placeholder="example@mail.com">
				<input type="submit" value="Send">
			</div>
			<div class="social_section">
				<div class="social_bar">

                    @if ($socials)
                        @foreach ($socials as $social)
                            <a href="{{$social->social_icon_link}}" target="_blank"><div class="social_iteml" style="color:{{$social->social_icon_color}};">
                                <span class="iconify" data-icon="{{$social->social_icon}}"></span>
                            </div></a>
                        @endforeach
                    @endif

				</div>
			</div>
		</div>

	</div>
</div>



@endsection


@section('footer_content')
    @include('includes.footer_content')
@endsection

@section('scripts')

<script>
// --------- Typed Js ------------------
var typed = new Typed('.auto-type', {
	strings: ['DESIGNER', 'DEVELOPER'],
	typeSpeed: 200,
	backSpeed: 200,
	backDelay: 1000,
	cursorChar: "_",
	loop: true
});
// --------- Typed Js ------------------
</script>

@endsection
