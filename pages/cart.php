<?php
require '../includes/init.php';

$productId = $_POST['ProductId'];
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
                                <div id="qodef-page-inner" class="qodef-content-grid">
                                    <main id="qodef-page-content" class="qodef-grid qodef-layout--template qodef-grid-template--12 " role="main">
                                        <div class="qodef-grid-inner">
                                            <div class="qodef-grid-item qodef-page-content-section qodef-col--content">
                                                <div class="woocommerce">
                                                    <div id="qodef-woo-page" class="qodef--cart">
                                                        <div class="woocommerce-notices-wrapper"></div>
                                                        <form class="woocommerce-cart-form" action="https://fidalgo.qodeinteractive.com/cart/" method="post">
                                                            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-remove"><span class="screen-reader-text">Remove item</span></th>
                                                                        <th class="product-thumbnail"><span class="screen-reader-text">Thumbnail image</span></th>
                                                                        <th class="product-name">Product</th>
                                                                        <th class="product-price">Price</th>
                                                                        <th class="product-quantity">Quantity</th>
                                                                        <th class="product-subtotal">Subtotal</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr class="woocommerce-cart-form__cart-item cart_item">

                                                                        <td class="product-remove">
                                                                            <a href="https://fidalgo.qodeinteractive.com/cart/?remove_item=cf004fdc76fa1a4f25f62e0eb5261ca3&amp;_wpnonce=a2b105bd75" class="remove" aria-label="Remove Pecan Sandies from cart" data-product_id="368" data-product_sku="2">×</a>
                                                                        </td>

                                                                        <td class="product-thumbnail">
                                                                            <a href="https://fidalgo.qodeinteractive.com/product/pecan-sandies/"><img loading="lazy" decoding="async" width="300" height="300" src="https://fidalgo.qodeinteractive.com/wp-content/uploads/2023/09/shop-single-img6-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="a" srcset="https://fidalgo.qodeinteractive.com/wp-content/uploads/2023/09/shop-single-img6-300x300.png 300w, https://fidalgo.qodeinteractive.com/wp-content/uploads/2023/09/shop-single-img6-150x150.png 150w, https://fidalgo.qodeinteractive.com/wp-content/uploads/2023/09/shop-single-img6-650x650.png 650w, https://fidalgo.qodeinteractive.com/wp-content/uploads/2023/09/shop-single-img6-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px"></a>
                                                                        </td>

                                                                        <td class="product-name" data-title="Product">
                                                                            <a href="https://fidalgo.qodeinteractive.com/product/pecan-sandies/">Pecan Sandies</a>
                                                                        </td>

                                                                        <td class="product-price" data-title="Price">
                                                                            <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>27.00</bdi></span>
                                                                        </td>

                                                                        <td class="product-quantity" data-title="Quantity">
                                                                            <div class="qodef-quantity-buttons quantity">
                                                                                <label class="qodef-quantity-label">Quantity</label> <label class="screen-reader-text" for="quantity_66cd7dbbc6d90">Pecan Sandies quantity</label>
                                                                                <span class="qodef-quantity-minus"></span>
                                                                                <input type="text" id="quantity_66cd7dbbc6d90" class="input-text qty text qodef-quantity-input" name="cart[cf004fdc76fa1a4f25f62e0eb5261ca3][qty]" value="1" aria-label="Product quantity" size="4" data-min="0" data-max="" data-step="1" placeholder="" inputmode="numeric" autocomplete="off">
                                                                                <span class="qodef-quantity-plus"></span>
                                                                            </div>
                                                                        </td>

                                                                        <td class="product-subtotal" data-title="Subtotal">
                                                                            <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>27.00</bdi></span>
                                                                        </td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td colspan="6" class="actions">

                                                                            <div class="coupon">
                                                                                <label for="coupon_code" class="screen-reader-text">Coupon:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                                                            </div>

                                                                            <button type="submit" class="button" name="update_cart" value="Update cart" disabled="">Update cart</button>


                                                                            <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="a2b105bd75"><input type="hidden" name="_wp_http_referer" value="/cart/">
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </form>


                                                        <div class="cart-collaterals">
                                                            <div class="cart_totals ">


                                                                <h2>Cart totals</h2>

                                                                <table cellspacing="0" class="shop_table shop_table_responsive">

                                                                    <tbody>
                                                                        <tr class="cart-subtotal">
                                                                            <th>Subtotal</th>
                                                                            <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>27.00</bdi></span></td>
                                                                        </tr>




                                                                        <tr class="woocommerce-shipping-totals shipping">
                                                                            <th>Shipping</th>
                                                                            <td data-title="Shipping">
                                                                                <ul id="shipping_method" class="woocommerce-shipping-methods">
                                                                                </ul>
                                                                                <p class="woocommerce-shipping-destination">
                                                                                    Shipping to <strong>CA</strong>. </p>



                                                                                <form class="woocommerce-shipping-calculator" action="https://fidalgo.qodeinteractive.com/cart/" method="post">

                                                                                    <a href="#" class="shipping-calculator-button">Change address</a>
                                                                                    <section class="shipping-calculator-form" style="display:none;">

                                                                                        <p class="form-row form-row-wide" id="calc_shipping_country_field">
                                                                                            <label for="calc_shipping_country" class="screen-reader-text">Country / region:</label>
                                                                                            <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state country_select select2-hidden-accessible" rel="calc_shipping_state" tabindex="-1" aria-hidden="true">
                                                                                                <option value="default">Select a country / region…</option>
                                                                                                <option value="AF">Afghanistan</option>
                                                                                                <option value="AX">Åland Islands</option>
                                                                                                <option value="AL">Albania</option>
                                                                                                <option value="DZ">Algeria</option>
                                                                                                <option value="AS">American Samoa</option>
                                                                                                <option value="AD">Andorra</option>
                                                                                                <option value="AO">Angola</option>
                                                                                                <option value="AI">Anguilla</option>
                                                                                                <option value="AQ">Antarctica</option>
                                                                                                <option value="AG">Antigua and Barbuda</option>
                                                                                                <option value="AR">Argentina</option>
                                                                                                <option value="AM">Armenia</option>
                                                                                                <option value="AW">Aruba</option>
                                                                                                <option value="AU">Australia</option>
                                                                                                <option value="AT">Austria</option>
                                                                                                <option value="AZ">Azerbaijan</option>
                                                                                                <option value="BS">Bahamas</option>
                                                                                                <option value="BH">Bahrain</option>
                                                                                                <option value="BD">Bangladesh</option>
                                                                                                <option value="BB">Barbados</option>
                                                                                                <option value="BY">Belarus</option>
                                                                                                <option value="PW">Belau</option>
                                                                                                <option value="BE">Belgium</option>
                                                                                                <option value="BZ">Belize</option>
                                                                                                <option value="BJ">Benin</option>
                                                                                                <option value="BM">Bermuda</option>
                                                                                                <option value="BT">Bhutan</option>
                                                                                                <option value="BO">Bolivia</option>
                                                                                                <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                                                                <option value="BA">Bosnia and Herzegovina</option>
                                                                                                <option value="BW">Botswana</option>
                                                                                                <option value="BV">Bouvet Island</option>
                                                                                                <option value="BR">Brazil</option>
                                                                                                <option value="IO">British Indian Ocean Territory</option>
                                                                                                <option value="BN">Brunei</option>
                                                                                                <option value="BG">Bulgaria</option>
                                                                                                <option value="BF">Burkina Faso</option>
                                                                                                <option value="BI">Burundi</option>
                                                                                                <option value="KH">Cambodia</option>
                                                                                                <option value="CM">Cameroon</option>
                                                                                                <option value="CA">Canada</option>
                                                                                                <option value="CV">Cape Verde</option>
                                                                                                <option value="KY">Cayman Islands</option>
                                                                                                <option value="CF">Central African Republic</option>
                                                                                                <option value="TD">Chad</option>
                                                                                                <option value="CL">Chile</option>
                                                                                                <option value="CN">China</option>
                                                                                                <option value="CX">Christmas Island</option>
                                                                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                                                                <option value="CO">Colombia</option>
                                                                                                <option value="KM">Comoros</option>
                                                                                                <option value="CG">Congo (Brazzaville)</option>
                                                                                                <option value="CD">Congo (Kinshasa)</option>
                                                                                                <option value="CK">Cook Islands</option>
                                                                                                <option value="CR">Costa Rica</option>
                                                                                                <option value="HR">Croatia</option>
                                                                                                <option value="CU">Cuba</option>
                                                                                                <option value="CW">Curaçao</option>
                                                                                                <option value="CY">Cyprus</option>
                                                                                                <option value="CZ">Czech Republic</option>
                                                                                                <option value="DK">Denmark</option>
                                                                                                <option value="DJ">Djibouti</option>
                                                                                                <option value="DM">Dominica</option>
                                                                                                <option value="DO">Dominican Republic</option>
                                                                                                <option value="EC">Ecuador</option>
                                                                                                <option value="EG">Egypt</option>
                                                                                                <option value="SV">El Salvador</option>
                                                                                                <option value="GQ">Equatorial Guinea</option>
                                                                                                <option value="ER">Eritrea</option>
                                                                                                <option value="EE">Estonia</option>
                                                                                                <option value="SZ">Eswatini</option>
                                                                                                <option value="ET">Ethiopia</option>
                                                                                                <option value="FK">Falkland Islands</option>
                                                                                                <option value="FO">Faroe Islands</option>
                                                                                                <option value="FJ">Fiji</option>
                                                                                                <option value="FI">Finland</option>
                                                                                                <option value="FR">France</option>
                                                                                                <option value="GF">French Guiana</option>
                                                                                                <option value="PF">French Polynesia</option>
                                                                                                <option value="TF">French Southern Territories</option>
                                                                                                <option value="GA">Gabon</option>
                                                                                                <option value="GM">Gambia</option>
                                                                                                <option value="GE">Georgia</option>
                                                                                                <option value="DE">Germany</option>
                                                                                                <option value="GH">Ghana</option>
                                                                                                <option value="GI">Gibraltar</option>
                                                                                                <option value="GR">Greece</option>
                                                                                                <option value="GL">Greenland</option>
                                                                                                <option value="GD">Grenada</option>
                                                                                                <option value="GP">Guadeloupe</option>
                                                                                                <option value="GU">Guam</option>
                                                                                                <option value="GT">Guatemala</option>
                                                                                                <option value="GG">Guernsey</option>
                                                                                                <option value="GN">Guinea</option>
                                                                                                <option value="GW">Guinea-Bissau</option>
                                                                                                <option value="GY">Guyana</option>
                                                                                                <option value="HT">Haiti</option>
                                                                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                                                                <option value="HN">Honduras</option>
                                                                                                <option value="HK">Hong Kong</option>
                                                                                                <option value="HU">Hungary</option>
                                                                                                <option value="IS">Iceland</option>
                                                                                                <option value="IN">India</option>
                                                                                                <option value="ID">Indonesia</option>
                                                                                                <option value="IR">Iran</option>
                                                                                                <option value="IQ">Iraq</option>
                                                                                                <option value="IE">Ireland</option>
                                                                                                <option value="IM">Isle of Man</option>
                                                                                                <option value="IL">Israel</option>
                                                                                                <option value="IT">Italy</option>
                                                                                                <option value="CI">Ivory Coast</option>
                                                                                                <option value="JM">Jamaica</option>
                                                                                                <option value="JP">Japan</option>
                                                                                                <option value="JE">Jersey</option>
                                                                                                <option value="JO">Jordan</option>
                                                                                                <option value="KZ">Kazakhstan</option>
                                                                                                <option value="KE">Kenya</option>
                                                                                                <option value="KI">Kiribati</option>
                                                                                                <option value="KW">Kuwait</option>
                                                                                                <option value="KG">Kyrgyzstan</option>
                                                                                                <option value="LA">Laos</option>
                                                                                                <option value="LV">Latvia</option>
                                                                                                <option value="LB">Lebanon</option>
                                                                                                <option value="LS">Lesotho</option>
                                                                                                <option value="LR">Liberia</option>
                                                                                                <option value="LY">Libya</option>
                                                                                                <option value="LI">Liechtenstein</option>
                                                                                                <option value="LT">Lithuania</option>
                                                                                                <option value="LU">Luxembourg</option>
                                                                                                <option value="MO">Macao</option>
                                                                                                <option value="MG">Madagascar</option>
                                                                                                <option value="MW">Malawi</option>
                                                                                                <option value="MY">Malaysia</option>
                                                                                                <option value="MV">Maldives</option>
                                                                                                <option value="ML">Mali</option>
                                                                                                <option value="MT">Malta</option>
                                                                                                <option value="MH">Marshall Islands</option>
                                                                                                <option value="MQ">Martinique</option>
                                                                                                <option value="MR">Mauritania</option>
                                                                                                <option value="MU">Mauritius</option>
                                                                                                <option value="YT">Mayotte</option>
                                                                                                <option value="MX">Mexico</option>
                                                                                                <option value="FM">Micronesia</option>
                                                                                                <option value="MD">Moldova</option>
                                                                                                <option value="MC">Monaco</option>
                                                                                                <option value="MN">Mongolia</option>
                                                                                                <option value="ME">Montenegro</option>
                                                                                                <option value="MS">Montserrat</option>
                                                                                                <option value="MA">Morocco</option>
                                                                                                <option value="MZ">Mozambique</option>
                                                                                                <option value="MM">Myanmar</option>
                                                                                                <option value="NA">Namibia</option>
                                                                                                <option value="NR">Nauru</option>
                                                                                                <option value="NP">Nepal</option>
                                                                                                <option value="NL">Netherlands</option>
                                                                                                <option value="NC">New Caledonia</option>
                                                                                                <option value="NZ">New Zealand</option>
                                                                                                <option value="NI">Nicaragua</option>
                                                                                                <option value="NE">Niger</option>
                                                                                                <option value="NG">Nigeria</option>
                                                                                                <option value="NU">Niue</option>
                                                                                                <option value="NF">Norfolk Island</option>
                                                                                                <option value="KP">North Korea</option>
                                                                                                <option value="MK">North Macedonia</option>
                                                                                                <option value="MP">Northern Mariana Islands</option>
                                                                                                <option value="NO">Norway</option>
                                                                                                <option value="OM">Oman</option>
                                                                                                <option value="PK">Pakistan</option>
                                                                                                <option value="PS">Palestinian Territory</option>
                                                                                                <option value="PA">Panama</option>
                                                                                                <option value="PG">Papua New Guinea</option>
                                                                                                <option value="PY">Paraguay</option>
                                                                                                <option value="PE">Peru</option>
                                                                                                <option value="PH">Philippines</option>
                                                                                                <option value="PN">Pitcairn</option>
                                                                                                <option value="PL">Poland</option>
                                                                                                <option value="PT">Portugal</option>
                                                                                                <option value="PR">Puerto Rico</option>
                                                                                                <option value="QA">Qatar</option>
                                                                                                <option value="RE">Reunion</option>
                                                                                                <option value="RO">Romania</option>
                                                                                                <option value="RU">Russia</option>
                                                                                                <option value="RW">Rwanda</option>
                                                                                                <option value="ST">São Tomé and Príncipe</option>
                                                                                                <option value="BL">Saint Barthélemy</option>
                                                                                                <option value="SH">Saint Helena</option>
                                                                                                <option value="KN">Saint Kitts and Nevis</option>
                                                                                                <option value="LC">Saint Lucia</option>
                                                                                                <option value="SX">Saint Martin (Dutch part)</option>
                                                                                                <option value="MF">Saint Martin (French part)</option>
                                                                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                                                                <option value="WS">Samoa</option>
                                                                                                <option value="SM">San Marino</option>
                                                                                                <option value="SA">Saudi Arabia</option>
                                                                                                <option value="SN">Senegal</option>
                                                                                                <option value="RS">Serbia</option>
                                                                                                <option value="SC">Seychelles</option>
                                                                                                <option value="SL">Sierra Leone</option>
                                                                                                <option value="SG">Singapore</option>
                                                                                                <option value="SK">Slovakia</option>
                                                                                                <option value="SI">Slovenia</option>
                                                                                                <option value="SB">Solomon Islands</option>
                                                                                                <option value="SO">Somalia</option>
                                                                                                <option value="ZA">South Africa</option>
                                                                                                <option value="GS">South Georgia/Sandwich Islands</option>
                                                                                                <option value="KR">South Korea</option>
                                                                                                <option value="SS">South Sudan</option>
                                                                                                <option value="ES">Spain</option>
                                                                                                <option value="LK">Sri Lanka</option>
                                                                                                <option value="SD">Sudan</option>
                                                                                                <option value="SR">Suriname</option>
                                                                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                                                                <option value="SE">Sweden</option>
                                                                                                <option value="CH">Switzerland</option>
                                                                                                <option value="SY">Syria</option>
                                                                                                <option value="TW">Taiwan</option>
                                                                                                <option value="TJ">Tajikistan</option>
                                                                                                <option value="TZ">Tanzania</option>
                                                                                                <option value="TH">Thailand</option>
                                                                                                <option value="TL">Timor-Leste</option>
                                                                                                <option value="TG">Togo</option>
                                                                                                <option value="TK">Tokelau</option>
                                                                                                <option value="TO">Tonga</option>
                                                                                                <option value="TT">Trinidad and Tobago</option>
                                                                                                <option value="TN">Tunisia</option>
                                                                                                <option value="TR">Turkey</option>
                                                                                                <option value="TM">Turkmenistan</option>
                                                                                                <option value="TC">Turks and Caicos Islands</option>
                                                                                                <option value="TV">Tuvalu</option>
                                                                                                <option value="UG">Uganda</option>
                                                                                                <option value="UA">Ukraine</option>
                                                                                                <option value="AE">United Arab Emirates</option>
                                                                                                <option value="GB">United Kingdom (UK)</option>
                                                                                                <option value="US" selected="selected">United States (US)</option>
                                                                                                <option value="UM">United States (US) Minor Outlying Islands</option>
                                                                                                <option value="UY">Uruguay</option>
                                                                                                <option value="UZ">Uzbekistan</option>
                                                                                                <option value="VU">Vanuatu</option>
                                                                                                <option value="VA">Vatican</option>
                                                                                                <option value="VE">Venezuela</option>
                                                                                                <option value="VN">Vietnam</option>
                                                                                                <option value="VG">Virgin Islands (British)</option>
                                                                                                <option value="VI">Virgin Islands (US)</option>
                                                                                                <option value="WF">Wallis and Futuna</option>
                                                                                                <option value="EH">Western Sahara</option>
                                                                                                <option value="YE">Yemen</option>
                                                                                                <option value="ZM">Zambia</option>
                                                                                                <option value="ZW">Zimbabwe</option>
                                                                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-calc_shipping_country-container" role="combobox"><span class="select2-selection__rendered" id="select2-calc_shipping_country-container" role="textbox" aria-readonly="true" title="United States (US)">United States (US)</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                                        </p>

                                                                                        <p class="form-row validate-required form-row-wide address-field" id="calc_shipping_state_field">
                                                                                            <span>
                                                                                                <label for="calc_shipping_state" class="screen-reader-text">State&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                                                                <select name="calc_shipping_state" class="state_select select2-hidden-accessible" id="calc_shipping_state" data-placeholder="State / County" tabindex="-1" aria-hidden="true">
                                                                                                    <option value="">Select an option…</option>
                                                                                                    <option value="AL">Alabama</option>
                                                                                                    <option value="AK">Alaska</option>
                                                                                                    <option value="AZ">Arizona</option>
                                                                                                    <option value="AR">Arkansas</option>
                                                                                                    <option value="CA">California</option>
                                                                                                    <option value="CO">Colorado</option>
                                                                                                    <option value="CT">Connecticut</option>
                                                                                                    <option value="DE">Delaware</option>
                                                                                                    <option value="DC">District Of Columbia</option>
                                                                                                    <option value="FL">Florida</option>
                                                                                                    <option value="GA">Georgia</option>
                                                                                                    <option value="HI">Hawaii</option>
                                                                                                    <option value="ID">Idaho</option>
                                                                                                    <option value="IL">Illinois</option>
                                                                                                    <option value="IN">Indiana</option>
                                                                                                    <option value="IA">Iowa</option>
                                                                                                    <option value="KS">Kansas</option>
                                                                                                    <option value="KY">Kentucky</option>
                                                                                                    <option value="LA">Louisiana</option>
                                                                                                    <option value="ME">Maine</option>
                                                                                                    <option value="MD">Maryland</option>
                                                                                                    <option value="MA">Massachusetts</option>
                                                                                                    <option value="MI">Michigan</option>
                                                                                                    <option value="MN">Minnesota</option>
                                                                                                    <option value="MS">Mississippi</option>
                                                                                                    <option value="MO">Missouri</option>
                                                                                                    <option value="MT">Montana</option>
                                                                                                    <option value="NE">Nebraska</option>
                                                                                                    <option value="NV">Nevada</option>
                                                                                                    <option value="NH">New Hampshire</option>
                                                                                                    <option value="NJ">New Jersey</option>
                                                                                                    <option value="NM">New Mexico</option>
                                                                                                    <option value="NY">New York</option>
                                                                                                    <option value="NC">North Carolina</option>
                                                                                                    <option value="ND">North Dakota</option>
                                                                                                    <option value="OH">Ohio</option>
                                                                                                    <option value="OK">Oklahoma</option>
                                                                                                    <option value="OR">Oregon</option>
                                                                                                    <option value="PA">Pennsylvania</option>
                                                                                                    <option value="RI">Rhode Island</option>
                                                                                                    <option value="SC">South Carolina</option>
                                                                                                    <option value="SD">South Dakota</option>
                                                                                                    <option value="TN">Tennessee</option>
                                                                                                    <option value="TX">Texas</option>
                                                                                                    <option value="UT">Utah</option>
                                                                                                    <option value="VT">Vermont</option>
                                                                                                    <option value="VA">Virginia</option>
                                                                                                    <option value="WA">Washington</option>
                                                                                                    <option value="WV">West Virginia</option>
                                                                                                    <option value="WI">Wisconsin</option>
                                                                                                    <option value="WY">Wyoming</option>
                                                                                                    <option value="AA">Armed Forces (AA)</option>
                                                                                                    <option value="AE">Armed Forces (AE)</option>
                                                                                                    <option value="AP">Armed Forces (AP)</option>
                                                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-calc_shipping_state-container" role="combobox"><span class="select2-selection__rendered" id="select2-calc_shipping_state-container" role="textbox" aria-readonly="true" title="California">California</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                                            </span>
                                                                                        </p>

                                                                                        <p class="form-row validate-required form-row-wide address-field" id="calc_shipping_city_field">
                                                                                            <label for="calc_shipping_city" class="screen-reader-text">Town / City&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                                                            <input type="text" class="input-text" value="" placeholder="City" name="calc_shipping_city" id="calc_shipping_city">
                                                                                        </p>

                                                                                        <p class="form-row validate-required form-row-wide address-field" id="calc_shipping_postcode_field">
                                                                                            <label for="calc_shipping_postcode" class="screen-reader-text">ZIP Code&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                                                            <input type="text" class="input-text" value="" placeholder="Postcode / ZIP" name="calc_shipping_postcode" id="calc_shipping_postcode">
                                                                                        </p>

                                                                                        <p><button type="submit" name="calc_shipping" value="1" class="button">Update</button></p>
                                                                                        <input type="hidden" id="woocommerce-shipping-calculator-nonce" name="woocommerce-shipping-calculator-nonce" value="4f5f54f881"><input type="hidden" name="_wp_http_referer" value="/cart/">
                                                                                    </section>
                                                                                </form>

                                                                            </td>
                                                                        </tr>






                                                                        <tr class="order-total">
                                                                            <th>Total</th>
                                                                            <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>27.00</bdi></span></strong> </td>
                                                                        </tr>


                                                                    </tbody>
                                                                </table>

                                                                <div class="wc-proceed-to-checkout">

                                                                    <a href="https://fidalgo.qodeinteractive.com/checkout/" class="checkout-button button alt wc-forward">
                                                                        Proceed to checkout</a>
                                                                </div>


                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </main>
                                </div>
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