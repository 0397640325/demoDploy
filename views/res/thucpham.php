<section class="section" id="section_1962700648">
    <div class="bg section-bg fill bg-fill  bg-loaded">
        <div class="is-border" style="border-width:0px 0px 0px 0px;">
        </div>
    </div>
    <!-- .section-bg -->
    <div class="section-content relative">
        <div class="row row-sp-5" id="row-2090575388">
            <div class="col div-san-pham small-12 large-12">
                <div class="col-inner text-left" style="background-color:rgb(255, 255, 255);padding:0px 0px 0px 0px;">
                    <div class="row row-sp-noi-bat" id="row-270781702">
                        <div class="col title-danh-muc div-no-padding small-12 large-12">
                            <div class="col-inner text-center">
                                <div class="row large-columns-4 medium-columns- small-columns-2 row-small">
                                    <?php while ($row = $thucpham->fetch_assoc()) { ?>
                                    <div class="col">
                                        <div class="col-inner">
                                            
                                            <!-- <div class="badge-container absolute left top z-1">
                                                <div class="callout badge badge-circle">
                                                    <div class="badge-inner secondary on-sale"><span class="onsale">-6%</span>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="product-small box has-hover box-normal box-text-bottom">
                                                <div class="box-image">
                                                    <div class="">
                                                        <a href="?action=infor_product&id=<?php echo $row['id_product'] ?>">
                                                            <img width="220" height="220" src="img/product/<?php echo $row['image'] ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 220px) 100vw, 220px" /> </a>
                                                    </div>
                                                    <div class="image-tools top right show-on-hover">
                                                    </div>
                                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                        <a class="quick-view" data-prod="1302" href="#quick-view">Quick View</a> </div>
                                                </div>
                                                <!-- box-image -->

                                                <div class="box-text text-center">
                                                    <div class="title-wrapper">
                                                        <p class="name product-title"><a href="?action=infor_product&id=<?php echo $row['id_product'] ?>"><?php echo $row['name'] ?></a>
                                                        </p>
                                                    </div>
                                                    <div class="price-wrapper">
                                                        <span class="price"><ins><span class="woocommerce-Price-amount amount"><?php echo number_format($row['price']) ?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
                                                        </span>
                                                    </div>
                                                    <div class="add-to-cart-button"><a href="?action=add_to_cart&id=<?php echo $row['id_product'] ?>" data-quantity="1" class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline" rel="nofollow">Mua hàng</a>
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
                                <a href="?action=thucpham" target="_self" class="button success is-link is-small lowercase">
                                    <span>Xem thêm các sản phẩm khác</span>
                                </a>
                                <div class="row large-columns-5 medium-columns-4 small-columns-2 row-collapse slider row-slider slider-nav-simple slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : 3000}'>
                                </div>
                            </div>
                        </div>
                        <style scope="scope">
                        </style>
                    </div>
                </div>
            </div>
            <style scope="scope">
            </style>
        </div>
    </div>
    <!-- .section-content -->


    <style scope="scope">
        #section_1962700648 {
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: rgb(255, 255, 255);
        }
    </style>
</section>