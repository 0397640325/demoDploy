<header id="header" class="header ">
    <div class="header-wrapper">
        <div id="masthead" class="header-main hide-for-sticky nav-dark">
            <div class="header-inner flex-row container logo-left" role="navigation">

                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <!-- Header logo -->
                    <a href="index.php" title="Trang chủ" rel="home">
                        <img width="218" height="55" src="img/favicon.png" class="header_logo header-logo" alt="Giải pháp Robot" /><img width="218" height="55" src="img/favicon.png" class="header-logo-dark" alt="Giải pháp Robot" />
                    </a>
                </div>

                <!-- Mobile Left Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                    </ul>
                </div>

                <!-- Left Elements -->
                <div class="flex-col hide-for-medium flex-left flex-grow">
                    <ul class="header-nav header-nav-main nav nav-left  nav-spacing-medium nav-uppercase">
                        <li class="header-search-form search-form html relative has-icon">
                            <div class="header-search-form-wrapper">
                                <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                                    <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                                        <form method="post" action="index.php?action=search">
                                            <div class="flex-row relative">
                                                <div class="flex-col flex-grow">
                                                    <label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm kiếm:</label>
                                                    <input required="" type="text" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="Nhập từ khóa cần tìm...." value="" name="key" />
                                                </div>
                                                <div class="flex-col">
                                                    <button type="submit" name="search" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0">
                                                        <i class="fa fa-search"></i> </button>
                                                </div>
                                            </div>
                                            <div class="live-search-results text-left z-top"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Right Elements -->
                <div class="flex-col hide-for-medium flex-right">
                    <ul class="header-nav header-nav-main nav nav-right  nav-spacing-medium nav-uppercase">
                        <li class="account-item has-icon">
                            <?php if(isset($_SESSION['id_user']) != null){ ?>
                            	<a href="?action=login" class="nav-top-link nav-top-not-logged-in is-small"><span><?php echo $_SESSION['fullname'] ?></span></a>
                            <?php }else{ ?>
                            	<a href="?action=login" class="nav-top-link nav-top-not-logged-in is-small"><span>Đăng nhập</span></a>
                            <?php } ?>
                            <!-- .account-login-link -->
                        </li>
                        <li class="cart-item has-icon has-dropdown">

                            <a href="?action=cart" title="Giỏ hàng" class="header-cart-link is-small">


                                <span class="header-cart-title">Giỏ hàng
                                </span>

                                <i class="fa fa-shopping-cart" data-icon-label="0"></i>
                            </a>
                            <!-- .nav-dropdown -->

                        </li>
                        <!-- GTranslate: https://gtranslate.io/ -->
                        <li style="position:relative;" class="menu-item menu-item-gtranslate">
                            <a href="#" onclick="doGTranslate('vi|zh-CN');return false;" title="Chinese (Simplified)" class="glink nturl notranslate"><img src="img/zh-CN.png" height="24" width="24" alt="Chinese (Simplified)" />
                            </a>
                        </li>
                        <li style="position:relative;" class="menu-item menu-item-gtranslate">
                            <a href="#" onclick="doGTranslate('vi|en');return false;" title="English" class="glink nturl notranslate"><img src="img/en.png" height="24" width="24" alt="English" />
                            </a>
                        </li>
                        <li style="position:relative;" class="menu-item menu-item-gtranslate">
                            <a href="#" onclick="doGTranslate('vi|vi');return false;" title="Vietnamese" class="glink nturl notranslate"><img src="img/vi.png" height="24" width="24" alt="Vietnamese" />
                            </a>
                        </li>
                        <style type="text/css">
                            #goog-gt-tt {
                                display: none !important;
                            }
                            
                            .goog-te-banner-frame {
                                display: none !important;
                            }
                            
                            .goog-te-menu-value:hover {
                                text-decoration: none !important;
                            }
                            
                            .goog-text-highlight {
                                background-color: transparent !important;
                                box-shadow: none !important;
                            }
                            
                            body {
                                top: 0 !important;
                            }
                            
                            #google_translate_element2 {
                                display: none!important;
                            }
                        </style>

                        <div id="google_translate_element2"></div>
                        <script type="text/javascript">
                            function googleTranslateElementInit2() {
                                new google.translate.TranslateElement({
                                    pageLanguage: 'vi',
                                    autoDisplay: false
                                }, 'google_translate_element2');
                            }
                        </script>
                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


                        <script type="text/javascript">
                            function GTranslateGetCurrentLang() {
                                var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');
                                return keyValue ? keyValue[2].split('/')[2] : null;
                            }

                            function GTranslateFireEvent(element, event) {
                                try {
                                    if (document.createEventObject) {
                                        var evt = document.createEventObject();
                                        element.fireEvent('on' + event, evt)
                                    } else {
                                        var evt = document.createEvent('HTMLEvents');
                                        evt.initEvent(event, true, true);
                                        element.dispatchEvent(evt)
                                    }
                                } catch (e) {}
                            }

                            function doGTranslate(lang_pair) {
                                if (lang_pair.value) lang_pair = lang_pair.value;
                                if (lang_pair == '') return;
                                var lang = lang_pair.split('|')[1];
                                if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return;
                                var teCombo;
                                var sel = document.getElementsByTagName('select');
                                for (var i = 0; i < sel.length; i++)
                                    if (/goog-te-combo/.test(sel[i].className)) {
                                        teCombo = sel[i];
                                        break;
                                    }
                                if (document.getElementById('google_translate_element2') == null || document.getElementById('google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length == 0) {
                                    setTimeout(function() {
                                        doGTranslate(lang_pair)
                                    }, 500)
                                } else {
                                    teCombo.value = lang;
                                    GTranslateFireEvent(teCombo, 'change');
                                    GTranslateFireEvent(teCombo, 'change')
                                }
                            }
                        </script>
                    </ul>
                </div>

                <!-- Mobile Right Elements -->
                <div class="flex-col show-for-medium flex-right">
                    <ul class="mobile-nav nav nav-right ">
                        <li class="account-item has-icon">
                            <a href="?action=login" class="account-link-mobile is-small" title="Tài khoản">
                                <span class="header-account-title"></span>
                                <i class="fa fa-user"></i>
                            </a>
                            <!-- .account-link -->
                        </li>
                        <li class="cart-item has-icon">

                            <a href="index.php?action=cart" class="header-cart-link off-canvas-toggle nav-top-link is-small" title="Giỏ hàng">

                                <span class="p-mobile">Giỏ hàng</span>
                                <i class="fa fa-shopping-cart" data-icon-label="0"></i>
                            </a>


                            <!-- Cart Sidebar Popup -->
                            <!-- <div id="cart-popup" class="mfp-hide widget_shopping_cart">
                                <div class="cart-popup-inner inner-padding">
                                    <div class="cart-popup-title text-center">
                                        <h4 class="uppercase">Giỏ hàng</h4>
                                        <div class="is-divider"></div>
                                    </div>
                                    <div class="widget_shopping_cart_content">
                                        <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>
                                    </div>
                                    <div class="cart-sidebar-content relative"></div>
                                </div>
                            </div> -->

                        </li>
                    </ul>
                </div>

            </div>
            <!-- .header-inner -->

            <!-- Header divider -->
            <div class="container">
                <div class="top-divider full-width"></div>
            </div>
        </div>
        <!-- .header-main -->
        <div id="wide-nav" class="header-bottom wide-nav hide-for-sticky">
            <div class="flex-row container">

                
                <!-- flex-col -->


                <div class="flex-col hide-for-medium flex-right flex-grow">
                    <ul class="nav header-nav header-bottom-nav nav-right  nav-uppercase">
                    </ul>
                </div>
                <!-- flex-col -->

                <div class="flex-col show-for-medium flex-grow">
                    <ul class="nav header-bottom-nav nav-center mobile-nav  nav-uppercase">
                        <li class="nav-icon has-icon">
                            <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">

                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        <li class="header-search-form search-form html relative has-icon">
                            <div class="header-search-form-wrapper">
                                <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                                    <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                                        <form method="post" class="searchform" action="index.php?action=search">
                                            <div class="flex-row relative">
                                                <div class="flex-col flex-grow">
                                                    <label class="screen-reader-text" for="woocommerce-product-search-field-2">Tìm kiếm:</label>
                                                    <input type="search" id="woocommerce-product-search-field-2" class="search-field mb-0" placeholder="Nhập từ khóa cần tìm...." value="" name="key" />
                                                    <input type="hidden" name="post_type" value="product" />
                                                </div>
                                                <!-- .flex-col -->
                                                <div class="flex-col">
                                                    <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0">
                                                        <i class="fa fa-search"></i> </button>
                                                </div>
                                                <!-- .flex-col -->
                                            </div>
                                            <!-- .flex-row -->
                                            <div class="live-search-results text-left z-top"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- GTranslate: https://gtranslate.io/ -->
                        <li style="position:relative;" class="menu-item menu-item-gtranslate">
                            <a href="#" onclick="doGTranslate('vi|en');return false;" title="English" class="glink nturl notranslate"><img src="img/en.png" height="24" width="24" alt="English" />
                            </a>
                        </li>
                        <li style="position:relative;" class="menu-item menu-item-gtranslate">
                            <a href="#" onclick="doGTranslate('vi|zh-CN');return false;" title="Chinese (Giản thể)" class="glink nturl notranslate"><img src="img/zh-CN.png" height="24" width="24" alt="Chinese (Simplified)" />
                            </a>
                        </li>
                        <li style="position:relative;" class="menu-item menu-item-gtranslate">
                            <a href="#" onclick="doGTranslate('vi|vi');return false;" title="Vietnamese" class="glink nturl notranslate"><img src="img/vi.png" height="24" width="24" alt="Vietnamese" />
                            </a>
                        </li>
                        <style type="text/css">
                            #goog-gt-tt {
                                display: none !important;
                            }
                            
                            .goog-te-banner-frame {
                                display: none !important;
                            }
                            
                            .goog-te-menu-value:hover {
                                text-decoration: none !important;
                            }
                            
                            .goog-text-highlight {
                                background-color: transparent !important;
                                box-shadow: none !important;
                            }
                            
                            body {
                                top: 0 !important;
                            }
                            
                            #google_translate_element2 {
                                display: none!important;
                            }
                        </style>

                        <div id="google_translate_element2"></div>
                        <script type="text/javascript">
                            function googleTranslateElementInit2() {
                                new google.translate.TranslateElement({
                                    pageLanguage: 'vi',
                                    autoDisplay: false
                                }, 'google_translate_element2');
                            }
                        </script>
                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


                        <script type="text/javascript">
                            function GTranslateGetCurrentLang() {
                                var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');
                                return keyValue ? keyValue[2].split('/')[2] : null;
                            }

                            function GTranslateFireEvent(element, event) {
                                try {
                                    if (document.createEventObject) {
                                        var evt = document.createEventObject();
                                        element.fireEvent('on' + event, evt)
                                    } else {
                                        var evt = document.createEvent('HTMLEvents');
                                        evt.initEvent(event, true, true);
                                        element.dispatchEvent(evt)
                                    }
                                } catch (e) {}
                            }

                            function doGTranslate(lang_pair) {
                                if (lang_pair.value) lang_pair = lang_pair.value;
                                if (lang_pair == '') return;
                                var lang = lang_pair.split('|')[1];
                                if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return;
                                var teCombo;
                                var sel = document.getElementsByTagName('select');
                                for (var i = 0; i < sel.length; i++)
                                    if (/goog-te-combo/.test(sel[i].className)) {
                                        teCombo = sel[i];
                                        break;
                                    }
                                if (document.getElementById('google_translate_element2') == null || document.getElementById('google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length == 0) {
                                    setTimeout(function() {
                                        doGTranslate(lang_pair)
                                    }, 500)
                                } else {
                                    teCombo.value = lang;
                                    GTranslateFireEvent(teCombo, 'change');
                                    GTranslateFireEvent(teCombo, 'change')
                                }
                            }
                        </script>
                    </ul>
                </div>

            </div>
            <!-- .flex-row -->
        </div>
        <!-- .header-bottom -->

        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div>
        <!-- .header-bg-container -->
    </div>
    <!-- header-wrapper-->

</header>