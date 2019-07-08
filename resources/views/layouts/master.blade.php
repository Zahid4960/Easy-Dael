<!DOCTYPE html>
<html>
<head>
	<title>Easy Deal</title>
	{{-- include links --}}
	@include('layouts.partials.links')
</head>
<body>

	
	{{-- include navbar --}}
	@include('layouts.partials.navbar')

	{{-- yield area --}}
	@yield('content')

	<br>
	<hr>
	<br>

	{{-- include footer --}}
	@include('layouts.partials.footer')


	{{-- include scripts --}}
	@include('layouts.partials.scripts')



</body>
</html>