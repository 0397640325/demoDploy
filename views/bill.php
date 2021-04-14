<!DOCTYPE html>
<html lang="vi-VN" class="loading-site no-js">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Tạp Hóa - Foxconn</title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="http://bachhoa1.giaodienwebmau.com/xmlrpc.php" />
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
	<meta property="fb:app_id" content="104537736801666" />
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

<body class="page-template-default page page-id-12 theme-flatsome ot-vertical-menu woocommerce-checkout woocommerce-page woocommerce-order-received woocommerce-no-js full-width lightbox nav-dropdown-has-arrow">
	<div id="wrapper">
		<header>
            <?php include("res/header.php") ?>
        </header>
		<main id="main" class="">
			<div id="content" class="content-area page-wrapper" role="main">
				<div class="row row-main">
					<div class="large-12 col">
						<div class="col-inner">
							<div class="woocommerce">
								<?php while ($show = $bill->fetch_assoc()) { ?>
								<div class="row">
									<div class="large-7 col">
										<section class="woocommerce-order-details">
											<h2 class="woocommerce-order-details__title">Chi tiết đơn hàng</h2>
											<table class="woocommerce-table woocommerce-table--order-details shop_table order_details">
												<thead>
													<tr>
														<th class="woocommerce-table__product-name product-name">Sản phẩm</th>
														<th class="woocommerce-table__product-table product-total">Tổng</th>
													</tr>
												</thead>
												<tbody>
													<?php while ($row = $bill_detail->fetch_assoc()) { ?>
														<tr class="woocommerce-table__line-item order_item">

															<td class="woocommerce-table__product-name product-name">
																<a href="?action=infor_product&id=<?php echo $row['id_product'] ?>"><?php echo $row['name'] ?></a> <strong class="product-quantity">&times;&nbsp;<?php echo $row['qty'] ?></strong> </td>

															<td class="woocommerce-table__product-total product-total">
																<span class="woocommerce-Price-amount amount"><?php echo number_format($row['qty'] * $row['price']) ?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
															</td>

														</tr>
													<?php } ?>

												</tbody>

												<tfoot>
													<tr>
														<th scope="row">Tổng số phụ:</th>
														<td><span class="woocommerce-Price-amount amount"><?php echo number_format($show['price_order']) ?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
														</td>
													</tr>
													<tr>
														<th scope="row">Phương thức thanh toán:</th>
														<td><?php echo $show['methods'] ?></td>
													</tr>
													<tr>
														<th scope="row">Tổng cộng:</th>
														<td><span class="woocommerce-Price-amount amount"><?php echo number_format($show['price_order']) ?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
														</td>
													</tr>
												</tfoot>
											</table>
										</section>
									</div>
									<div class="large-5 col">
										<div class="is-well col-inner entry-content">
											<p class="success-color woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><strong>Cảm ơn bạn. Đơn hàng của bạn đã được gửi, chờ xác nhận. Bạn có thể xem đơn hàng của mình tại <a style="color: red" href="index.php?action=bill">hóa đơn</a></strong>
											</p>
											<ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

												<li class="woocommerce-order-overview__order order">
													Mã đơn hàng: #<strong><?php echo $show['id_order'] ?></strong>
												</li>

												<li class="woocommerce-order-overview__date date">
													Ngày: <strong><?php echo date_format(date_create($show['order_date']), "d/m/Y") ?></strong>
												</li>


												<li class="woocommerce-order-overview__total total">
													Tổng cộng: <strong><span class="woocommerce-Price-amount amount"><?php echo number_format($show['price_order']) ?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></strong>
												</li>

												<li class="woocommerce-order-overview__payment-method method">
													Phương thức thanh toán: <strong><?php echo $show['methods'] ?></strong>
												</li>
											</ul>
											<div class="clear"></div>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer>
            <?php include("res/footer.php") ?>
        </footer>
	</div>
	<?php include("res/mobile-menu-left.php") ?>
    <?php include("res/mobile-lienhe.php") ?>
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