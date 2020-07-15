<!-- Header -->

	<header class="header">
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#">Wish</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="#">home</a></li>
					<li><a href="/products">clothes</a></li>
				</ul>
			</nav>
			<div class="header_content ml-auto">
				<div class="shopping">
					<!-- Cart -->
					<a href="/carts">
						<div class="cart">
							<img src="theme/images/shopping-bag.svg" alt="">
							<div class="cart_num_container">
								<div class="cart_num_inner">
									<div class="cart_num">{{ showCartQuantity() }}</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">Wish</a></div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="#">home</a></li>
				<li class="menu_mm"><a href="/products">clothes</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->