<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ URL::to('public/src/css/main.css') }}">
	@yield('styles')
</head>
<body>
	@include('includes.header')		<!-- way to include script in laravel -->
	<div class="main">
		@yield('content')
	</div>
</body>
</html>