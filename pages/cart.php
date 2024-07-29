<?php
    require '../includes/init.php';
    include pathOf('includes/header.php');
    include pathOf('includes/navbar.php');
?>

<body
    class="page-template-default page page-id-9 theme-fidalgo qi-blocks-1.2.6 qodef-gutenberg--no-touch qode-framework-1.2.2 woocommerce-cart woocommerce-page woocommerce-no-js qodef-qi--no-touch qi-addons-for-elementor-1.6.9 qi-watermark-1.4.9 qodef-back-to-top--enabled qodef-skin--reseda-green  qodef-header--standard qodef-header-appearance--none qodef-mobile-header--standard qodef-drop-down-second--full-width qodef-drop-down-second--default fidalgo-core-1.0 fidalgo-1.0 qodef-content-grid-1400 qodef-header-standard--center qodef-search--fullscreen elementor-default elementor-kit-4"
    itemscope itemtype="https://schema.org/WebPage">

    <div id="qodef-page-outer">
        <div
            class="qodef-page-title qodef-m qodef-title--breadcrumbs qodef-alignment--left qodef-vertical-alignment--header-bottom qodef--has-image">
            <div class="qodef-m-inner">
                <div class="qodef-m-content qodef-content-grid ">
                    <div itemprop="breadcrumb" class="qodef-breadcrumbs"><a itemprop="url"
                            class="qodef-breadcrumbs-link" href="https://fidalgo.qodeinteractive.com/"><span
                                itemprop="title">Home</span></a><span class="qodef-breadcrumbs-separator"></span><span
                            itemprop="title" class="qodef-breadcrumbs-current">Cart</span></div>
                </div>
            </div>
        </div>
        <div id="qodef-page-inner" class="qodef-content-grid">
            <main id="qodef-page-content" class="qodef-grid qodef-layout--template qodef-grid-template--12 "
                role="main">
                <div class="qodef-grid-inner">
                    <div class="qodef-grid-item qodef-page-content-section qodef-col--content">
                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>
                            <div class="wc-empty-cart-message">
                                <div class="cart-empty woocommerce-info">
                                    Your cart is currently empty. </div>
                            </div>
                            <p class="return-to-shop">
                                <a class="button wc-backward" href="https://fidalgo.qodeinteractive.com/shop/">
                                    Return to shop </a>
                            </p>
                        </div>
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