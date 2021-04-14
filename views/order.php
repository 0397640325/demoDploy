<!DOCTYPE html>
<html lang="vi-VN" class="loading-site no-js">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Thanh toán - Tạp hóa online</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel="stylesheet" href="css/product_rate.css">
    <link rel='dns-prefetch' href='//maxcdn.bootstrapcdn.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <link rel="stylesheet" id="flatsome-icons-css" href="http://bachhoa1.giaodienwebmau.com/wp-content/themes/flatsome/assets/css/fl-icons.css?ver=3.3" type="text/css" media="all">
    <link rel='stylesheet' id='gtranslate-style-css' href='home/css/gtranslate-style24.css' type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href='home/css/dashicons.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='menu-icons-extra-css' href='home/css/extra.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='home/css/style.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-block-style-css' href='home/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='home/css/styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='devvn-quickbuy-style-css' href='home/css/devvn-quick-buy.css' type='text/css' media='all' />
    <link rel='stylesheet' id='ot-vertical-menu-css-css' href='home/css/styless.css' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='flatsome-ionicons-css' href='home/css/font-awesome.min.css' type='text/css' media='all' />
    <!-- <link rel='stylesheet' id='flatsome-icons-css' href='home/css/fl-icons.css' type='text/css' media='all' /> -->
    <link rel='stylesheet' id='flatsome-main-css' href='home/css/flatsome.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-shop-css' href='home/css/flatsome-shop.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-style-css' href='home/css/stylessss.css' type='text/css' media='all' />
    <link rel="stylesheet" href="home/css/font-awesome.css">
    <script type='text/javascript' src='home/js/jquery.js'></script>
    <script type='text/javascript' src='home/js/jquery-migrate.min.js'></script>
    <style>
        .bg {
            opacity: 0;
            transition: opacity 1s;
            -webkit-transition: opacity 1s;
        }
        
        .bg-loaded {
            opacity: 1;
        }
    </style>
    <link rel="stylesheet" href="css/homepage.css">
	<meta property="fb:admins" content="100001613853961" />

	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if(d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=104537736801666";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
</head>

<body class="page-template-default page page-id-12 theme-flatsome ot-vertical-menu woocommerce-checkout woocommerce-page woocommerce-no-js full-width lightbox nav-dropdown-has-arrow">
	<div id="wrapper">
		<?php include( "views/res/header.php") ?>
		<main id="main" class="">
			<div id="content" class="content-area page-wrapper" role="main">
				<div class="row row-main">
					<div class="large-12 col">
						<div class="col-inner">
							<div class="woocommerce">
								<div class="woocommerce-notices-wrapper"></div>
								<div class="woocommerce-form-login-toggle">
									<div class="woocommerce-form-coupon-toggle">
										<form method="post" class="checkout woocommerce-checkout" action="?action=order_ok">

											<div class="row pt-0 ">
												<div class="large-7 col  ">

													<div id="customer_details">
														<div class="clear">
															<div class="woocommerce-billing-fields">

																<h3>Thông tin thanh toán</h3>

																<div class="woocommerce-billing-fields__field-wrapper">
																	<p class="form-row form-row-first validate-required">
																		<label for="billing_first_name" class="">Tên&nbsp;<abbr class="required" title="bắt buộc">*</abbr>
																		</label><span class="woocommerce-input-wrapper"><input required="" type="text" class="input-text " name="fullname" id="billing_first_name" placeholder=""  value="<?php echo $_SESSION['fullname'] ?>" /></span>
																	</p>
																	<p class="form-row address-field form-row-first validate-required">
																		<label for="billing_address_1" class="">Địa chỉ ship&nbsp;<abbr class="required" title="bắt buộc">*</abbr>
																		</label><span class="woocommerce-input-wrapper"><input required="" type="text" class="input-text " name="address_order" id="billing_address_1" placeholder="Địa chỉ"  value="<?php echo $_SESSION['room'] ?>" /></span>
																	</p>
																	<p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-priority="70">
																		<label for="billing_city" class="">Nơi làm việc&nbsp;<abbr class="required" title="bắt buộc">*</abbr>
																		</label><span class="woocommerce-input-wrapper"><select name="id_location" id="">
																	<?php while ($show = $location->fetch_assoc()) { ?>
																		<option <?php if($_SESSION['location'] == $show['location']){ echo 'selected="selected"';} ?> value="<?php echo $show['id_location'] ?>"><?php echo $show['location'] ?></option>
																	<?php } ?>
																</select></span>
																	</p>
																	<p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100">
																		<label for="billing_phone" class="">Số điện thoại&nbsp;<abbr class="required" title="bắt buộc">*</abbr>
																		</label><span class="woocommerce-input-wrapper"><input required="" type="tel" class="input-text " name="phone" id="billing_phone" placeholder=""  value="<?php echo $_SESSION['phone'] ?>" /></span>
																	</p>
																</div>

															</div>

														</div>

														<div class="clear">
															<div class="woocommerce-shipping-fields">
															</div>
															<div class="woocommerce-additional-fields">



																<h3>Thông tin bổ sung</h3>


																<div class="woocommerce-additional-fields__field-wrapper">
																	<p class="form-row notes" id="order_comments_field" data-priority="">
																		<label for="order_comments" class="">Ghi chú đơn hàng&nbsp;<span class="optional">(tuỳ chọn)</span>
																		</label><span class="woocommerce-input-wrapper"><textarea name="note" class="input-text " id="order_comments" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn."  rows="2" cols="5"></textarea></span>
																	</p>
																</div>


															</div>
														</div>
													</div>



												</div>
												<!-- large-7 -->

												<div class="large-5 col">

													<div class="col-inner has-border">
														<div class="checkout-sidebar sm-touch-scroll">
															<h3 id="order_review_heading">Đơn hàng của bạn</h3>


															<div id="order_review" class="woocommerce-checkout-review-order">
																<table class="shop_table">
																	<thead>
																		<tr>
																			<th class="product-name">Sản phẩm</th>
																			<th class="product-total">Tạm tính</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php while ($show=$cart->fetch_assoc()) { ?>
																		<tr class="cart_item">
																			<td class="product-name">
																				<a href="action=infor_product&id=<?php echo $show['id_product'] ?>"><?php echo $show[ 'name'] ?></a>&nbsp;
																				<strong class="product-quantity">&times;&nbsp;<?php echo $show['qty'] ?></strong> </td>
																			<td class="product-total">
																				<span class="woocommerce-Price-amount amount"><?php echo number_format($show['qty'] * $show['price']) ?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
																			</td>
																		</tr>
																		<?php } ?>
																	</tbody>
																	<tfoot>

																		<tr class="cart-subtotal">
																			<th>Tạm tính</th>
																			<td><span class="woocommerce-Price-amount amount"><?php echo number_format($tong) ?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
																			</td>
																		</tr>
																		<tr class="order-total">
																			<th>Tổng</th>
																			<td><strong><span class="woocommerce-Price-amount amount"><?php echo number_format($tong) ?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></strong> </td>
																		</tr>


																	</tfoot>
																</table>
																<div id="payment" class="">
																	<ul class="wc_payment_methods payment_methods methods">
																		<input name="price_order" type="hidden" value="<?php echo $tong ?>">
																		<li class="wc_payment_method payment_method_cod">
																			<input id="payment_method_cod" type="radio" class="input-radio" name="id_methods" checked='checked' value="1" data-order_button_text="" />

																			<label for="payment_method_cod">
																				Trả tiền mặt khi nhận hàng </label>
																			<div class="payment_box payment_method_cod" style="display:none;">
																				<p>Trả tiền mặt khi giao hàng</p>
																			</div>
																		</li>
																	</ul>
																	<div class="form-row place-order">

																		<div class="woocommerce-terms-and-conditions-wrapper">

																		</div>


																		<button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Đặt hàng" data-value="Đặt hàng">Đặt hàng</button>
																	</div>
																</div>

																<div class="woocommerce-privacy-policy-text"></div>
															</div>
														</div>

													</div>
													<!-- large-5 -->

												</div>
												<!-- row -->
										</form>

										</div>


									</div>
									<!-- .col-inner -->
								</div>
								<!-- .large-12 -->
							</div>
							<!-- .row -->
						</div>


		</main>
		<!-- #main -->

		<footer>
			<?php include( "res/footer.php") ?>
		</footer>
		<!-- .absolute-footer -->
		<a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline circle" id="top-link">↑ </a>

		</footer>
		<!-- .footer-wrapper -->

		</div>
		<!-- #wrapper -->

		<!-- Mobile Sidebar -->
		<?php include( "res/mobile-menu-left.php") ?>
		<!-- #mobile-menu -->
		<?php include( "res/mobile-lienhe.php") ?>
		</form>
		</div>
		</div>
		<script>
			jQuery('.children').hide();
			jQuery(".toggle").click(function() {
				jQuery(".cat-parent").find('.children').slideUp();
				jQuery(this).find('.children').slideDown();
			});
		</script>
		<script type="text/javascript">
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		</script>
		<script type='text/javascript'>
			/* <![CDATA[ */
			var wpcf7 = {
				"apiSettings": {
					"root": "http:\/\/bachhoa1.giaodienwebmau.com\/wp-json\/contact-form-7\/v1",
					"namespace": "contact-form-7\/v1"
				}
			};
			/* ]]> */
		</script>
		<script type='text/javascript' src='home/js/scripts.js'></script>
    <script type='text/javascript' src='home/js/jquery.validate.min.js'></script>
    <script type='text/javascript' src='home/js/jquery.bpopup.min.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var devvn_quickbuy_array = {
            "ajaxurl": "http:\/\/bachhoa1.giaodienwebmau.com\/wp-admin\/admin-ajax.php",
            "siteurl": "http:\/\/bachhoa1.giaodienwebmau.com",
            "popup_error": "\u0110\u1eb7t h\u00e0ng th\u1ea5t b\u1ea1i. Vui l\u00f2ng \u0111\u1eb7t h\u00e0ng l\u1ea1i. Xin c\u1ea3m \u01a1n!",
            "out_of_stock_mess": "H\u1ebft h\u00e0ng!",
            "price_decimal": ".",
            "num_decimals": "0",
            "currency_format": "\u20ab"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='home/js/devvn-quick-buy.js'></script>
    <script type='text/javascript' src='home/js/hoverIntent.js'></script>
    <script type='text/javascript' src='home/js/superfish.min.js'></script>
    <script type='text/javascript' src='home/js/ot-vertical-menu.min.js'></script>
    <script type='text/javascript' src='home/js/jquery.blockUI.min.js'></script>
    <script type='text/javascript' src='home/js/js.cookie.min.js'></script>
    <script type='text/javascript' src='home/js/woocommerce.min.js'></script>
    <script type='text/javascript' src='home/js/hoverIntent.min.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var flatsomeVars = {
            "ajaxurl": "http:\/\/bachhoa1.giaodienwebmau.com\/wp-admin\/admin-ajax.php",
            "rtl": "",
            "sticky_height": "70",
            "lightbox": {
                "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
                "close_btn_inside": false
            },
            "user": {
                "can_edit_pages": false
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='home/js/flatsome.js'></script>
    <script type='text/javascript' src='home/js/woocommerce.js'></script>
    <script type='text/javascript' src='home/js/wp-embed.min.js'></script>
    <script type='text/javascript' src='home/js/underscore.min.js'></script>

</body>

</html>