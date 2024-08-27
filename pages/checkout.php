<?php
require '../includes/init.php';
include pathOf('includes/header.php');
include pathOf('includes/navbar.php');
?>

<body class="page-template-default page page-id-9 theme-fidalgo qi-blocks-1.2.6 qodef-gutenberg--no-touch qode-framework-1.2.2 woocommerce-cart woocommerce-page woocommerce-no-js qodef-qi--no-touch qi-addons-for-elementor-1.6.9 qi-watermark-1.4.9 qodef-back-to-top--enabled qodef-skin--reseda-green  qodef-header--standard qodef-header-appearance--none qodef-mobile-header--standard qodef-drop-down-second--full-width qodef-drop-down-second--default fidalgo-core-1.0 fidalgo-1.0 qodef-content-grid-1400 qodef-header-standard--center qodef-search--fullscreen elementor-default elementor-kit-4" itemscope itemtype="https://schema.org/WebPage">

	<div id="qodef-page-inner" class="qodef-content-grid">
		<main id="qodef-page-content" class="qodef-grid qodef-layout--template qodef-grid-template--12 " role="main">
			<div class="qodef-grid-inner">
				<div class="qodef-grid-item qodef-page-content-section qodef-col--content">
					<div class="woocommerce">
						<div class="woocommerce-notices-wrapper"></div>
						<div id="qodef-woo-page" class="qodef--checkout">
							<div class="woocommerce-form-coupon-toggle">
								<div class="woocommerce-info">
									Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a> </div>
							</div>
							<form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">
								<p>If you have a coupon code, please apply it below.</p>
								<p class="form-row form-row-first">
									<label for="coupon_code" class="screen-reader-text">Coupon:</label>
									<input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">
								</p>
								<p class="form-row form-row-last">
									<button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
								</p>
								<div class="clear"></div>
							</form>
							<div class="woocommerce-notices-wrapper"></div>
								<div class="col2-set" id="customer_details">
									<div class="col-1">
										<div class="woocommerce-billing-fields">
											<h3>Billing details</h3>
											<div class="woocommerce-billing-fields__field-wrapper">
												<p class=""><label>First name&nbsp;<abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="FirstName" id="FirstName"></p>
												<p class=""><label>Last name&nbsp;<abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="LastName" id="LastName"></p>
												<p class=""><label>Street address&nbsp;<abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="Address" id="Address" placeholder="House number and street name" value="" autocomplete="address-line1" data-placeholder="House number and street name"></p>
												<p class=""><label>Town / City&nbsp;<abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="City" id="City"></p>
												<p class=""><label>ZIP Code&nbsp;<abbr class="required" title="required">*</abbr></label><input type="number" class="input-text " name="ZipCode" id="ZipCode"></p>
												<p class=""><label>Phone&nbsp;<abbr class="required" title="required">*</abbr></label><input type="number" class="input-text " name="Phone" id="Phone"></p>
												<p class=""><label>Email address&nbsp;<abbr class="required" title="required">*</abbr></label><input type="email" class="input-text " name="Email" id="Email"></p>
											</div>
										</div>
									</div>
								</div>
								<h3 id="order_review_heading">Your order</h3>
								<div id="order_review" class="">
									<table class="shop_table woocommerce-checkout-review-order-table">
										<thead>
											<tr>
												<th class="product-name">Product</th>
												<th class="product-total">Subtotal</th>
											</tr>
										</thead>
										<tbody>
											<tr class="cart_item">
												<td class="product-name">
													Pecan Sandies&nbsp; <strong class="product-quantity">×&nbsp;1</strong> </td>
												<td class="product-total">
													<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>27.00</bdi></span>
												</td>
											</tr>
											<tr class="cart_item">
												<td class="product-name">
													Whiskey Cream&nbsp; <strong class="product-quantity">×&nbsp;1</strong> </td>
												<td class="product-total">
													<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>30.00</bdi></span>
												</td>
											</tr>
										</tbody>
										<tfoot>
											<tr class="cart-subtotal">
												<th>Subtotal</th>
												<td><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>57.00</bdi></span></td>
											</tr>
											<tr class="woocommerce-shipping-totals shipping">
												<th>Shipping</th>
												<td data-title="Shipping">
													<ul id="shipping_method" class="woocommerce-shipping-methods">
													</ul>
												</td>
											</tr>
											<tr class="order-total">
												<th>Total</th>
												<td><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>57.00</bdi></span></strong> </td>
											</tr>
										</tfoot>
									</table> 
									<div id="payment" class="t">
										<ul class="wc_payment_methods payment_methods methods">
											<li class="wc_payment_method payment_method_bacs">
												<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked" data-order_button_text="">
												<label for="payment_method_bacs">
													Direct bank transfer </label>
												<div class="payment_box payment_method_bacs">
													<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
												</div>
											</li>
											<li class="wc_payment_method payment_method_cod">
												<input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" data-order_button_text="">

												<label for="payment_method_cod">
													Cash on delivery </label>
												<div class="payment_box payment_method_cod" style="display:none;">
													<p>Pay with cash upon delivery.</p>
												</div>
											</li>
										</ul> 
										<div class="">
											<button onclick="checkout()">Place order</button>
										</div>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	<script>
		function checkout() {
			var FirstName = $("#FirstName").val();
			var LastName = $("#LastName").val();
			var Address = $("#Address").val();
			var City = $("#City").val();
			var ZipCode = $("#ZipCode").val();
			var Phone = $("#Phone").val();
			var Email = $("#Email").val();

			$.ajax({
				type: "POST",
				url: "../admin/api/checkout/insert.php",
				data: {
					FirstName: FirstName,
					LastName: LastName,
					Address: Address,
					City: City,
					ZipCode: ZipCode,
					Phone: Phone,
					Email: Email
				},
				success: function(data) {
					alert(data);
				}
			});
		}
	</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<?php
	include pathOf('includes/scripts.php');
	include pathOf('includes/footer.php');
	?>