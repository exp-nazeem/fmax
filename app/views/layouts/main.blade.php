<!DOCTYPE html> 
<html lang="en"> 
	<!-- style -->
	<head> @include('style') </head> <!-- end syele --> 
		<body> 
			<!-- header --> @include('header') <!-- end feader --> 
			<!-- wrapper --> 
			<div id="wrapper"> @yield('content') 
			</div> <!-- end wrapper -->
			 <!-- footer --> @include('footer') <!-- end footer --> 
			 <!-- footer --> @include('script') <!-- end footer --> 
		</body> 
</html>