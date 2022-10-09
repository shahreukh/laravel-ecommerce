<!-- Sidebar ================================================== -->
<div id="sidebar" class="span3">
	<div class="well well-small">
		<a id="myCart" href="{{ route('cart')}}">
			<img src="{{ asset('themes/images/ico-cart.png')}}" alt="cart">Items in your cart
			<span class="badge badge-warning pull-right">Price</span>
		</a>
	</div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a>CPU</a>
				<ul>
					<li><a class="active" href="#"><i class="icon-chevron-right"></i>AMD Ryzen 5</a></li>
					<li><a href="#"><i class="icon-chevron-right"></i>AMD Ryzen 7</a></li>
					<li><a href="#"><i class="icon-chevron-right"></i>Intel Core i9</a></li>
					<li><a href="#"><i class="icon-chevron-right"></i>Intel Core i7</a></li>
				</ul>
			</li>
			<li class="subMenu"><a>MOTHERBOARD</a>
				<ul style="display:none">
					<li><a href="#"><i class="icon-chevron-right"></i>Asus</a></li>
					<li><a href="#"><i class="icon-chevron-right"></i>MSI</a></li>
				</ul>
			</li>
			<li class="subMenu"><a>GPU</a>
				<ul style="display:none">
					<li><a href="#"><i class="icon-chevron-right"></i>Strix</a></li>
					<li><a href="#"><i class="icon-chevron-right"></i>ROG</a></li>
					<li><a href="#"><i class="icon-chevron-right"></i>Mech OC</a></li>
				</ul>
			</li>
			<li><a href="#">RAM</a></li>
			<li><a href="#">PSU</a></li>
		</ul>
		<br/>
		  <div class="thumbnail">
			<img src="{{ asset('themes/images/products/intel.webp')}}" alt="Bootshop panasonoc New camera"/>
			<div class="caption">
				<h5>Intel Core i9</h5>
				<h4 style="text-align:center"><a class="btn" href="#"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="{{ asset('themes/images/products/ryzen.jpg')}}" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
					<h5>AMD Ryzen 7</h5>
					<h4 style="text-align:center"><a class="btn" href="#"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$190.00</a></h4>
				</div>
			  </div><br/>
			<div class="thumbnail">
				<img src="{{ asset('themes/images/payment_methods.png')}}" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>
<!-- Sidebar end=============================================== -->