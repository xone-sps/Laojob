<!DOCTYPE html>
<html>
@include('admin.partial.header')
<body>
	<div class="dashboard-main-wrapper">
		@include('admin.partial.navbar')
		@include('admin.partial.sidebar')
		@yield('content')
		@include('admin.partial.footer')
	</div>

</body>
</html>