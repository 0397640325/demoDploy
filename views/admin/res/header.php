<div class="header-area">
    <div class="row align-items-center">
        <!-- nav and search button -->
        <div class="col-md-6 col-sm-8 clearfix">
            <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="search-box pull-left">
                <form action="#">
                    <input type="text" name="search" placeholder="Search..." required>
                    <i class="ti-search"></i>
                </form>
            </div>
        </div>
        <!-- profile info & task notification -->
        <div class="col-md-6 col-sm-4 clearfix">
            <ul class="notification-area pull-right">
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
</div>
<!-- header area end -->
