<?php
    require '../includes/init.php';
    $categories = select('SELECT * FROM categories');
    $products = select('SELECT * FROM products');
    include pathOf('includes/header.php');
    include pathOf('includes/nav.php');
?>

<body
    class="archive post-type-archive post-type-archive-product theme-fidalgo qi-blocks-1.2.6 qodef-gutenberg--no-touch qode-framework-1.2.2 woocommerce-shop woocommerce woocommerce-page woocommerce-no-js qodef-qi--no-touch qi-addons-for-elementor-1.6.9 qi-watermark-1.4.9 qodef-back-to-top--enabled qodef-skin--reseda-green  qodef-header--standard qodef-header-appearance--none qodef-mobile-header--standard qodef-drop-down-second--full-width qodef-drop-down-second--default fidalgo-core-1.0 fidalgo-1.0 qodef-content-grid-1400 qodef-header-standard--center qodef-search--fullscreen elementor-default elementor-kit-4"
    itemscope itemtype="https://schema.org/WebPage">
    <div id="qodef-page-outer">
        <div id="qodef-page-inner" class="qodef-content-grid">
            <main id="qodef-page-content"
                class="qodef-grid qodef-layout--template qodef-grid-template--9-3 qodef-gutter--huge" role="main">
                <div class="qodef-grid-inner">
                    <div id="qodef-woo-page"
                        class="qodef-grid-item qodef-page-content-section qodef-col--content qodef--list">
                        <div
                            class="qodef-woo-product-list qodef-item-layout--info-below qodef-gutter--no qodef-vertical-gutter--no qodef-item-border--yes qodef-item-title--letter-spacing">
                            <ul class="products columns-2">
                                <?php foreach ($products as $product) { ?>
                                <li
                                    class="product type-product post-342 status-publish first instock product_cat-chocolate product_tag-caramel product_tag-chocolate has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="qodef-e-inner">
                                        <div class="qodef-e-content">
                                            <div class="qodef-e-top-holder">
                                                <h5 class="qodef-woo-product-title woocommerce-loop-product__title"><a
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?= $product['Name'] ?></a></h5>
                                                <span class="price"><span
                                                                class="woocommerce-Price-currencySymbol">&#36;</span><?= $product['Price'] ?></bdi></span></span>
                                            </div><a href="" 
                                                class="button product_type_simple"
                                                >More Info</a>
                                        </div>
                                        <div class="qodef-e-media">
                                            <div class="qodef-e-media-image"><a
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img
                                                        width="300" height="300"
                                                        src="<?= urlOf('admin/assets/images/uploads/') . $product['ImageFileName'] ?>"
                                                        sizes="(max-width: 300px) 100vw, 300px" /></a></div>
                                                        <a href="https://fidalgo.qodeinteractive.com/product/whiskey-cream/"></a>
                                        </div>
                                        <div class="qodef-e-content-bottom">
                                            <p itemprop="description" class="qodef-woo-product-excerpt"><?= $product['Description'] ?></p>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="qodef-grid-item qodef-page-sidebar-section qodef-col--sidebar">
                        <aside id="qodef-page-sidebar" role="complementary">
                            <div class="widget widget_fidalgo_core_separator" data-area="shop-sidebar">
                                <div
                                    class="qodef-shortcode qodef-m  qodef-separator clear  qodef-border--solid qodef-show--yes qodef-show-1600--yes qodef-show-1512--yes qodef-show-1368--yes qodef-show-1200--yes qodef-show-1024--yes qodef-show-880--yes qodef-show-680--yes">
                                    <div class="qodef-m-line"
                                        style="border-style: solid;border-bottom-width: 0px;margin-top: 0px;margin-bottom: 20px">
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget_fidalgo_core_title_widget" data-area="shop-sidebar">
                                <h4 class="qodef-widget-title" style="margin-bottom: 15px">
                                    categories </h4>
                            </div>
                            <div class="widget widget_block" data-area="shop-sidebar">
                                <div data-block-name="woocommerce/product-categories"
                                    class="wp-block-woocommerce-product-categories wc-block-product-categories is-list "
                                    style>
                                    <ul
                                        class="wc-block-product-categories-list wc-block-product-categories-list--depth-0">
                                        <?php foreach($categories as $categorie) { ?>
                                                <li class="wc-block-product-categories-list-item"> <a style
                                                ><span
                                                    class="wc-block-product-categories-list-item__name"><?= $categorie['Name'] ?></span></a><span
                                                class="wc-block-product-categories-list-item-count"> </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget widget_fidalgo_core_separator" data-area="shop-sidebar">
                                <div
                                    class="qodef-shortcode qodef-m  qodef-separator clear  qodef-border--solid qodef-show--yes qodef-show-1600--yes qodef-show-1512--yes qodef-show-1368--yes qodef-show-1200--yes qodef-show-1024--yes qodef-show-880--yes qodef-show-680--yes">
                                    <div class="qodef-m-line"
                                        style="border-style: solid;border-bottom-width: 0px;margin-top: 0px;margin-bottom: 15px">
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget_fidalgo_core_title_widget" data-area="shop-sidebar">
                                <h4 class="qodef-widget-title" style="margin-bottom: 15px">
                                    follow us </h4>
                            </div>
                            <div class="widget widget_fidalgo_core_social_links_group" data-area="shop-sidebar">
                                <div class="qodef-social-links-group">
                                    <span class="qodef-link-holder">
                                        <a itemprop="url">Facebook</a> </span>
                                    <span class="qodef-link-holder">
                                        <a itemprop="url">Instagram</a> </span>
                                </div>
                            </div>
                            <div class="widget widget_fidalgo_core_separator" data-area="shop-sidebar">
                                <div
                                    class="qodef-shortcode qodef-m  qodef-separator clear  qodef-border--solid qodef-show--yes qodef-show-1600--yes qodef-show-1512--yes qodef-show-1368--yes qodef-show-1200--yes qodef-show-1024--yes qodef-show-880--yes qodef-show-680--yes">
                                    <div class="qodef-m-line"
                                        style="border-style: solid;border-bottom-width: 0px;margin-top: 0px;margin-bottom: 22px">
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget_block" data-area="shop-sidebar">
                                <div
                                    class="wp-block-qi-blocks-banner qodef-block-container qodef-widget-block-f32e379f">
                                    <div
                                        class="qi-block-banner qodef-block qodef-m qodef-layout--standard qodef-vertical--top qodef-horizontal--center qodef-image--hover-zoom">
                                        <div class="qodef-m-image"><img loading="lazy" decoding="async" width="318"
                                                height="455" class="wp-image-460"
                                                src="https://fidalgo.qodeinteractive.com/wp-content/uploads/2023/09/shop-banner-img.jpg"
                                                alt="a"
                                                srcset="https://fidalgo.qodeinteractive.com/wp-content/uploads/2023/09/shop-banner-img.jpg 318w, https://fidalgo.qodeinteractive.com/wp-content/uploads/2023/09/shop-banner-img-210x300.jpg 210w"
                                                sizes="(max-width: 318px) 100vw, 318px" /></div>
                                        <div class="qodef-m-content">
                                            <div class="qodef-m-content-inner">
                                                <h5 class="qodef-m-title">Delights</h5><a
                                                    class="qodef-m-banner-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget_fidalgo_core_separator" data-area="shop-sidebar">
                                <div
                                    class="qodef-shortcode qodef-m  qodef-separator clear  qodef-border--solid qodef-show--yes qodef-show-1600--yes qodef-show-1512--yes qodef-show-1368--yes qodef-show-1200--yes qodef-show-1024--yes qodef-show-880--yes qodef-show-680--yes">
                                    <div class="qodef-m-line"
                                        style="border-style: solid;border-bottom-width: 0px;margin-top: 0px;margin-bottom: 22px">
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget_block widget_text" data-area="shop-sidebar">
                                <p></p>
                            </div>
                        </aside>
                    </div>
                </div>
            </main>
        </div>
    </div>
    </div>

    <?php
    include pathOf('includes/scripts.php');
    include pathOf('includes/footer.php');
?>