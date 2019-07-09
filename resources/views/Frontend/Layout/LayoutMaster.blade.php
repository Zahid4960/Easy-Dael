<!DOCTYPE html>
<html>
<head>
	<title>Easy Deal</title>
	{{-- include links --}}
	@include('Frontend.Layout.LayoutPartials.LayoutLinks')
</head>
<body>


	{{-- include navbar --}}
	@include('Frontend.Layout.LayoutPartials.LayoutNavbar')

	{{-- yield area --}}
	@yield('content')

	<br>
	<hr>
	<br>

	{{-- include footer --}}
	@include('Frontend.Layout.LayoutPartials.LayoutFooter')


	{{-- include scripts --}}
	@include('Frontend.Layout.LayoutPartials.LayoutScripts')



</body>
</html>
