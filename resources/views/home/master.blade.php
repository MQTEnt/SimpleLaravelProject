<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('head.title')</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	@yield('head.css')
</head>
<body>
	@include('home.navbar')
	@yield('body.content')
	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	@yield('body.js')
</body>
</html>