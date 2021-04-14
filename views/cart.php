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
    <title>Foxconn - Giỏ hàng</title>
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

<body class="page-template-default page page-id-11 theme-flatsome ot-vertical-menu woocommerce-cart woocommerce-page woocommerce-no-js full-width lightbox nav-dropdown-has-arrow">

    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>

    <div id="wrapper">

        <header>
            <?php include( "res/header.php") ?>
        </header>

        <main id="main" class="">
            <div id="content" class="content-area page-wrapper" role="main">
                <div class="row row-main">
                    <div class="large-12 col">
                        <div class="col-inner">

                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="woocommerce row row-large row-divided">
                                    <div class="col large-7 pb-0 cart-auto-refresh">

                                        
                                            <div class="cart-wrapper sm-touch-scroll">
                                                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name" colspan="3">Sản phẩm</th>
                                                            <th class="product-price">Giá</th>
                                                            <th class="product-quantity">Số lượng</th>
                                                            <th></th>
                                                            <th class="product-subtotal">Tổng</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php while ($row=$cart->fetch_assoc()) { ?>
                                                        <form class="woocommerce-cart-form" action="?action=update_carts" method="post">
                                                        <tr class="woocommerce-cart-form__cart-item cart_item">

                                                            <td class="product-remove">
                                                                <a href="?action=delete_cart&id=<?php echo $row['id_product'] ?>" class="remove" title="Xóa sản phẩm này">&times;</a> </td>

                                                            <td class="product-thumbnail">
                                                                <a href="?action=infor_product&id=<?php echo $row['id_product'] ?>"><img width="220" height="220" src="img/product/<?php echo $row['image'] ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 220px) 100vw, 220px" /></a>
                                                            </td>

                                                            <td class="product-name" data-title="Sản phẩm">
                                                                <input type="hidden" name="id_cart" value="<?php echo $row['id_cart'] ?>">
                                                                <input type="hidden" name="id_product" value="<?php echo $row['id_product'] ?>">
                                                                <a href="?action=infor_product&id=<?php echo $row['id_product'] ?>">
                                                                    <?php echo $row[ 'name'] ?>
                                                                </a>
                                                                <div class="show-for-small mobile-product-price">
                                                                    <span class="mobile-product-price__qty">1 x </span>
                                                                    <span class="woocommerce-Price-amount amount">&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                                </div>
                                                            </td>

                                                            <td class="product-price" data-title="Giá">
                                                                <span class="woocommerce-Price-amount amount"><?php echo number_format($row['price']) ?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                            </td>

                                                            <td class="product-quantity" data-title="Số lượng">
                                                                <div class="quantity buttons_added">
                                                                    <input type="button" value="-" class="minus button is-form">
                                                                    <input type="number" id="" class="input-text qty text" step="1" min="0" max="9999" name="qty_cart" value="<?php echo $row['qty'] ?>" title="SL" size="4" inputmode="numeric" />
                                                                    <input type="button" value="+" class="plus button is-form"> </div>
                                                            </td>
                                                            <!-- <td>
                                                                <button class="btn btn-success">C</button>
                                                            </td> -->

                                                            <td class="product-subtotal" data-title="Tổng">
                                                                <span class="woocommerce-Price-amount amount"><?php echo number_format($row['qty']*$row['price']) ?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>


                                                        <tr>
                                                            <td colspan="6" class="actions clear">

                                                                <div class="continue-shopping pull-left text-left">
                                                                    <a class="button-continue-shopping button primary is-outline" href="index.php">&#8592;&nbsp;Tiếp tục xem sản phẩm</a>
                                                                </div>


                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="cart-collaterals large-5 col pb-0">

                                        <div class="cart-sidebar col-inner ">
                                            <div class="cart_totals ">

                                                <table cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name" colspan="2" style="border-width:3px;">Cộng giỏ hàng</th>
                                                        </tr>
                                                    </thead>
                                                </table>

                                                <h2>Cộng giỏ hàng</h2>

                                                <table cellspacing="0" class="shop_table shop_table_responsive">

                                                    <tr class="cart-subtotal">
                                                        <th>Tạm tính</th>
                                                        <td data-title="Tạm tính"><span class="woocommerce-Price-amount amount"><?php echo number_format($tong) ?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                        </td>
                                                    </tr>

                                                    <tr class="order-total">
                                                        <th>Tổng</th>
                                                        <td data-title="Tổng"><strong><span class="woocommerce-Price-amount amount"><?php echo number_format($tong) ?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></strong> </td>
                                                    </tr>

                                                </table>

                                                <div class="wc-proceed-to-checkout">

                                                    <a href="?action=order" class="checkout-button button alt wc-forward">
    Tiến hành thanh toán</a>
                                                </div>

                                            </div>
                                            <div class="cart-sidebar-content relative"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="cart-footer-content after-cart-content relative"></div>
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
        <!-- .footer-wrapper -->

    </div>
    <!-- #wrapper -->

    <!-- Mobile Sidebar -->
    <?php include( "res/mobile-menu-left.php") ?>
    <!-- #mobile-menu -->
    <?php include( "res/mobile-lienhe.php") ?>

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