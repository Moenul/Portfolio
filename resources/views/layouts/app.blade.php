<!doctype html>
<html lang="en" style="scroll-behavior: smooth; overflow-x: scroll;">
<head>
    <meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<title>Moenul Islam</title>
	<link rel="shortcut icon" type="image/png" href="">
</head>
<body>

<!--  Custom Cursor -->

<div class="cursor"></div>
<div class="cursor2"></div>

<!--  Custom Cursor -->


<div class="header_section">
<div class="container">
    <div class="nav_bar">
		<div class="nav_button">
			<div class="button_bar button_bar_1"></div>
			<div class="button_bar button_bar_2"></div>
		</div>
		<div class="nav_list">
			<ul>
				<a href="{{ url('/') }}"><li>Home</li></a>
				<a href="{{ url('/#gallary') }}"><li>Gallary</li></a>
				<a href="{{ url('/articals') }}"><li>Articals</li></a>
				<a href=""><li>Resume</li></a>
				<a href="{{ url('/#contact') }}"><li>Say hello?</li></a>
			</ul>
		</div>
		<div class="nav_brand"></div>
	</div>


    @yield('header_content')

</div>
</div>



@yield('content')



<div class="footer">
	<div class="container">
		<div class="scroll_to_top" onclick="topFunction()" id="myBtn">
			<span class="iconify" data-icon="icon-park-outline:to-top"></span>
		</div>
		<div class="footer_content">
			<div class="icon_bar">
				<span class="iconify" data-icon="arcticons:workouttime"></span>
			</div>

			<p>Are you working on somthing great? I would love to help make it happen! Drop me a letter and start your project right now! Just do it.</p>
		</div>
		<div class="right_manager">
			&copy; All Rights Reserved
		</div>
	</div>
</div>
<!-- end footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="{{asset('js/scripts.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--<script src="/js/jquery-3.4.1.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<!--<script src="/js/bootstrap.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

<!-- Setup and start animation! -->
<script>

var typed = new Typed('.auto-type', {
	strings: ['DESIGNER', 'DEVELOPER'],
	typeSpeed: 200,
	backSpeed: 200,
	backDelay: 1000,
	cursorChar: "_",
	loop: true
});


// --------- Custom Cursor ------------------

// UPDATE: I was able to get this working again... Enjoy!

var cursor = document.querySelector('.cursor');
var cursorinner = document.querySelector('.cursor2');
var a = document.querySelectorAll('a');

document.addEventListener('mousemove', function(e){
  var x = e.clientX;
  var y = e.clientY;
  cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
});

document.addEventListener('mousemove', function(e){
  var x = e.clientX;
  var y = e.clientY;
  cursorinner.style.left = x + 'px';
  cursorinner.style.top = y + 'px';
});

document.addEventListener('mousedown', function(){
  cursor.classList.add('click');
  cursorinner.classList.add('cursorinnerhover')
});

document.addEventListener('mouseup', function(){
  cursor.classList.remove('click')
  cursorinner.classList.remove('cursorinnerhover')
});

a.forEach(item => {
  item.addEventListener('mouseover', () => {
    cursor.classList.add('hover');
  });
  item.addEventListener('mouseleave', () => {
    cursor.classList.remove('hover');
  });
})

// --------- Custom Cursor ------------------

</script>

</body>
</html>
