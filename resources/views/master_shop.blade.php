<!DOCTYPE html>
<html lang="en">
@include('layouts_wish.includes.css')
<body>

<div class="super_container">
	
	@include('layouts_wish.includes.header')	

	@yield('content')

	@include('layouts_wish.includes.footer')	
	
</div>

@yield('js_home')
@yield('js_category')
@yield('js_cart')
@yield('js_checkout')
@yield('js_contact')
@yield('js_product')

</body>
</html>