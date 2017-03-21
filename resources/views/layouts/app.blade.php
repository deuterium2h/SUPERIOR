<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'SUPERIOR') }} | @yield('title')</title>

	<!-- Styles -->
	<link href="/css/app.css" rel="stylesheet">
	<link href="/css/libs.css" rel="stylesheet">
	<link rel="icon" href="/logoSmall.png" type="image/x-icon">
	@yield('custom-css')
	<!-- Scripts -->
	<script>
		window.SUPERIOR = <?php echo json_encode([
			'csrfToken' => csrf_token(),
		]); ?>
	</script>
</head>
<body>
	<div>
		@include('layouts.navbar')

		@yield('content')
	</div>

	<!-- Scripts -->
	<script src="/js/app.js"></script>
	<script src="/js/libs.js"></script>
	@include('layouts._flash')
	@yield('custom-js')
</body>
</html>
