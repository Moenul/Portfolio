<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/admin_main.css')}}">
<title>Admin Pannel</title>
</head>
<body>


<nav class="navigation">
	<div class="dropdown_btn"><i class="fas fa-bars"></i></div>

	<ul class="nav_item">
		<li id="message"><i class="far fa-envelope"><span>12</span></i>
			<ul class="sub_dropdown">
				<a href=""><li>first msg</li></a>
				<a href=""><li>last msg</li></a>
			</ul>
		</li>
		<li id="notification"><i class="far fa-bell"><span>6</span></i>
			<ul class="sub_dropdown">
				<a href=""><li>new comment</li></a>
				<a href=""><li>post sheraed</li></a>
				<a href=""><li>subscriber request</li></a>
			</ul>
		</li>
		<li><i class="fas fa-users"><span>99</span></i></li>

		<li id="profile" style="padding:0px;"><img src="../images/profile3.jpg">
			<span>Admin name</span>
			<ul class="sub_dropdown">
				<a href=""><li><i class="fas fa-user"></i>Profile</li></a>
				<a href=""><li><i class="fas fa-power-off"></i>Log Out</li></a>
			</ul>
		</li>
	</ul>

</nav>


<div class="mainSection">
	<div class="side_nav">
		<ul>
			<a href="{{ url('/admin') }}"><li><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></li></a>
			{{-- <li><i class="far fa-clipboard"></i><span>Posts</span>
				<ul class="side_dropdown">
					<a href="{{ route('admin.posts.index') }}"><li>View Posts</li></a>
					<a href="{{ route('admin.posts.index') }}"><li>Add Post</li></a>
				</ul>
			</li> --}}

            <a href="{{ route('admin.posts.index') }}"><li><i class="far fa-clipboard"></i><span>Posts</span></li></a>
            <a href="{{ route('admin.categories.index') }}"><li><i class="fas fa-th-large"></i><span>Category</span></li></a>
            <a href="{{ route('admin.abouts.index') }}"><li><i class="fas fa-address-card"></i><span>About</span></li></a>
            <a href="{{ route('admin.services.index') }}"><li><i class="fas fa-toolbox"></i><span>Service</span></li></a>
            <a href="{{ route('admin.gallaries.index') }}"><li><i class="fas fa-vr-cardboard"></i><span>Gallary</span></li></a>
            <a href="{{ route('admin.socials.index') }}"><li><i class="fas fa-share-alt"></i><span>Social</span></li></a>

			<a href=""><li><i class="far fa-envelope"></i><span>Mailbox</span></li></a>
			<a href=""><li><i class="fas fa-puzzle-piece"></i><span>Widget</span></li></a>
			<a href=""><li><i class="fas fa-user"></i><span>Profile</span></li></a>
		</ul>
	</div>



    @yield('content')



</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/admin_scripts.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</body>
</html>
