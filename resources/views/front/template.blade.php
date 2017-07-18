<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>

	<link href="{{ asset('non-admin') }}/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('non-admin') }}/css/animate.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('non-admin') }}/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('non-admin') }}/css/style.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('non-admin') }}/css/photobox.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('non-admin') }}/css/responsive.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		.navigation {
			margin: 15px;
		}
		.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
			border-color: #337ab7;
			color: black;
			cursor: default;
			z-index: 2;
		}
	</style>
	@yield('css')
</head>

<body>
	<div class="top-bar">
		<div class="container-fluid">
			<div class="right-bar">
				<ul class="login">
					<li><i class="icon-login"></i></li>
					<li><a href="{{ route('home') }}"><span>Admin</span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<header>
		<div class="container-fluid">
			<div class="navigation clearfix">
				<div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('/') }}non-admin/images/logo-asli.jpg" alt="#"/> </a></div>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle"> 
						<span class="sr-only">Toggle navigation</span> 
						<span class="icon-bar first"></span> 
						<span class="icon-bar middle"></span> 
						<span class="icon-bar last"></span> 
					</button>
				</div>
				<div class="menu">
					<nav class="navbar navbar-default">
						<div id="navbar" class="navbar-collapse collapse pull-right">
							<ul class="nav navbar-nav"></ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	@yield('content')
	<hr>
	<footer class="bg-color">
		<div class="lower-footer">
			<p>Made with
				<span>
					<i class="fa fa-heart-o"></i>
				</span>by 
				<a href="http://themeforest.net/user/Template-Geek">Ahmad Solehudin A</a> | Copyright <?php echo date('Y');?>
			</p>
		</div>
	</footer>
	<script src="{{ asset('non-admin') }}/js/jquery.js" type="text/javascript"></script> 
	<script src="{{ asset('non-admin') }}/js/bootstrap.js" type="text/javascript"></script> 
	<script type="text/javascript" src="{{ asset('non-admin') }}/js/scripts.js"></script>
	<script type="text/javascript" src="{{ asset('non-admin') }}/js/jquery.appear.js"></script>
	<script type="text/javascript" src="{{ asset('non-admin') }}/js/jquery.mixitup.min.js"></script> 
	<script type="text/javascript" src="{{ asset('non-admin') }}/js/jquery.mixitup.min.js"></script> 
	@yield('js');
</body>
</html>
