<!DOCTYPE html>
<html lang="vi-VN" class="loading-site no-js">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="http://bachhoa1.giaodienwebmau.com/xmlrpc.php" />

	<script>
		(function(html) {
			html.className = html.className.replace(/\bno-js\b/, 'js')
		})(document.documentElement);
	</script>
	<title>Tìm Kiếm - Tạp hóa online</title>
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
<body class="archive search search-results post-type-archive post-type-archive-product theme-flatsome ot-vertical-menu woocommerce woocommerce-page woocommerce-no-js full-width lightbox nav-dropdown-has-arrow">
	<div id="wrapper">
		<header>
            <?php include("res/header.php") ?>
        </header>
		<div class="shop-page-title category-page-title page-title ">
		</div>
		<main id="main" class="">
			<?php include("res/mobile-menu.php") ?>
			<div class="row category-page-row">
				<div class="col large-12">
					<div style="margin-bottom: 20px;" class="shop-page-title category-page-title page-title ">

						<div class="page-title-inner flex-row  medium-flex-wrap container">
							<div class="flex-col flex-grow medium-text-center">
								<div class="is-large">
									<nav class="woocommerce-breadcrumb breadcrumbs uppercase">Có <?php echo $tongso ?> kết quả tìm kiếm cho từ khóa &ldquo;<?php echo $key; ?>&rdquo;</nav>
								</div>
							</div>
							
							<!-- .flex-right -->

						</div>
						<!-- flex-row -->
					</div>
					<!-- .page-title -->

					<div class="shop-container">

						<div class="woocommerce-notices-wrapper"></div>
						<div class="products row row-small large-columns-6 medium-columns-3 small-columns-2 has-shadow row-box-shadow-1">
							<?php while ($row = $home->fetch_assoc()) { ?>
								<div class="product-small col has-hover product type-product post-946 status-publish first instock product_cat-dau-goi product_cat-nuoc-ngot has-post-thumbnail shipping-taxable purchasable product-type-simple">
									<div class="col-inner">
										<div class="badge-container absolute left top z-1">
										</div>
										<div class="product-small box ">
											<div class="box-image">
												<div class="image-none">
													<a href="?action=infor_product&id=<?php echo $row['id_product'] ?>">
														<img width="220" height="220" src="img/product/<?php echo $row['image'] ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 220px) 100vw, 220px" /> </a>
												</div>
												<div class="image-tools is-small top right show-on-hover">
												</div>
												<div class="image-tools is-small hide-for-small bottom left show-on-hover">
												</div>
												<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
													<a class="quick-view" data-prod="946" href="#quick-view">Quick View</a> </div>
											</div>
											<!-- box-image -->

											<div class="box-text box-text-products text-center grid-style-2">
												<div class="title-wrapper">
													<p class="name product-title"><a href="?action=infor_product&id=<?php echo $row['id_product'] ?>"><?php echo $row['name'] ?></a>
													</p>
												</div>
												<div class="price-wrapper">
													<span class="price"><span class="woocommerce-Price-amount amount"><?php echo number_format($row['price']) ?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
													</span>
												</div>
												<div class="add-to-cart-button"><a href="?action=add_to_cart&id=<?php echo $row['id_product'] ?>" data-quantity="1" class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline" >Mua hàng</a>
												</div>
											</div>
											<!-- box-text -->
										</div>
										<!-- box -->
									</div>
									<!-- .col-inner -->
								</div>
							<?php } ?>
						</div>
						<!-- row -->
						<div class="container">
							<nav class="woocommerce-pagination">
								<ul class="page-numbers nav-pagination links text-center">
									<!-- <li><span aria-current='page' class='page-number current'>1</span>
									</li> -->
									<li><a class="next page-number" href="#"><i class="fa fa-angle-left"></i></a>
									</li>
									<li><?php for($t=1; $t<=$sotrang; $t++){
										echo "<li><a href='index.php?action=search&key=$key&page=$t'>$t</a></li>";
									} ?></li>
									<li><a class="next page-number" href="#"><i class="fa fa-angle-right"></i></a>
									</li>
								</ul>
							</nav>
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