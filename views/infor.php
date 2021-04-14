<!DOCTYPE html>
<html lang="vi-VN" prefix="og: http://ogp.me/ns#" class="loading-site no-js">
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
    <title>Foxconn - Thông tin tài khoản</title>
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
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=104537736801666";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</head>

<body class="page-template-default page page-id-13 logged-in theme-flatsome woocommerce-account woocommerce-page woocommerce-edit-account woocommerce-no-js full-width lightbox nav-dropdown-has-arrow">
    <div id="wrapper">
        <header>
            <?php include( "res/header.php") ?>
        </header>
        <main id="main" class="">
            <?php include( "res/mobile-menu-left.php") ?>
            <div id="content" class="content-area page-wrapper" role="main">
                <div class="row row-main">
                    <div class="large-4 col">
                        <div class="col-inner">
                            <div class="woocommerce">
                                <div class="woocommerce-MyAccount-content">
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <br>
                                    <br>
                                    <br>
                                    <p style="width: 50%; margin: auto;"><img style="border-radius: 50%; height: 100" src="img/avata/<?php echo $_SESSION['avata'] ?>" alt="">
                                    </p>
                                    <br>
                                    <?php if(isset($_SESSION[ 'permission']) && $_SESSION[ 'permission']==1){ ?>
                                    <p style="text-align: center;">
                                        <a href="admin.php">
                                            <button style="border-radius: 5px; width: 160px;" type="" class="woocommerce-Button button alert" name="save_account_details" value="Lưu thay đổi">Admin Panel</button>
                                        </a>
                                    </p>
                                    <?php } ?>
                                    <p style="text-align: center;">
                                        <a href="?action=bill">
                                            <button style="border-radius: 5px; width: 160px;" type="" class="woocommerce-Button button" name="save_account_details" value="Lưu thay đổi">Hóa Đơn</button>
                                        </a>
                                    </p>
                                    <p style="text-align: center;">
                                        <a href="?action=changepass">
                                            <button style="border-radius: 5px; width: 160px;" type="" class="woocommerce-Button button" name="save_account_details" value="Lưu thay đổi">Đổi Mật Khẩu</button>
                                        </a>
                                    </p>
                                    <p style="text-align: center;">
                                        <a href="?action=logout">
                                            <button style="border-radius: 5px; width: 160px;" type="" class="woocommerce-Button button" name="save_account_details" value="Lưu thay đổi">Đăng Xuất</button>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- .col-inner -->
                    </div>
                    <div class="large-8 col">
                        <legend>Thông tin tài khoản</legend>
                        <div class="row">
                            <?php while ($show = $infor->fetch_assoc()) { ?>
                            <div class="large-6 col">
                                <div class="col-inner">
                                    <div class="woocommerce">
                                        <div class="woocommerce-MyAccount-content">
                                            <div class="woocommerce-notices-wrapper"></div>
                                            <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                                <label for="account_first_name">Tên đăng nhập:</span>
                                                </label>
                                                <input readonly="" type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" value="<?php echo $show['id_user']?>" />
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                                <label for="account_last_name">Họ và tên:</span>
                                                </label>
                                                <input readonly="" type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" value="<?php echo $show['fullname'] ?>" />
                                            </p>
                                            <div class="clear"></div>

                                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="account_display_name">Ngày sinh:</label>
                                                <input readonly="" type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_display_name" id="account_display_name" value="<?php echo date_format(date_create($show['dateofbirth']),"d-m-Y") ?>" />
                                            </p>
                                            <div class="clear"></div>

                                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="account_email">Mail:
                                                </label>
                                                <input readonly="" type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" autocomplete="email" value="<?php echo $show['mail'] ?>" />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-inner -->
                            </div>
                            <div class="large-6 col">
                                <div class="col-inner">
                                    <div class="woocommerce">
                                        <div class="woocommerce-MyAccount-content">
                                            <div class="woocommerce-notices-wrapper"></div>
                                            <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                                <label for="account_first_name">Số điện thoại:</span>
                                                </label>
                                                <input readonly="" type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" value="<?php echo $show['phone'] ?>" />
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                                <label for="account_last_name">Địa chỉ:</span>
                                                </label>
                                                <input readonly="" type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" value="<?php echo $show['room'] ?>" />
                                            </p>
                                            <div class="clear"></div>

                                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="account_display_name">Tỉnh/TP:</label>
                                                <input readonly="" type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_display_name" id="account_display_name" value="<?php echo $show['location'] ?>" />
                                            </p>
                                            <div class="clear"></div>

                                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="account_email">Tiền thiếu:
                                                </label>
                                                <input readonly="" type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" value="<?php echo number_format($show['debt']); ?> ₫" />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
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