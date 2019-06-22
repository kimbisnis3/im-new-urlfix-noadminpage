<?php 

    $data['mkategori']    = $this->M_header->kategori();
    $data['msubkategori'] = $this->M_header->subkategori();

     ?>
 <footer class="footer" role="contentinfo">
    <div class="container">
        <section class="footer-info">
            <article class="footer-info-col footer-info-col--small" data-section-type="footer-webPages">
                <h5 class="footer-info-heading">Navigate</h5>
                <ul class="footer-info-list">
                        <li>
                            <a href="<?php echo base_url('carapesan'); ?>">Order</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('kontak'); ?>">Contact Us</a>
                        </li>
                    <li>
                        <a href="<?php echo base_url('services'); ?>">Services</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url('syaratdanketentuan'); ?>">Terms And Condition</a>
                    </li>

                </ul>
            </article>

            <article class="footer-info-col footer-info-col--small" data-section-type="footer-categories">
                <h5 class="footer-info-heading">Categories</h5>
                <ul class="footer-info-list">
                  <?php foreach ($mkategori as $t) { ?>
                        <li> <a href="<?php echo base_url('kategori/daftar/'.$t->slug); ?>"><?php echo $t->namakategori; ?></a> </li>
                  <?php } ?>
                </ul>
            </article>

            <article class="footer-info-col footer-info-col--small" data-section-type="footer-brands">
                <h5 class="footer-info-heading">Popular Brands</h5>
                <ul class="footer-info-list">
                  <?php foreach ($msubkategori as $t) { ?>
                        <li><a href="<?php echo base_url('subkategori/daftar/'.$t->slug); ?>"><?php echo $t->namasubkategori; ?></a></li>
                  <?php } ?>
                </ul>
            </article>

            <!-- <article class="footer-info-col footer-info-col--small" data-section-type="storeInfo">
                <h5 class="footer-info-heading">Info</h5>
                <address>SK Designs Australia<br>
10B Louis St<br>
STEPNEY, SA 5069<br>
Australia</address>
                    <strong>Call us at 08 8363 7941</strong>
            </article> -->
        </section>
            <div class="footer-copyright">
                <p class="powered-by">&copy; <?php echo date("Y"); ?> IM PRODUCTS </p>
            </div>
    </div>
</footer>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- <script>window.__webpack_public_path__ = "https://cdn11.bigcommerce.com/s-4b0htg/stencil/7ab98780-51eb-0137-79d3-0242ac110003/e/54f12650-d33b-0136-1167-6fe0491fb18e/dist/";</script> -->
        <script src="<?php echo base_url('assets/newats/main.js'); ?>"></script>

        <script>
            // Exported in app.js
            window.stencilBootstrap("default", "{\"themeSettings\":{\"homepage_new_products_count\":12,\"homepage_featured_products_count\":12,\"homepage_top_products_count\":0,\"homepage_show_carousel\":true,\"homepage_stretch_carousel_images\":false,\"homepage_new_products_column_count\":4,\"homepage_featured_products_column_count\":4,\"homepage_top_products_column_count\":4,\"homepage_blog_posts_count\":3,\"productpage_videos_count\":8,\"productpage_reviews_count\":0,\"productpage_related_products_count\":4,\"productpage_similar_by_views_count\":4,\"categorypage_products_per_page\":20,\"shop_by_price_visibility\":false,\"brandpage_products_per_page\":20,\"searchpage_products_per_page\":20,\"show_product_quick_view\":false,\"show_powered_by\":false,\"shop_by_brand_show_footer\":true,\"show_copyright_footer\":true,\"show_accept_amex\":true,\"show_accept_discover\":true,\"show_accept_mastercard\":true,\"show_accept_paypal\":true,\"show_accept_visa\":true,\"show_product_details_tabs\":false,\"show_product_reviews_tabs\":false,\"show_product_weight\":false,\"show_product_dimensions\":false,\"product_list_display_mode\":\"grid\",\"logo-position\":\"center\",\"logo_size\":\"250x100\",\"logo_fontSize\":28,\"logo-font\":\"Google_Oswald_300\",\"brand_size\":\"190x250\",\"gallery_size\":\"300x300\",\"productgallery_size\":\"500x659\",\"product_size\":\"500x659\",\"productview_thumb_size\":\"50x50\",\"productthumb_size\":\"100x100\",\"thumb_size\":\"100x100\",\"zoom_size\":\"1280x1280\",\"blog_size\":\"190x250\",\"default_image_brand\":\"/assets/img/BrandDefault.gif\",\"default_image_product\":\"/assets/img/ProductDefault.gif\",\"default_image_gift_certificate\":\"/assets/img/GiftCertificate.png\",\"body-font\":\"Google_Karla_400\",\"headings-font\":\"Google_Montserrat_400\",\"fontSize-root\":14,\"fontSize-h1\":28,\"fontSize-h2\":25,\"fontSize-h3\":22,\"fontSize-h4\":20,\"fontSize-h5\":15,\"fontSize-h6\":13,\"applePay-button\":\"black\",\"color-textBase\":\"#333333\",\"color-textBase--hover\":\"#757575\",\"color-textBase--active\":\"#757575\",\"color-textSecondary\":\"#757575\",\"color-textSecondary--hover\":\"#333333\",\"color-textSecondary--active\":\"#333333\",\"color-textLink\":\"#333333\",\"color-textLink--hover\":\"#757575\",\"color-textLink--active\":\"#757575\",\"color-textHeading\":\"#444444\",\"color-primary\":\"#757575\",\"color-primaryDark\":\"#666666\",\"color-primaryDarker\":\"#333333\",\"color-primaryLight\":\"#999999\",\"color-secondary\":\"#ffffff\",\"color-secondaryDark\":\"#e5e5e5\",\"color-secondaryDarker\":\"#cccccc\",\"color-error\":\"#cc4749\",\"color-errorLight\":\"#ffdddd\",\"color-info\":\"#666666\",\"color-infoLight\":\"#dfdfdf\",\"color-success\":\"#008a06\",\"color-successLight\":\"#d5ffd8\",\"color-warning\":\"#f1a500\",\"color-warningLight\":\"#fffdea\",\"color-black\":\"#ffffff\",\"color-white\":\"#ffffff\",\"color-whitesBase\":\"#e5e5e5\",\"color-grey\":\"#999999\",\"color-greyDarkest\":\"#000000\",\"color-greyDarker\":\"#333333\",\"color-greyDark\":\"#666666\",\"color-greyMedium\":\"#757575\",\"color-greyLight\":\"#999999\",\"color-greyLighter\":\"#cccccc\",\"color-greyLightest\":\"#e5e5e5\",\"button--default-color\":\"#666666\",\"button--default-colorHover\":\"#333333\",\"button--default-colorActive\":\"#000000\",\"button--default-borderColor\":\"#cccccc\",\"button--default-borderColorHover\":\"#999999\",\"button--default-borderColorActive\":\"#757575\",\"button--primary-color\":\"#ffffff\",\"button--primary-colorHover\":\"#ffffff\",\"button--primary-colorActive\":\"#ffffff\",\"button--primary-backgroundColor\":\"#68c516\",\"button--primary-backgroundColorHover\":\"#6DD412\",\"button--primary-backgroundColorActive\":\"#000000\",\"button--disabled-color\":\"#ffffff\",\"button--disabled-backgroundColor\":\"#cccccc\",\"button--disabled-borderColor\":\"transparent\",\"icon-color\":\"#757575\",\"icon-color-hover\":\"#999999\",\"button--icon-svg-color\":\"#757575\",\"icon-ratingEmpty\":\"#cccccc\",\"icon-ratingFull\":\"#757575\",\"carousel-bgColor\":\"#ffffff\",\"carousel-title-color\":\"#444444\",\"carousel-description-color\":\"#333333\",\"carousel-dot-color\":\"#333333\",\"carousel-dot-color-active\":\"#757575\",\"carousel-dot-bgColor\":\"#ffffff\",\"carousel-arrow-color\":\"#999999\",\"carousel-arrow-bgColor\":\"#ffffff\",\"carousel-arrow-borderColor\":\"#ffffff\",\"card-title-color\":\"#333333\",\"card-title-color-hover\":\"#757575\",\"card-figcaption-button-background\":\"#ffffff\",\"card-figcaption-button-color\":\"#333333\",\"card--alternate-backgroundColor\":\"#ffffff\",\"card--alternate-borderColor\":\"#ffffff\",\"card--alternate-color--hover\":\"#ffffff\",\"form-label-font-color\":\"#666666\",\"input-font-color\":\"#666666\",\"input-border-color\":\"#cccccc\",\"input-border-color-active\":\"#999999\",\"input-bg-color\":\"#ffffff\",\"input-disabled-bg\":\"#ffffff\",\"select-bg-color\":\"#ffffff\",\"select-arrow-color\":\"#757575\",\"checkRadio-color\":\"#333333\",\"checkRadio-backgroundColor\":\"#ffffff\",\"checkRadio-borderColor\":\"#cccccc\",\"alert-backgroundColor\":\"#ffffff\",\"alert-color\":\"#333333\",\"alert-color-alt\":\"#ffffff\",\"storeName-color\":\"#333333\",\"body-bg\":\"#ffffff\",\"header-backgroundColor\":\"#ffffff\",\"footer-backgroundColor\":\"#eef5fa\",\"navUser-color\":\"#333333\",\"navUser-color-hover\":\"#757575\",\"navUser-dropdown-backgroundColor\":\"#ffffff\",\"navUser-dropdown-borderColor\":\"#cccccc\",\"navUser-indicator-backgroundColor\":\"#333333\",\"navPages-color\":\"#333333\",\"navPages-color-hover\":\"#757575\",\"navPages-subMenu-backgroundColor\":\"#e5e5e5\",\"navPages-subMenu-separatorColor\":\"#cccccc\",\"dropdown--quickSearch-backgroundColor\":\"#e5e5e5\",\"dropdown--wishList-backgroundColor\":\"#ffffff\",\"blockquote-cite-font-color\":\"#999999\",\"container-border-global-color-base\":\"#e5e5e5\",\"container-fill-base\":\"#ffffff\",\"container-fill-dark\":\"#e5e5e5\",\"label-backgroundColor\":\"#cccccc\",\"label-color\":\"#ffffff\",\"overlay-backgroundColor\":\"#333333\",\"loadingOverlay-backgroundColor\":\"#ffffff\",\"pace-progress-backgroundColor\":\"#999999\",\"spinner-borderColor-dark\":\"#999999\",\"spinner-borderColor-light\":\"#ffffff\",\"hide_content_navigation\":false,\"optimizedCheckout-header-backgroundColor\":\"#f5f5f5\",\"optimizedCheckout-show-backgroundImage\":false,\"optimizedCheckout-backgroundImage\":\"\",\"optimizedCheckout-backgroundImage-size\":\"1000x400\",\"optimizedCheckout-show-logo\":\"none\",\"optimizedCheckout-logo\":\"\",\"optimizedCheckout-logo-size\":\"250x100\",\"optimizedCheckout-logo-position\":\"left\",\"optimizedCheckout-headingPrimary-color\":\"#333333\",\"optimizedCheckout-headingPrimary-font\":\"Google_Montserrat_400\",\"optimizedCheckout-headingSecondary-color\":\"#333333\",\"optimizedCheckout-headingSecondary-font\":\"Google_Montserrat_400\",\"optimizedCheckout-body-backgroundColor\":\"#ffffff\",\"optimizedCheckout-colorFocus\":\"#4496f6\",\"optimizedCheckout-contentPrimary-color\":\"#333333\",\"optimizedCheckout-contentPrimary-font\":\"Google_Karla_400\",\"optimizedCheckout-contentSecondary-color\":\"#757575\",\"optimizedCheckout-contentSecondary-font\":\"Google_Karla_400\",\"optimizedCheckout-buttonPrimary-font\":\"Google_Karla_400\",\"optimizedCheckout-buttonPrimary-color\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-colorHover\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-colorActive\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-backgroundColor\":\"#333333\",\"optimizedCheckout-buttonPrimary-backgroundColorHover\":\"#666666\",\"optimizedCheckout-buttonPrimary-backgroundColorActive\":\"#000000\",\"optimizedCheckout-buttonPrimary-borderColor\":\"#cccccc\",\"optimizedCheckout-buttonPrimary-borderColorHover\":\"transparent\",\"optimizedCheckout-buttonPrimary-borderColorActive\":\"transparent\",\"optimizedCheckout-buttonPrimary-borderColorDisabled\":\"transparent\",\"optimizedCheckout-buttonPrimary-backgroundColorDisabled\":\"#cccccc\",\"optimizedCheckout-buttonPrimary-colorDisabled\":\"#ffffff\",\"optimizedCheckout-formChecklist-backgroundColor\":\"#ffffff\",\"optimizedCheckout-formChecklist-color\":\"#333333\",\"optimizedCheckout-formChecklist-borderColor\":\"#cccccc\",\"optimizedCheckout-formChecklist-backgroundColorSelected\":\"#f5f5f5\",\"optimizedCheckout-buttonSecondary-font\":\"Google_Karla_400\",\"optimizedCheckout-buttonSecondary-color\":\"#333333\",\"optimizedCheckout-buttonSecondary-colorHover\":\"#333333\",\"optimizedCheckout-buttonSecondary-colorActive\":\"#000000\",\"optimizedCheckout-buttonSecondary-backgroundColor\":\"#ffffff\",\"optimizedCheckout-buttonSecondary-borderColor\":\"#cccccc\",\"optimizedCheckout-buttonSecondary-backgroundColorHover\":\"#f5f5f5\",\"optimizedCheckout-buttonSecondary-backgroundColorActive\":\"#e5e5e5\",\"optimizedCheckout-buttonSecondary-borderColorHover\":\"#999999\",\"optimizedCheckout-buttonSecondary-borderColorActive\":\"#757575\",\"optimizedCheckout-link-color\":\"#476bef\",\"optimizedCheckout-link-font\":\"Google_Karla_400\",\"optimizedCheckout-discountBanner-backgroundColor\":\"#e5e5e5\",\"optimizedCheckout-discountBanner-textColor\":\"#333333\",\"optimizedCheckout-discountBanner-iconColor\":\"#333333\",\"optimizedCheckout-orderSummary-backgroundColor\":\"#ffffff\",\"optimizedCheckout-orderSummary-borderColor\":\"#dddddd\",\"optimizedCheckout-step-backgroundColor\":\"#757575\",\"optimizedCheckout-step-textColor\":\"#ffffff\",\"optimizedCheckout-form-textColor\":\"#666666\",\"optimizedCheckout-formField-borderColor\":\"#cccccc\",\"optimizedCheckout-formField-textColor\":\"#333333\",\"optimizedCheckout-formField-shadowColor\":\"#e5e5e5\",\"optimizedCheckout-formField-placeholderColor\":\"#999999\",\"optimizedCheckout-formField-backgroundColor\":\"#ffffff\",\"optimizedCheckout-formField-errorColor\":\"#d14343\",\"optimizedCheckout-formField-inputControlColor\":\"#476bef\",\"optimizedCheckout-step-borderColor\":\"#dddddd\",\"optimizedCheckout-header-borderColor\":\"#dddddd\",\"optimizedCheckout-header-textColor\":\"#333333\",\"optimizedCheckout-loadingToaster-backgroundColor\":\"#333333\",\"optimizedCheckout-loadingToaster-textColor\":\"#ffffff\",\"optimizedCheckout-link-hoverColor\":\"#002fe1\",\"product_sale_badges\":\"none\",\"color_badge_product_sale_badges\":\"#007dc6\",\"color_text_product_sale_badges\":\"#ffffff\",\"color_hover_product_sale_badges\":\"#000000\",\"restrict_to_login\":false,\"swatch_option_size\":\"22x22\",\"social_icon_placement_top\":false,\"social_icon_placement_bottom\":\"bottom_none\",\"geotrust_ssl_common_name\":\"\",\"geotrust_ssl_seal_size\":\"M\",\"navigation_design\":\"simple\",\"price_ranges\":true,\"pdp-price-label\":\"\",\"pdp-sale-price-label\":\"Now:\",\"pdp-non-sale-price-label\":\"Was:\",\"pdp-retail-price-label\":\"MSRP:\"},\"genericError\":\"Oops! Something went wrong.\",\"maintenanceMode\":{\"header\":null,\"notice\":null,\"message\":null,\"securePath\":\"https://au.skda.com.au\",\"password\":null},\"urls\":{\"home\":\"https://au.skda.com.au/\",\"account\":{\"index\":\"/account.php\",\"orders\":{\"all\":\"/account.php?action=order_status\",\"completed\":\"/account.php?action=view_orders\",\"save_new_return\":\"/account.php?action=save_new_return\"},\"update_action\":\"/account.php?action=update_account\",\"returns\":\"/account.php?action=view_returns\",\"addresses\":\"/account.php?action=address_book\",\"inbox\":\"/account.php?action=inbox\",\"send_message\":\"/account.php?action=send_message\",\"add_address\":\"/account.php?action=add_shipping_address\",\"wishlists\":{\"all\":\"/wishlist.php\",\"add\":\"/wishlist.php?action=addwishlist\",\"edit\":\"/wishlist.php?action=editwishlist\",\"delete\":\"/wishlist.php?action=deletewishlist\"},\"details\":\"/account.php?action=account_details\",\"recent_items\":\"/account.php?action=recent_items\"},\"brands\":\"https://au.skda.com.au/brands/\",\"gift_certificate\":{\"purchase\":\"/giftcertificates.php\",\"redeem\":\"/giftcertificates.php?action=redeem\",\"balance\":\"/giftcertificates.php?action=balance\"},\"auth\":{\"login\":\"/login.php\",\"check_login\":\"/login.php?action=check_login\",\"create_account\":\"/login.php?action=create_account\",\"save_new_account\":\"/login.php?action=save_new_account\",\"forgot_password\":\"/login.php?action=reset_password\",\"send_password_email\":\"/login.php?action=send_password_email\",\"save_new_password\":\"/login.php?action=save_new_password\",\"logout\":\"/login.php?action=logout\"},\"product\":{\"post_review\":\"/postreview.php\"},\"cart\":\"/cart.php\",\"checkout\":{\"single_address\":\"/checkout.php\",\"multiple_address\":\"/checkout.php?action=multiple\"},\"rss\":{\"products\":{\"new\":\"/rss.php?type=rss\",\"new_atom\":\"/rss.php?type=atom\",\"popular\":\"/rss.php?action=popularproducts&type=rss\",\"popular_atom\":\"/rss.php?action=popularproducts&type=atom\",\"featured\":\"/rss.php?action=featuredproducts&type=rss\",\"featured_atom\":\"/rss.php?action=featuredproducts&type=atom\",\"search\":\"/rss.php?action=searchproducts&type=rss\",\"search_atom\":\"/rss.php?action=searchproducts&type=atom\"},\"blog\":\"/rss.php?action=newblogs&type=rss\",\"blog_atom\":\"/rss.php?action=newblogs&type=atom\"},\"contact_us_submit\":\"/pages.php?action=sendContactForm\",\"search\":\"/search.php\",\"compare\":\"/compare\",\"sitemap\":\"/sitemap.php\",\"subscribe\":{\"action\":\"/subscribe.php\"}}}").load();
        </script>
        <script type="text/javascript">

            function grandtotal() {
                $('#spanharga').text('<?php echo $this->cart->total_items() ?>');
            }

            function addcart(x) {
                console.log(x);
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "shop/addcart",
                    type: "POST",
                    data: {
                        id: x
                    },
                    dataType: "JSON",
                    success: function(data) {
                        if (data.sukses == 'success') {
                            console.log('sukses');
                        } else if (data.sukses == 'fail') {
                            console.log('gagal');
                        }
                    },
                    // error: function(jqXHR, textStatus, errorThrown) {
                    //     alert('Error on process');
                    // }
                });
            }
        </script>

    </body>
</html>