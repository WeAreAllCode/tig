<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		@include('layouts.head')
	</head>
	<body class="bg-gray-1 font-geeky text-gray-9">
		
		<!-- HEADER -->
		@include('layouts.header')

		<!-- SLIDE OUT NAV -->
		@include('layouts.nav')

		<div class="container">

			<!-- MAIN CONTENT -->
			<section class="content flex">
				@yield('content')
			</section>
		
			<!-- FOOTER -->
			@include('layouts.footer')

		</div>

		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}"></script>

	</body>
</html>
