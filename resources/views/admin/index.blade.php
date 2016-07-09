<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin's page</title>
	<link rel="stylesheet" href="/css/admin-html.css">
	@yield('head.css')
</head>
<body>
	<div id="title">
		<div class="row"><a href="{{url('/')}}">&larr; Home Page</a></div>
	</div>
	<div id="navbar">
		<ul>
			<li type="disc"><a href="{{url('/cate')}}">Categories</a></li>
			<li type="disc"><a href="{{url('/product')}}">Products</a></li>
		</ul>
	</div>
	<div id="content">
		@yield('body.content')
	</div>
</body>
</html>