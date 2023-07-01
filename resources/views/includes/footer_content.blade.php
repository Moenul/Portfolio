<div class="footer_content">
    <div class="icon_bar">
        <span class="iconify" data-icon="arcticons:workouttime"></span>
    </div>
    <p>
    @if ($abouts)
        @foreach ($abouts as $about)
            {{$about->footer_intro}}
        @endforeach
    @endif
    </p>
</div>
