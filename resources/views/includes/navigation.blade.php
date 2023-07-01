<div class="nav_bar">
    <div class="nav_button">
        <div class="button_bar button_bar_1"></div>
        <div class="button_bar button_bar_2"></div>
    </div>
    <div class="nav_list">
        <ul>

        @if ($categories)
            @foreach ($categories as $category)
                <a href="{{ url($category->link) }}"><li>{{$category->name}}</li></a>
            @endforeach
        @endif

        </ul>
    </div>
    <div class="nav_brand">
        <img style="width:100%" src="{{ '/images/Logo.png' }}" >
    </div>
</div>

