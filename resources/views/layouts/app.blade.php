<!DOCTYPE html>
<html>

	@include('partials.head')

	<body>

		@include('partials.header')

		<div class="wrapper">

			<main>
                @yield('content')
			</main>

			@include('partials.footer')

		</div>

		<script defer src="{{ asset('assets/js/vendor.min.js') }}"></script>
    	<script defer src="{{ asset('assets/js/scripts.min.js') }}"></script>

	</body>

</html>