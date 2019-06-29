<!DOCTYPE html>
<html>
@include('admin.partial.header')
<body>
	@include('admin.partial.navbar')
		@include('admin.partial.sidebar')
	@yield('content')
	@include('admin.partial.footer')
</body>
</html>