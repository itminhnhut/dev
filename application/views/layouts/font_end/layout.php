<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="en-US"> <![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test CI Application</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/trangchu/ci_cart.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/trangchu/style.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/trangchu/menu.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/trangchu/icon.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/trangchu/reponsive.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/trangchu/plugin_2.css">
    <link rel="icon" type="image/png" href="http://demo.roadthemes.com/maroko/wp-content/uploads/2015/07/favicon.ico">
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
        padding: 0 !important
    }
    .zoomContainer{ z-index: 9999 !important;}
    .zoomWindow{ z-index: 9999 !important;}
    #fbplus-content{width: 100%!important;height: auto!important;}
</style>
<style id='rs-plugin-settings-inline-css' type='text/css'>
.tp-caption.roundedimage img {
    -webkit-border-radius: 300px;
    -moz-border-radius: 300px;
    border-radius: 300px
}

.tp-caption a {
    color: #ff7302;
    text-shadow: none;
    -webkit-transition: all 0.2s ease-out;
    -moz-transition: all 0.2s ease-out;
    -o-transition: all 0.2s ease-out;
    -ms-transition: all 0.2s ease-out
}

.tp-caption a:hover {
    color: #ffa902
}

.largeredbtn {
    font-family: "Raleway", sans-serif;
    font-weight: 900;
    font-size: 16px;
    line-height: 60px;
    color: #fff !important;
    text-decoration: none;
    padding-left: 40px;
    padding-right: 80px;
    padding-top: 22px;
    padding-bottom: 22px;
    background: rgb(234, 91, 31);
    background: -moz-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(234, 91, 31, 1)), color-stop(100%, rgba(227, 58, 12, 1)));
    background: -webkit-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    background: -o-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    background: -ms-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    background: linear-gradient(to bottom, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ea5b1f', endColorstr='#e33a0c', GradientType=0)
}

.largeredbtn:hover {
    background: rgb(227, 58, 12);
    background: -moz-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(227, 58, 12, 1)), color-stop(100%, rgba(234, 91, 31, 1)));
    background: -webkit-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    background: -o-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    background: -ms-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    background: linear-gradient(to bottom, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#e33a0c', endColorstr='#ea5b1f', GradientType=0)
}

.fullrounded img {
    -webkit-border-radius: 400px;
    -moz-border-radius: 400px;
    border-radius: 400px
}

.tp-caption a {
    color: #ff7302;
    text-shadow: none;
    -webkit-transition: all 0.2s ease-out;
    -moz-transition: all 0.2s ease-out;
    -o-transition: all 0.2s ease-out;
    -ms-transition: all 0.2s ease-out
}

.tp-caption a:hover {
    color: #ffa902
}

.largeredbtn {
    font-family: "Raleway", sans-serif;
    font-weight: 900;
    font-size: 16px;
    line-height: 60px;
    color: #fff !important;
    text-decoration: none;
    padding-left: 40px;
    padding-right: 80px;
    padding-top: 22px;
    padding-bottom: 22px;
    background: rgb(234, 91, 31);
    background: -moz-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(234, 91, 31, 1)), color-stop(100%, rgba(227, 58, 12, 1)));
    background: -webkit-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    background: -o-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    background: -ms-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    background: linear-gradient(to bottom, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ea5b1f', endColorstr='#e33a0c', GradientType=0)
}

.largeredbtn:hover {
    background: rgb(227, 58, 12);
    background: -moz-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(227, 58, 12, 1)), color-stop(100%, rgba(234, 91, 31, 1)));
    background: -webkit-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    background: -o-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    background: -ms-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    background: linear-gradient(to bottom, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#e33a0c', endColorstr='#ea5b1f', GradientType=0)
}

.fullrounded img {
    -webkit-border-radius: 400px;
    -moz-border-radius: 400px;
    border-radius: 400px
}
</style>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery/slide.js"></script>
<style type="text/css" title="dynamic-css" class="options-output">
body {
    font-family: Raleway;
    line-height: 20px;
    font-weight: 400;
    font-style: normal;
    color: #848484;
    font-size: 13px;
    opacity: 1;
    visibility: visible;
    -webkit-transition: opacity 0.24s ease-in-out;
    -moz-transition: opacity 0.24s ease-in-out;
    transition: opacity 0.24s ease-in-out
}

.wf-loading body,
{
    opacity: 0
}

.ie.wf-loading body,
{
    visibility: hidden
}
</style>
<style type="text/css" data-type="vc_shortcodes-custom-css">
.vc_custom_1436002762836 {
    margin-right: 0px !important;
    margin-left: 0px !important
}

.vc_custom_1436002772838 {
    margin-top: 50px !important;
    margin-right: 0px !important;
    margin-bottom: 0px !important;
    margin-left: 0px !important;
    padding-top: 30px !important;
    padding-bottom: 30px !important;
    background-image: url(http://demo.roadthemes.com/maroko/wp-content/uploads/2014/12/bg_newsletter.jpg)/*tpa=http://demo.roadthemes.com/maroko/wp-content/uploads/2014/12/bg_newsletter.jpg?id=3213*/
    !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important
}
</style>
<noscript>
    <style>
    .wpb_animate_when_almost_visible{opacity:1}
</style>
</noscript>
<?php echo $styles; ?>
</head>
<body>
    <input type="hidden" name="BASE_URL" value="<?php echo base_url(); ?>" >
    <div id="yith-wcwl-popup-message" style="display:none;">
        <div id="yith-wcwl-message"></div>
    </div>
    <div class="wrapper">
        <div class="page-wapper">
            <div class="header-container">
                <div class="top-bar">
                    <div class="container">
                        <div class="topbar-content">
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <div id="mega_main_menu_first" class="topmenu primary_style-flat icons-left first-lvl-align-left first-lvl-separator-smooth direction-horizontal fullwidth-disable pushing_content-disable mobile_minimized-disable dropdowns_trigger-hover dropdowns_animation-none no-logo no-search no-woo_cart no-buddypress responsive-disable coercive_styles-disable indefinite_location_mode-disable language_direction-ltr version-2-0-7 mega_main mega_main_menu">
                                        <div class="menu_holder">
                                            <div class="mmm_fullwidth_container"></div>
                                            <div class="menu_inner">
                                                <span class="nav_logo">
                                                    <a class="mobile_toggle">
                                                        <span class="mobile_button">Menu &nbsp; <span class="symbol_menu">&equiv;</span> <span class="symbol_cross">&#x2573;</span> </span>
                                                    </a>
                                                </span>
                                                <ul id="mega_main_menu_ul_first" class="mega_main_menu_ul">
                                                    <li id="menu-item-3069" class="menu-item menu-item-type-post_type menu-item-object-page last menu-item-3069 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                                        <a href="index-4.htm" tppabs="http://demo.roadthemes.com/maroko/cart/" class="item_link  with_icon" tabindex="0"> <i class="im-icon-cart"></i> <span class="link_content"> <span class="link_text"> Shopping Cart </span> </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-3">
                                <div class="global-table">
                                    <div class="global-row">
                                        <div class="global-cell">
                                            <div class="logo">
                                                <a href="<?=base_url()?>" title="Maroko" rel="home">
                                                    <img src="http://demo.roadthemes.com/maroko/wp-content/uploads/2015/06/logo.png"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-7">
                                <div class="horizontal-menu">
                                    <div class="global-table">
                                        <div class="global-row">
                                            <div class="global-cell">
                                                <div class="visible-large">
                                                    <div id="mega_main_menu" class="primary primary_style-flat icons-left first-lvl-align-left first-lvl-separator-smooth direction-horizontal fullwidth-disable pushing_content-disable mobile_minimized-disable dropdowns_trigger-hover dropdowns_animation-anim_5 no-logo no-search no-woo_cart no-buddypress responsive-disable coercive_styles-disable indefinite_location_mode-disable language_direction-ltr version-2-0-7 mega_main mega_main_menu">
                                                        <div class="menu_holder">
                                                            <div class="mmm_fullwidth_container"></div>
                                                            <div class="menu_inner"> <span class="nav_logo"> <a class="mobile_toggle"> <span class="mobile_button"> Menu &nbsp; <span class="symbol_menu">&equiv;</span> <span class="symbol_cross">&#x2573;</span> </span>
                                                            </a>
                                                        </span>
                                                        <ul id="mega_main_menu_ul" class="mega_main_menu_ul">
                                                            <li id="menu-item-3265" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1860 current_page_item menu-item-has-children first menu-item-3265 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                                                <a href="<?=base_url()?>" class="item_link  disable_icon">
                                                                    <i class=""></i>
                                                                    <span class="link_content">
                                                                        <span class="link_text"> Home </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <?php foreach ($menu as $val_menu): ?>
                                                                <li id="menu-item-3482" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-3482 multicolumn_dropdown default_style drop_to_center submenu_default_width columns4">
                                                                    <a class="item_link  disable_icon" <?php if($val_menu['name'] == 'Blog') {?> href="<?=base_url()?>tag/<?=$val_menu['slug'].'-'.$val_menu['id']?>" <?php }else{?> href="<?=base_url().$val_menu['slug'].'-'.$val_menu['id']?>"<?php } ?>>
                                                                        <i class=""></i>
                                                                        <span class="link_content">
                                                                            <span class="link_text"><?=$val_menu['name']?></span>
                                                                        </span>
                                                                    </a>
                                                                    <?php if(!empty($val_menu['sub'] && $val_menu['name'] != 'Blog')) {?>
                                                                    <ul class="mega_dropdown">
                                                                        <?php foreach ($val_menu['sub'] as $val_cap1): ?>
                                                                            <li id="menu-item-3504" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-3504 default_dropdown default_style drop_to_right submenu_default_width columns1" style="width:25%;">
                                                                                <a class="item_link  disable_icon" href="<?=base_url().$val_cap1['slug'].'-'.$val_cap1['id']?>">
                                                                                    <i class=""></i>
                                                                                    <span class="link_content">
                                                                                        <span class="link_text"><?=$val_cap1['name']?></span>
                                                                                    </span>
                                                                                </a>
                                                                                <ul class="mega_dropdown">
                                                                                    <?php foreach ($val_cap1['sub'] as $val_cap2): ?>
                                                                                        <li id="menu-item-3505" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-3505 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                                                                            <a class="item_link  disable_icon" href="<?=base_url().$val_cap2['slug'].'-'.$val_cap2['id']?>">
                                                                                                <i class=""></i>
                                                                                                <span class="link_content">
                                                                                                    <span class="link_text"><?=$val_cap2['name']?></span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                    <?php endforeach ?>
                                                                                </ul>
                                                                            </li>
                                                                        <?php endforeach ?>
                                                                    </ul>
                                                                    <?php } ?>
                                                                </li>
                                                            <?php endforeach; ?>
                                                            <?php foreach ($pages as $val_page): ?>
                                                                <li id="menu-item-3482" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-3482 multicolumn_dropdown default_style drop_to_center submenu_default_width columns4">
                                                                    <a href="<?=base_url()?>pages/<?=$val_page['slug'].'-'.$val_page['id']?>" class="item_link  disable_icon">
                                                                        <i class=""></i>
                                                                        <span class="link_content">
                                                                            <span class="link_text"><?=$val_page['name']?></span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            <?php endforeach ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="visible-small mobile-menu">
                                            <div class="nav-container">
                                                <div class="mbmenu-toggler">Menu<span class="mbmenu-icon"></span>
                                                </div>
                                                <div class="mobile-menu-container">
                                                    <ul id="menu-megamenu" class="nav-menu">
                                                        <li>
                                                            <a href="<?=base_url()?>">Home</a>
                                                        </li>
                                                        <?php foreach ($menu as $val_menu): ?>
                                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-3482">
                                                                <a <?php if($val_menu['name'] == 'Blog') {?> href="<?=base_url()?>tag/<?=$val_menu['slug'].'-'.$val_menu['id']?>" <?php }else{?> href="<?=base_url().$val_menu['slug'].'-'.$val_menu['id']?>"<?php } ?>><?=$val_menu['name']?></a>
                                                                <?php if($val_menu['name'] != 'Blog') {?>
                                                                <ul class="sub-menu">
                                                                    <?php foreach ($val_menu['sub'] as $val_cap1): ?>
                                                                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-3504">
                                                                            <a href="<?=base_url().$val_cap1['slug'].'-'.$val_cap1['id']?>"><?=$val_cap1['name']?></a>
                                                                            <ul class="sub-menu">
                                                                                <?php foreach ($val_cap1['sub'] as $val_cap2): ?>
                                                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-3505">
                                                                                        <a href="<?=base_url().$val_cap2['slug'].'-'.$val_cap2['id']?>"><?=$val_cap2['name']?></a>
                                                                                    </li>
                                                                                <?php endforeach ?>
                                                                            </ul>
                                                                        </li>
                                                                    <?php endforeach ?>
                                                                </ul>
                                                                <?php } ?>
                                                            </li>
                                                        <?php endforeach; ?>
                                                        <?php foreach ($pages as $val_page): ?>
                                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-3482">
                                                                <a href="<?=base_url()?>pages/<?=$val_page['slug'].'-'.$val_page['id']?>"><?=$val_page['name']?></a>
                                                            </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-2">
                        <div class="global-table">
                            <div class="global-row">
                                <div class="global-cell">
                                    <div class="top-link">
                                        <div class="widget woocommerce widget_shopping_cart">
                                            <h2 class="widgettitle">Cart</h2>
                                            <div id="cartMenu"></div>
                                        </div>
                                        <div class="sidebar-toggler"> <i class="fa fa-bars"></i>
                                        </div>
                                        <div class="header-search">
                                            <div class="widget woocommerce widget_product_search">
                                                <h2 class="widgettitle">Search</h2>
                                                <form role="search" method="get" id="searchform" action="http://demo.roadthemes.com/maroko/">
                                                    <div>
                                                        <input type="text" value="Search product..." name="s" id="ws" placeholder="" />
                                                        <button class="btn btn-primary" type="submit" id="wsearchsubmit"><i class="fa fa-search"></i>
                                                        </button>
                                                        <input type="hidden" name="post_type" value="product" />
                                                    </div>
                                                </form>
                                       <!--  <script type="text/javascript">
                                            jQuery(document).ready(function() {
                                                jQuery("#ws").focus(function() {
                                                    if (jQuery(this).val() == "Search product...") {
                                                        jQuery(this).val("");
                                                    }
                                                });
                                                jQuery("#ws").focusout(function() {
                                                    if (jQuery(this).val() == "") {
                                                        jQuery(this).val("Search product...");
                                                    }
                                                });
                                                jQuery("#wsearchsubmit").click(function() {
                                                    if (jQuery("#ws").val() == "Search product..." || jQuery("#ws").val() == "") {
                                                        jQuery("#ws").focus();
                                                        return false;
                                                    }
                                                });
                                            });
                                        </script> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
</div>
<?php echo $contents; ?>
<div class="footer">
    <!-- <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-sm-6 col-sms-6">
                    <div class="product-shortcode">
                        <h3 class="widget-title">Sale Off</h3>
                        <div class="woocommerce columns-4">
                            <div class="shop-products row grid-view">
                                <div class="first  item-col col-xs-12 col-sm-3 post-1156 product type-product status-publish has-post-thumbnail product_cat-backpacks product_cat-bags product_cat-bucket-bags product_cat-clothings product_cat-clutches product_cat-crossbody-bags product_cat-jackets-coats product_cat-jeans product_cat-men product_cat-pumps product_cat-sandals product_cat-shoes product_cat-shorts product_cat-sneakers product_cat-t-shirts product_cat-wedges product_tag-electronic product_tag-phone pa_color-black pa_color-blue pa_color-red pa_color-white sale featured shipping-taxable purchasable product-type-variable product-cat-backpacks product-cat-bags product-cat-bucket-bags product-cat-clothings product-cat-clutches product-cat-crossbody-bags product-cat-jackets-coats product-cat-jeans product-cat-men product-cat-pumps product-cat-sandals product-cat-shoes product-cat-shorts product-cat-sneakers product-cat-t-shirts product-cat-wedges product-tag-electronic product-tag-phone instock">
                                    <div class="product-wrapper">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="index-63.htm" tppabs="http://demo.roadthemes.com/maroko/product/auctor-gravida-enim/" title="Auctor gravida enim"> <img width="480" height="635" src="<?=base_url()?>assets/img/anh/1-480x635.jpg" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2014/10/1-480x635.jpg" class="primary_image wp-post-image" alt="" /><img width="480" height="635" src="<?=base_url()?>assets/img/anh/4-480x635.jpg" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2014/10/4-480x635.jpg" class="secondary_image" alt="" /> </a>
                                                <div class="price-box"><span class="special-price"><span class="amount">&pound;195.00</span></span><span class="old-price"><span class="amount">&pound;200.00</span></span>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-cart">
                                                            <p class="product woocommerce add_to_cart_inline " style="border:4px solid #ccc; padding: 12px;"><span class="special-price"><span class="amount">&pound;195.00</span></span><span class="old-price"><span class="amount">&pound;200.00</span></span> <a href="index-63.htm" tppabs="http://demo.roadthemes.com/maroko/product/auctor-gravida-enim/" rel="nofollow" data-product_id="1156" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_variable">Select options</a>
                                                            </p>
                                                        </div>
                                                        <div class="add-to-links">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-1156">
                                                                <div class="yith-wcwl-add-button show" style="display:block"> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/?add_to_wishlist=1156  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/?add_to_wishlist=1156%27" tppabs="http://demo.roadthemes.com/maroko/?add_to_wishlist=1156" rel="nofollow" data-product-id="1156" data-product-type="variable" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"> <span class="feedback">Product added!</span> <a href="-wishlist-action=view.htm" tppabs="http://demo.roadthemes.com/maroko/wishlist/?wishlist-action=view"> Browse Wishlist </a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"> <span class="feedback">The product is already in the wishlist!</span> <a href="-wishlist-action=view.htm" tppabs="http://demo.roadthemes.com/maroko/wishlist/?wishlist-action=view"> Browse Wishlist </a>
                                                                </div>
                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                            </div>
                                                            <div class="clear"></div>
                                                            <div class="woocommerce product compare-button"><a href="index.htm" tppabs="http://demo.roadthemes.com/maroko/?action=yith-woocompare-add-product&id=1156&_wpnonce=c83a2e58df" class="compare button" data-product_id="1156">Compare</a>
                                                            </div>
                                                            <div class="quickviewbtn"><a class="detail-link quickview" data-quick-id="1156" href="index-63.htm" tppabs="http://demo.roadthemes.com/maroko/product/auctor-gravida-enim/" title="Auctor gravida enim">Quick View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <span class="onsale"><span class="sale-bg"></span><span class="sale-text">Sale</span></span>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="gridview">
                                                <h2 class="product-name"> <a href="index-63.htm" tppabs="http://demo.roadthemes.com/maroko/product/auctor-gravida-enim/">Auctor gravida enim</a></h2>
                                                <div class="ratings">
                                                    <div class="star-rating" title="Rated 4.00 out of 5"><span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listview">
                                                <h2 class="product-name"> <a href="index-63.htm" tppabs="http://demo.roadthemes.com/maroko/product/auctor-gravida-enim/">Auctor gravida enim</a></h2>
                                                <div class="price-rate">
                                                    <div class="price-box"><span class="special-price"><span class="amount">&pound;195.00</span></span><span class="old-price"><span class="amount">&pound;200.00</span></span>
                                                    </div>
                                                    <div class="ratings">
                                                        <div class="star-rating" title="Rated 4.00 out of 5"><span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-cart">
                                                            <p class="product woocommerce add_to_cart_inline " style="border:4px solid #ccc; padding: 12px;"><span class="special-price"><span class="amount">&pound;195.00</span></span><span class="old-price"><span class="amount">&pound;200.00</span></span> <a href="index-63.htm" tppabs="http://demo.roadthemes.com/maroko/product/auctor-gravida-enim/" rel="nofollow" data-product_id="1156" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_variable">Select options</a>
                                                            </p>
                                                        </div>
                                                        <div class="add-to-links">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-1156">
                                                                <div class="yith-wcwl-add-button show" style="display:block"> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/?add_to_wishlist=1156  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/?add_to_wishlist=1156%27" tppabs="http://demo.roadthemes.com/maroko/?add_to_wishlist=1156" rel="nofollow" data-product-id="1156" data-product-type="variable" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"> <span class="feedback">Product added!</span> <a href="-wishlist-action=view.htm" tppabs="http://demo.roadthemes.com/maroko/wishlist/?wishlist-action=view"> Browse Wishlist </a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"> <span class="feedback">The product is already in the wishlist!</span> <a href="-wishlist-action=view.htm" tppabs="http://demo.roadthemes.com/maroko/wishlist/?wishlist-action=view"> Browse Wishlist </a>
                                                                </div>
                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                            </div>
                                                            <div class="clear"></div>
                                                            <div class="woocommerce product compare-button"><a href="index.htm" tppabs="http://demo.roadthemes.com/maroko/?action=yith-woocompare-add-product&id=1156&_wpnonce=c83a2e58df" class="compare button" data-product_id="1156">Compare</a>
                                                            </div>
                                                            <div class="quickviewbtn"><a class="detail-link quickview" data-quick-id="1156" href="index-63.htm" tppabs="http://demo.roadthemes.com/maroko/product/auctor-gravida-enim/" title="Auctor gravida enim">Quick View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class=" item-col col-xs-12 col-sm-3 post-1159 product type-product status-publish has-post-thumbnail product_cat-backpacks product_cat-bags product_cat-bucket-bags product_cat-clothings product_cat-clutches product_cat-crossbody-bags product_cat-jackets-coats product_cat-jeans product_cat-men product_cat-pumps product_cat-sandals product_cat-shoes product_cat-shorts product_cat-sneakers product_cat-t-shirts product_cat-wedges product_tag-camera-2 product_tag-electronic sale featured shipping-taxable purchasable product-type-simple product-cat-backpacks product-cat-bags product-cat-bucket-bags product-cat-clothings product-cat-clutches product-cat-crossbody-bags product-cat-jackets-coats product-cat-jeans product-cat-men product-cat-pumps product-cat-sandals product-cat-shoes product-cat-shorts product-cat-sneakers product-cat-t-shirts product-cat-wedges product-tag-camera-2 product-tag-electronic instock">
                                    <div class="product-wrapper">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="index-62.htm" tppabs="http://demo.roadthemes.com/maroko/product/habitasse-dictumst/" title="Habitasse dictumst"> <img width="480" height="635" src="<?=base_url()?>assets/img/anh/111-480x635.jpg" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2014/10/111-480x635.jpg" class="primary_image wp-post-image" alt="" /><img width="480" height="635" src="<?=base_url()?>assets/img/anh/12-480x635.jpg" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2014/10/12-480x635.jpg" class="secondary_image" alt="" /> </a>
                                                <div class="price-box"><span class="special-price"><span class="amount">&pound;65.00</span></span><span class="old-price"><span class="amount">&pound;68.00</span></span>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-cart">
                                                            <p class="product woocommerce add_to_cart_inline " style="border:4px solid #ccc; padding: 12px;"><span class="special-price"><span class="amount">&pound;65.00</span></span><span class="old-price"><span class="amount">&pound;68.00</span></span> <a href="-add-to-cart=1159.htm" tppabs="http://demo.roadthemes.com/maroko/?add-to-cart=1159" rel="nofollow" data-product_id="1159" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_simple">Add to cart</a>
                                                            </p>
                                                        </div>
                                                        <div class="add-to-links">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-1159">
                                                                <div class="yith-wcwl-add-button show" style="display:block"> <a href="-add_to_wishlist=1159.htm" tppabs="http://demo.roadthemes.com/maroko/?add_to_wishlist=1159" rel="nofollow" data-product-id="1159" data-product-type="simple" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"> <span class="feedback">Product added!</span> <a href="-wishlist-action=view.htm" tppabs="http://demo.roadthemes.com/maroko/wishlist/?wishlist-action=view"> Browse Wishlist </a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"> <span class="feedback">The product is already in the wishlist!</span> <a href="-wishlist-action=view.htm" tppabs="http://demo.roadthemes.com/maroko/wishlist/?wishlist-action=view"> Browse Wishlist </a>
                                                                </div>
                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                            </div>
                                                            <div class="clear"></div>
                                                            <div class="woocommerce product compare-button"><a href="index.htm" tppabs="http://demo.roadthemes.com/maroko/?action=yith-woocompare-add-product&id=1159&_wpnonce=c83a2e58df" class="compare button" data-product_id="1159">Compare</a>
                                                            </div>
                                                            <div class="quickviewbtn"><a class="detail-link quickview" data-quick-id="1159" href="index-62.htm" tppabs="http://demo.roadthemes.com/maroko/product/habitasse-dictumst/" title="Habitasse dictumst">Quick View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <span class="onsale"><span class="sale-bg"></span><span class="sale-text">Sale</span></span>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="gridview">
                                                <h2 class="product-name"> <a href="index-62.htm" tppabs="http://demo.roadthemes.com/maroko/product/habitasse-dictumst/">Habitasse dictumst</a></h2>
                                                <div class="ratings">
                                                    <div class="star-rating" title="Rated 4.00 out of 5"><span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listview">
                                                <h2 class="product-name"> <a href="index-62.htm" tppabs="http://demo.roadthemes.com/maroko/product/habitasse-dictumst/">Habitasse dictumst</a></h2>
                                                <div class="price-rate">
                                                    <div class="price-box"><span class="special-price"><span class="amount">&pound;65.00</span></span><span class="old-price"><span class="amount">&pound;68.00</span></span>
                                                    </div>
                                                    <div class="ratings">
                                                        <div class="star-rating" title="Rated 4.00 out of 5"><span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-cart">
                                                            <p class="product woocommerce add_to_cart_inline " style="border:4px solid #ccc; padding: 12px;"><span class="special-price"><span class="amount">&pound;65.00</span></span><span class="old-price"><span class="amount">&pound;68.00</span></span> <a href="-add-to-cart=1159.htm" tppabs="http://demo.roadthemes.com/maroko/?add-to-cart=1159" rel="nofollow" data-product_id="1159" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_simple">Add to cart</a>
                                                            </p>
                                                        </div>
                                                        <div class="add-to-links">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-1159">
                                                                <div class="yith-wcwl-add-button show" style="display:block"> <a href="-add_to_wishlist=1159.htm" tppabs="http://demo.roadthemes.com/maroko/?add_to_wishlist=1159" rel="nofollow" data-product-id="1159" data-product-type="simple" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"> <span class="feedback">Product added!</span> <a href="-wishlist-action=view.htm" tppabs="http://demo.roadthemes.com/maroko/wishlist/?wishlist-action=view"> Browse Wishlist </a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"> <span class="feedback">The product is already in the wishlist!</span> <a href="-wishlist-action=view.htm" tppabs="http://demo.roadthemes.com/maroko/wishlist/?wishlist-action=view"> Browse Wishlist </a>
                                                                </div>
                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                            </div>
                                                            <div class="clear"></div>
                                                            <div class="woocommerce product compare-button"><a href="index.htm" tppabs="http://demo.roadthemes.com/maroko/?action=yith-woocompare-add-product&id=1159&_wpnonce=c83a2e58df" class="compare button" data-product_id="1159">Compare</a>
                                                            </div>
                                                            <div class="quickviewbtn"><a class="detail-link quickview" data-quick-id="1159" href="index-62.htm" tppabs="http://demo.roadthemes.com/maroko/product/habitasse-dictumst/" title="Habitasse dictumst">Quick View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-sm-6 col-sms-6">
                    <div class="product-shortcode">
                        <h3 class="widget-title">Best Seller</h3>
                        <div class="woocommerce columns-4">
                            <div class="shop-products row grid-view">
                                <div class="first  item-col col-xs-12 col-sm-3 post-1158 product type-product status-publish has-post-thumbnail product_cat-backpacks product_cat-bags product_cat-bucket-bags product_cat-clothings product_cat-clutches product_cat-crossbody-bags product_cat-jackets-coats product_cat-jeans product_cat-pumps product_cat-sandals product_cat-shoes product_cat-shorts product_cat-sneakers product_cat-t-shirts product_cat-wedges product_tag-electronic product_tag-laptop sale shipping-taxable purchasable product-type-simple product-cat-backpacks product-cat-bags product-cat-bucket-bags product-cat-clothings product-cat-clutches product-cat-crossbody-bags product-cat-jackets-coats product-cat-jeans product-cat-pumps product-cat-sandals product-cat-shoes product-cat-shorts product-cat-sneakers product-cat-t-shirts product-cat-wedges product-tag-electronic product-tag-laptop instock">
                                    <div class="product-wrapper">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product/tincidunt-malesuada/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product/tincidunt-malesuada/%27" tppabs="http://demo.roadthemes.com/maroko/product/tincidunt-malesuada/" title="Tincidunt malesuada"> <img width="480" height="635" src="<?=base_url()?>assets/img/anh/10-480x635.jpg" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2014/10/10-480x635.jpg" class="primary_image wp-post-image" alt="" /><img width="480" height="635" src="<?=base_url()?>assets/img/anh/2-480x635.jpg" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2014/10/2-480x635.jpg" class="secondary_image" alt="" /> </a>
                                                <div class="price-box"><span class="special-price"><span class="amount">&pound;50.00</span></span><span class="old-price"><span class="amount">&pound;80.00</span></span>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-cart">
                                                            <p class="product woocommerce add_to_cart_inline " style="border:4px solid #ccc; padding: 12px;"><span class="special-price"><span class="amount">&pound;50.00</span></span><span class="old-price"><span class="amount">&pound;80.00</span></span> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/?add-to-cart=1158  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/?add-to-cart=1158%27" tppabs="http://demo.roadthemes.com/maroko/?add-to-cart=1158" rel="nofollow" data-product_id="1158" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_simple">Add to cart</a>
                                                            </p>
                                                        </div>
                                                        <div class="add-to-links">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-1158">
                                                                <div class="yith-wcwl-add-button show" style="display:block"> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/?add_to_wishlist=1158  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/?add_to_wishlist=1158%27" tppabs="http://demo.roadthemes.com/maroko/?add_to_wishlist=1158" rel="nofollow" data-product-id="1158" data-product-type="simple" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"> <span class="feedback">Product added!</span> <a href="-wishlist-action=view.htm" tppabs="http://demo.roadthemes.com/maroko/wishlist/?wishlist-action=view"> Browse Wishlist </a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"> <span class="feedback">The product is already in the wishlist!</span> <a href="-wishlist-action=view.htm" tppabs="http://demo.roadthemes.com/maroko/wishlist/?wishlist-action=view"> Browse Wishlist </a>
                                                                </div>
                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                            </div>
                                                            <div class="clear"></div>
                                                            <div class="woocommerce product compare-button"><a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/?action=yith-woocompare-add-product&id=1158&_wpnonce=c83a2e58df  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/?action=yith-woocompare-add-product&id=1158&_wpnonce=c83a2e58df%27" tppabs="http://demo.roadthemes.com/maroko/?action=yith-woocompare-add-product&id=1158&_wpnonce=c83a2e58df" class="compare button" data-product_id="1158">Compare</a>
                                                            </div>
                                                            <div class="quickviewbtn"><a class="detail-link quickview" data-quick-id="1158" href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product/tincidunt-malesuada/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product/tincidunt-malesuada/%27" tppabs="http://demo.roadthemes.com/maroko/product/tincidunt-malesuada/" title="Tincidunt malesuada">Quick View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <span class="onsale"><span class="sale-bg"></span><span class="sale-text">Sale</span></span>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="gridview">
                                                <h2 class="product-name"> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product/tincidunt-malesuada/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product/tincidunt-malesuada/%27" tppabs="http://demo.roadthemes.com/maroko/product/tincidunt-malesuada/">Tincidunt malesuada</a></h2>
                                                <div class="ratings">
                                                    <div class="star-rating" title="Rated 5.00 out of 5"><span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listview">
                                                <h2 class="product-name"> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product/tincidunt-malesuada/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product/tincidunt-malesuada/%27" tppabs="http://demo.roadthemes.com/maroko/product/tincidunt-malesuada/">Tincidunt malesuada</a></h2>
                                                <div class="price-rate">
                                                    <div class="price-box"><span class="special-price"><span class="amount">&pound;50.00</span></span><span class="old-price"><span class="amount">&pound;80.00</span></span>
                                                    </div>
                                                    <div class="ratings">
                                                        <div class="star-rating" title="Rated 5.00 out of 5"><span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-cart">
                                                            <p class="product woocommerce add_to_cart_inline " style="border:4px solid #ccc; padding: 12px;"><span class="special-price"><span class="amount">&pound;50.00</span></span><span class="old-price"><span class="amount">&pound;80.00</span></span> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/?add-to-cart=1158  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/?add-to-cart=1158%27" tppabs="http://demo.roadthemes.com/maroko/?add-to-cart=1158" rel="nofollow" data-product_id="1158" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_simple">Add to cart</a>
                                                            </p>
                                                        </div>
                                                        <div class="add-to-links">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-1158">
                                                                <div class="yith-wcwl-add-button show" style="display:block"> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/?add_to_wishlist=1158  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/?add_to_wishlist=1158%27" tppabs="http://demo.roadthemes.com/maroko/?add_to_wishlist=1158" rel="nofollow" data-product-id="1158" data-product-type="simple" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"> <span class="feedback">Product added!</span> <a href="-wishlist-action=view.htm" tppabs="http://demo.roadthemes.com/maroko/wishlist/?wishlist-action=view"> Browse Wishlist </a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"> <span class="feedback">The product is already in the wishlist!</span> <a href="-wishlist-action=view.htm" tppabs="http://demo.roadthemes.com/maroko/wishlist/?wishlist-action=view"> Browse Wishlist </a>
                                                                </div>
                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                            </div>
                                                            <div class="clear"></div>
                                                            <div class="woocommerce product compare-button"><a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/?action=yith-woocompare-add-product&id=1158&_wpnonce=c83a2e58df  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/?action=yith-woocompare-add-product&id=1158&_wpnonce=c83a2e58df%27" tppabs="http://demo.roadthemes.com/maroko/?action=yith-woocompare-add-product&id=1158&_wpnonce=c83a2e58df" class="compare button" data-product_id="1158">Compare</a>
                                                            </div>
                                                            <div class="quickviewbtn"><a class="detail-link quickview" data-quick-id="1158" href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product/tincidunt-malesuada/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product/tincidunt-malesuada/%27" tppabs="http://demo.roadthemes.com/maroko/product/tincidunt-malesuada/" title="Tincidunt malesuada">Quick View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class=" item-col col-xs-12 col-sm-3 post-615 product type-product status-publish has-post-thumbnail product_cat-accessories product_cat-backpacks-2 product_cat-bags-2 product_cat-baseball-caps product_cat-bucket-bags-2 product_cat-bucket-bags-3 product_cat-clothings-2 product_cat-clutches-2 product_cat-gloves-mittens product_cat-jackets-coats-2 product_cat-jeans-2 product_cat-pumps-2 product_cat-sandals-2 product_cat-shoes product_cat-shoes-2 product_cat-shorts-2 product_cat-skullies-beanies product_cat-skullies-beanies-2 product_cat-sneakers-2 product_cat-sunglasses product_cat-t-shirts-2 product_cat-wedges-2 product_cat-women product_tag-electronic product_tag-laptop featured shipping-taxable purchasable product-type-simple product-cat-accessories product-cat-backpacks-2 product-cat-bags-2 product-cat-baseball-caps product-cat-bucket-bags-2 product-cat-bucket-bags-3 product-cat-clothings-2 product-cat-clutches-2 product-cat-gloves-mittens product-cat-jackets-coats-2 product-cat-jeans-2 product-cat-pumps-2 product-cat-sandals-2 product-cat-shoes product-cat-shoes-2 product-cat-shorts-2 product-cat-skullies-beanies product-cat-skullies-beanies-2 product-cat-sneakers-2 product-cat-sunglasses product-cat-t-shirts-2 product-cat-wedges-2 product-cat-women product-tag-electronic product-tag-laptop instock">
                                    <div class="product-wrapper">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="index-58.htm" tppabs="http://demo.roadthemes.com/maroko/product/condimentum-posuere/" title="Condimentum posuere"> <img width="480" height="635" src="<?=base_url()?>assets/img/anh/19-480x635.jpg" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2014/10/19-480x635.jpg" class="primary_image wp-post-image" alt="" /><img width="480" height="635" src="<?=base_url()?>assets/img/anh/20-480x635.jpg" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2014/10/20-480x635.jpg" class="secondary_image" alt="" /> </a>
                                                <div class="price-box"><span class="special-price"><span class="amount">&pound;115.00</span></span>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-cart">
                                                            <p class="product woocommerce add_to_cart_inline " style="border:4px solid #ccc; padding: 12px;"><span class="special-price"><span class="amount">&pound;115.00</span></span> <a href="-add-to-cart=615.htm" tppabs="http://demo.roadthemes.com/maroko/?add-to-cart=615" rel="nofollow" data-product_id="615" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_simple">Add to cart</a>
                                                            </p>
                                                        </div>
                                                        <div class="add-to-links">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-615">
                                                                <div class="yith-wcwl-add-button show" style="display:block"> <a href="-add_to_wishlist=615.htm" tppabs="http://demo.roadthemes.com/maroko/?add_to_wishlist=615" rel="nofollow" data-product-id="615" data-product-type="simple" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"> <span class="feedback">Product added!</span> <a href="-wishlist-action=view.htm" tppabs="http://demo.roadthemes.com/maroko/wishlist/?wishlist-action=view"> Browse Wishlist </a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"> <span class="feedback">The product is already in the wishlist!</span> <a href="-wishlist-action=view.htm" tppabs="http://demo.roadthemes.com/maroko/wishlist/?wishlist-action=view"> Browse Wishlist </a>
                                                                </div>
                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                            </div>
                                                            <div class="clear"></div>
                                                            <div class="woocommerce product compare-button"><a href="index.htm" tppabs="http://demo.roadthemes.com/maroko/?action=yith-woocompare-add-product&id=615&_wpnonce=c83a2e58df" class="compare button" data-product_id="615">Compare</a>
                                                            </div>
                                                            <div class="quickviewbtn"><a class="detail-link quickview" data-quick-id="615" href="index-58.htm" tppabs="http://demo.roadthemes.com/maroko/product/condimentum-posuere/" title="Condimentum posuere">Quick View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="gridview">
                                                <h2 class="product-name"> <a href="index-58.htm" tppabs="http://demo.roadthemes.com/maroko/product/condimentum-posuere/">Condimentum posuere</a></h2>
                                                <div class="ratings">
                                                    <div class="star-rating" title="Rated 5.00 out of 5"><span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listview">
                                                <h2 class="product-name"> <a href="index-58.htm" tppabs="http://demo.roadthemes.com/maroko/product/condimentum-posuere/">Condimentum posuere</a></h2>
                                                <div class="price-rate">
                                                    <div class="price-box"><span class="special-price"><span class="amount">&pound;115.00</span></span>
                                                    </div>
                                                    <div class="ratings">
                                                        <div class="star-rating" title="Rated 5.00 out of 5"><span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-cart">
                                                            <p class="product woocommerce add_to_cart_inline " style="border:4px solid #ccc; padding: 12px;"><span class="special-price"><span class="amount">&pound;115.00</span></span> <a href="-add-to-cart=615.htm" tppabs="http://demo.roadthemes.com/maroko/?add-to-cart=615" rel="nofollow" data-product_id="615" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_simple">Add to cart</a>
                                                            </p>
                                                        </div>
                                                        <div class="add-to-links">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-615">
                                                                <div class="yith-wcwl-add-button show" style="display:block"> <a href="-add_to_wishlist=615.htm" tppabs="http://demo.roadthemes.com/maroko/?add_to_wishlist=615" rel="nofollow" data-product-id="615" data-product-type="simple" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"> <span class="feedback">Product added!</span> <a href="-wishlist-action=view.htm" tppabs="http://demo.roadthemes.com/maroko/wishlist/?wishlist-action=view"> Browse Wishlist </a>
                                                                </div>
                                                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"> <span class="feedback">The product is already in the wishlist!</span> <a href="-wishlist-action=view.htm" tppabs="http://demo.roadthemes.com/maroko/wishlist/?wishlist-action=view"> Browse Wishlist </a>
                                                                </div>
                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                            </div>
                                                            <div class="clear"></div>
                                                            <div class="woocommerce product compare-button"><a href="index.htm" tppabs="http://demo.roadthemes.com/maroko/?action=yith-woocompare-add-product&id=615&_wpnonce=c83a2e58df" class="compare button" data-product_id="615">Compare</a>
                                                            </div>
                                                            <div class="quickviewbtn"><a class="detail-link quickview" data-quick-id="615" href="index-58.htm" tppabs="http://demo.roadthemes.com/maroko/product/condimentum-posuere/" title="Condimentum posuere">Quick View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-sm-6 col-sms-6">
                    <div class="widget-product-tags">
                        <h3 class="widget-title">Popular Tags</h3>
                        <div class="widget woocommerce widget_product_tag_cloud">
                            <h2 class="widgettitle">Product Tags</h2>
                            <div class="tagcloud"><a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product-tag/blouse/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product-tag/blouse/%27" tppabs="http://demo.roadthemes.com/maroko/product-tag/blouse/" class='tag-link-24 tag-link-position-1' title='4 topics' style='font-size: 17.3333333333pt;'>blouse</a> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product-tag/camera-2/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product-tag/camera-2/%27" tppabs="http://demo.roadthemes.com/maroko/product-tag/camera-2/" class='tag-link-25 tag-link-position-2' title='1 topic' style='font-size: 8pt;'>camera</a> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product-tag/electronic/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product-tag/electronic/%27" tppabs="http://demo.roadthemes.com/maroko/product-tag/electronic/" class='tag-link-27 tag-link-position-3' title='7 topics' style='font-size: 22pt;'>electronic</a> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product-tag/fashion/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product-tag/fashion/%27" tppabs="http://demo.roadthemes.com/maroko/product-tag/fashion/" class='tag-link-28 tag-link-position-4' title='5 topics' style='font-size: 19.2pt;'>fashion</a> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product-tag/handbag/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product-tag/handbag/%27" tppabs="http://demo.roadthemes.com/maroko/product-tag/handbag/" class='tag-link-30 tag-link-position-5' title='1 topic' style='font-size: 8pt;'>handbag</a> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product-tag/laptop/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product-tag/laptop/%27" tppabs="http://demo.roadthemes.com/maroko/product-tag/laptop/" class='tag-link-34 tag-link-position-6' title='3 topics' style='font-size: 15pt;'>laptop</a> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product-tag/maroko/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product-tag/maroko/%27" tppabs="http://demo.roadthemes.com/maroko/product-tag/maroko/" class='tag-link-87 tag-link-position-7' title='1 topic' style='font-size: 8pt;'>maroko</a> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product-tag/phone/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product-tag/phone/%27" tppabs="http://demo.roadthemes.com/maroko/product-tag/phone/" class='tag-link-36 tag-link-position-8' title='2 topics' style='font-size: 12.2pt;'>phone</a> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product-tag/sale/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product-tag/sale/%27" tppabs="http://demo.roadthemes.com/maroko/product-tag/sale/" class='tag-link-86 tag-link-position-9' title='1 topic' style='font-size: 8pt;'>sale</a> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product-tag/sex/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product-tag/sex/%27" tppabs="http://demo.roadthemes.com/maroko/product-tag/sex/" class='tag-link-82 tag-link-position-10' title='1 topic' style='font-size: 8pt;'>sex</a> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product-tag/shoes-2/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product-tag/shoes-2/%27" tppabs="http://demo.roadthemes.com/maroko/product-tag/shoes-2/" class='tag-link-39 tag-link-position-11' title='1 topic' style='font-size: 8pt;'>shoes</a> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product-tag/shoes-for-men/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product-tag/shoes-for-men/%27" tppabs="http://demo.roadthemes.com/maroko/product-tag/shoes-for-men/" class='tag-link-85 tag-link-position-12' title='1 topic' style='font-size: 8pt;'>shoes for men</a> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product-tag/t-shirt/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product-tag/t-shirt/%27" tppabs="http://demo.roadthemes.com/maroko/product-tag/t-shirt/" class='tag-link-84 tag-link-position-13' title='1 topic' style='font-size: 8pt;'>t-shirt</a> <a href="javascript:if(confirm(%27http://demo.roadthemes.com/maroko/product-tag/tablet/  \n\nThis file was not retrieved by Teleport Ultra, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.roadthemes.com/maroko/product-tag/tablet/%27" tppabs="http://demo.roadthemes.com/maroko/product-tag/tablet/" class='tag-link-41 tag-link-position-14' title='1 topic' style='font-size: 8pt;'>tablet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-sm-6 col-sms-6">
                    <div class="widget-latest-tweets">
                        <h3 class="widget-title">Latest Tweets</h3>
                        <div class='rotatingtweets wp_debug rotatingtweets_format_0' id='rotatingtweets_4000_scrollUp_1000_5913ff6528996' data-cycle-auto-height="calc" data-cycle-fx="scrollUp" data-cycle-pause-on-hover="true" data-cycle-timeout="4000" data-cycle-speed="1000" data-cycle-easing="swing" data-cycle-slides="div.rotatingtweet">
                            <div class='rotatingtweet'>
                                <p class='rtw_main'>Our best WordPress theme for your online store is here <a href="javascript:if(confirm(%27https://t.co/BYA8Bn8A6f  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://t.co/BYA8Bn8A6f%27" tppabs="https://t.co/BYA8Bn8A6f" title='https://themeforest.net/item/expert-clearn-ecommerce-wordpress-theme/17100286' class='rtw_url_link'>themeforest.net/item/expert-c&hellip;</a> <a href="javascript:if(confirm(%27https://t.co/qtVhWOH5PU  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://t.co/qtVhWOH5PU%27" tppabs="https://t.co/qtVhWOH5PU" title='https://twitter.com/RoadThemes/status/779246718000869380/photo/1' class='rtw_media_link'>pic.twitter.com/qtVhWOH5PU</a>
                                </p>
                                <p class='rtw_meta'><a href="javascript:if(confirm(%27https://twitter.com/twitterapi/status/779246718000869380  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/twitterapi/status/779246718000869380%27" tppabs="https://twitter.com/twitterapi/status/779246718000869380">About 8 months ago</a> from <a href="javascript:if(confirm(%27https://twitter.com/intent/user?user_id=2985432625  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/intent/user?user_id=2985432625%27" tppabs="https://twitter.com/intent/user?user_id=2985432625" title='Kevin Sobo'>Kevin Sobo's Twitter</a> via <a href="javascript:if(confirm(%27http://twitter.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://twitter.com/%27" tppabs="http://twitter.com/" rel="nofollow">Twitter Web Client</a>
                                </p>
                            </div>
                            <div class='rotatingtweet' style='display:none'>
                                <p class='rtw_main'><a href="javascript:if(confirm(%27https://twitter.com/intent/user?user_id=99012703  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/intent/user?user_id=99012703%27" tppabs="https://twitter.com/intent/user?user_id=99012703" title='oluwasoji sanyaolu' lang='en'>@soujisama</a> Hi, It will available soon, We're moving it to another account.</p>
                                <p class='rtw_meta'><a href="javascript:if(confirm(%27https://twitter.com/twitterapi/status/773369129407438849  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/twitterapi/status/773369129407438849%27" tppabs="https://twitter.com/twitterapi/status/773369129407438849">About 9 months ago</a> from <a href="javascript:if(confirm(%27https://twitter.com/intent/user?user_id=2985432625  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/intent/user?user_id=2985432625%27" tppabs="https://twitter.com/intent/user?user_id=2985432625" title='Kevin Sobo'>Kevin Sobo's Twitter</a> via <a href="javascript:if(confirm(%27http://twitter.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://twitter.com/%27" tppabs="http://twitter.com/" rel="nofollow">Twitter Web Client</a>
                                </p>
                            </div>
                            <div class='rotatingtweet' style='display:none'>
                                <p class='rtw_main'>Furniture theme for your online store here ttp://goo.gl/2PD2BC <a href="javascript:if(confirm(%27https://t.co/ypsvLw1Jlb  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://t.co/ypsvLw1Jlb%27" tppabs="https://t.co/ypsvLw1Jlb" title='https://twitter.com/RoadThemes/status/773368524735524864/photo/1' class='rtw_media_link'>pic.twitter.com/ypsvLw1Jlb</a>
                                </p>
                                <p class='rtw_meta'><a href="javascript:if(confirm(%27https://twitter.com/twitterapi/status/773368524735524864  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/twitterapi/status/773368524735524864%27" tppabs="https://twitter.com/twitterapi/status/773368524735524864">About 9 months ago</a> from <a href="javascript:if(confirm(%27https://twitter.com/intent/user?user_id=2985432625  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/intent/user?user_id=2985432625%27" tppabs="https://twitter.com/intent/user?user_id=2985432625" title='Kevin Sobo'>Kevin Sobo's Twitter</a> via <a href="javascript:if(confirm(%27http://twitter.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://twitter.com/%27" tppabs="http://twitter.com/" rel="nofollow">Twitter Web Client</a>
                                </p>
                            </div>
                            <div class='rotatingtweet' style='display:none'>
                                <p class='rtw_main'>Building a new fashion accessories online store? Check out our new theme <a href="javascript:if(confirm(%27https://t.co/c5bhy9VNaj  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://t.co/c5bhy9VNaj%27" tppabs="https://t.co/c5bhy9VNaj" title='https://goo.gl/7sfFxz' class='rtw_url_link'>goo.gl/7sfFxz</a> <a href="javascript:if(confirm(%27https://t.co/w4iVfi4guR  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://t.co/w4iVfi4guR%27" tppabs="https://t.co/w4iVfi4guR" title='https://twitter.com/RoadThemes/status/761734170062184449/photo/1' class='rtw_media_link'>pic.twitter.com/w4iVfi4guR</a>
                                </p>
                                <p class='rtw_meta'><a href="javascript:if(confirm(%27https://twitter.com/twitterapi/status/761734170062184449  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/twitterapi/status/761734170062184449%27" tppabs="https://twitter.com/twitterapi/status/761734170062184449">About 10 months ago</a> from <a href="javascript:if(confirm(%27https://twitter.com/intent/user?user_id=2985432625  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/intent/user?user_id=2985432625%27" tppabs="https://twitter.com/intent/user?user_id=2985432625" title='Kevin Sobo'>Kevin Sobo's Twitter</a> via <a href="javascript:if(confirm(%27http://twitter.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://twitter.com/%27" tppabs="http://twitter.com/" rel="nofollow">Twitter Web Client</a>
                                </p>
                            </div>
                            <div class='rotatingtweet' style='display:none'>
                                <p class='rtw_main'>Purchase our new WordPress WooCommerce theme - TimePlus <a href="javascript:if(confirm(%27https://t.co/xFCCRgntPO  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://t.co/xFCCRgntPO%27" tppabs="https://t.co/xFCCRgntPO" title='https://goo.gl/yKV13B' class='rtw_url_link'>goo.gl/yKV13B</a> <a href="javascript:if(confirm(%27https://t.co/poSdAZhvBE  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://t.co/poSdAZhvBE%27" tppabs="https://t.co/poSdAZhvBE" title='https://twitter.com/RoadThemes/status/756714903595999232/photo/1' class='rtw_media_link'>pic.twitter.com/poSdAZhvBE</a>
                                </p>
                                <p class='rtw_meta'><a href="javascript:if(confirm(%27https://twitter.com/twitterapi/status/756714903595999232  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/twitterapi/status/756714903595999232%27" tppabs="https://twitter.com/twitterapi/status/756714903595999232">About 10 months ago</a> from <a href="javascript:if(confirm(%27https://twitter.com/intent/user?user_id=2985432625  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/intent/user?user_id=2985432625%27" tppabs="https://twitter.com/intent/user?user_id=2985432625" title='Kevin Sobo'>Kevin Sobo's Twitter</a> via <a href="javascript:if(confirm(%27http://twitter.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://twitter.com/%27" tppabs="http://twitter.com/" rel="nofollow">Twitter Web Client</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--  -->
    <!-- <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-sm-6 col-sms-6">
                    <div class="widget widget_menu">
                        <h3 class="widget-title">My Account</h3>
                        <div class="menu-my-account-container">
                            <ul id="menu-my-account" class="nav_menu">
                                <li id="menu-item-2960" class="menu-item menu-item-type-custom menu-item-object-custom first menu-item-2960"><a href="#">My Account</a>
                                </li>
                                <li id="menu-item-2961" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2961"><a href="#">Login</a>
                                </li>
                                <li id="menu-item-3081" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3081"><a href="#">My Cart</a>
                                </li>
                                <li id="menu-item-3082" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3082"><a href="#">Wishlist</a>
                                </li>
                                <li id="menu-item-3083" class="menu-item menu-item-type-custom menu-item-object-custom last menu-item-3083"><a href="#">Checkout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-sm-6 col-sms-6">
                    <div class="widget widget_menu">
                        <h3 class="widget-title">Infomation</h3>
                        <div class="menu-infomation-container">
                            <ul id="menu-infomation" class="nav_menu">
                                <li id="menu-item-3234" class="menu-item menu-item-type-post_type menu-item-object-page first menu-item-3234"><a href="index-52.htm" tppabs="http://demo.roadthemes.com/maroko/about-us/">About Us</a>
                                </li>
                                <li id="menu-item-2968" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2968"><a href="#">About Our Shop</a>
                                </li>
                                <li id="menu-item-2969" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2969"><a href="#">Secure Shopping</a>
                                </li>
                                <li id="menu-item-2970" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2970"><a href="#">Privacy Policy</a>
                                </li>
                                <li id="menu-item-2971" class="menu-item menu-item-type-custom menu-item-object-custom last menu-item-2971"><a href="#">Delivery infomation</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-sm-6 col-sms-6">
                    <div class="widget widget_menu">
                        <h3 class="widget-title">Our services</h3>
                        <div class="menu-our-services-container">
                            <ul id="menu-our-services" class="nav_menu">
                                <li id="menu-item-2956" class="menu-item menu-item-type-custom menu-item-object-custom first menu-item-2956"><a href="#">Shipping &#038; Returns</a>
                                </li>
                                <li id="menu-item-2957" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2957"><a href="#">Secure Shopping</a>
                                </li>
                                <li id="menu-item-2958" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2958"><a href="#">International Shipping</a>
                                </li>
                                <li id="menu-item-2959" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2959"><a href="#">Affiliates</a>
                                </li>
                                <li id="menu-item-3085" class="menu-item menu-item-type-custom menu-item-object-custom last menu-item-3085"><a href="#">Advance Search</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-sm-6 col-sms-6">
                    <div class="widget widget_menu">
                        <h3 class="widget-title">Custom Links</h3>
                        <div class="menu-custom-links-container">
                            <ul id="menu-custom-links" class="nav_menu">
                                <li id="menu-item-3532" class="menu-item menu-item-type-post_type menu-item-object-page first menu-item-3532"><a href="index-52.htm" tppabs="http://demo.roadthemes.com/maroko/about-us/">About Us</a>
                                </li>
                                <li id="menu-item-3534" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3534"><a href="index-53.htm" tppabs="http://demo.roadthemes.com/maroko/contact/">Contact</a>
                                </li>
                                <li id="menu-item-3533" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3533"><a href="index-43.htm" tppabs="http://demo.roadthemes.com/maroko/blog/">Blog</a>
                                </li>
                                <li id="menu-item-3535" class="menu-item menu-item-type-post_type menu-item-object-page last menu-item-3535"><a href="index-54.htm" tppabs="http://demo.roadthemes.com/maroko/faqs/">FAQS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="footer-link">
        <div class="container">
            <div class="logo-footer">
                <a href="index.htm" tppabs="http://demo.roadthemes.com/maroko/" title="Maroko" rel="home"><img src="<?=base_url()?>assets/img/anh/logo_footer.png" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2015/06/logo_footer.png" alt="" />
                </a>
            </div>
            <div class="widget bottom_menu">
                <div class="menu-bottom-menu-container">
                    <ul id="menu-bottom-menu" class="nav_menu">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom first menu-item-2976">
                            <a href="<?=base_url()?>">Home</a>
                        </li>
                        <?php foreach ($menu as $val_menu): ?>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2977">
                                <a <?php if($val_menu['name'] == 'Blog') {?> href="<?=base_url()?>tag/<?=$val_menu['slug'].'-'.$val_menu['id']?>" <?php }else{?> href="<?=base_url().$val_menu['slug'].'-'.$val_menu['id']?>"<?php } ?>><?=$val_menu['name']?></a>
                            </li>
                        <?php endforeach ?>
                        <?php foreach ($pages as $val_page): ?>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2977">
                                <a <?=base_url()?>pages/<?=$val_page['slug'].'-'.$val_page['id']?>><?=$val_page['name']?></a>
                            </li>
                        <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="copyright-info"> Copyright © 2015 <a href="javascript:if(confirm(%27http://www.roadthemes.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.roadthemes.com/%27" tppabs="http://www.roadthemes.com/">Roadthemes.</a> All Rights Reserved</div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="bottom-right">
                            <a href="payment1.png" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2015/06/payment1.png"><img src="<?=base_url()?>assets/img/anh/payment1.png" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2015/06/payment1.png" alt="payment1" />
                            </a>
                            <a href="payment2.png" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2015/06/payment2.png"><img src="<?=base_url()?>assets/img/anh/payment2.png" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2015/06/payment2.png" alt="payment2" />
                            </a>
                            <a href="payment3.png" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2015/06/payment3.png"><img src="<?=base_url()?>assets/img/anh/payment3.png" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2015/06/payment3.png" alt="payment3" />
                            </a>
                            <a href="payment4.png" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2015/06/payment4.png"><img src="<?=base_url()?>assets/img/anh/payment4.png" tppabs="http://demo.roadthemes.com/maroko/wp-content/uploads/2015/06/payment4.png" alt="payment4" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="clear: both;"></div>
</div>
</div>
<div id="secondary" class="col-xs-12 col-md-3 sidebar-sub">
    <aside id="nav_menu-2" class="widget widget_nav_menu">
        <h3 class="widget-title"><span>Custom Menu</span></h3>
        <div class="menu-custom-links-container">
            <ul id="menu-custom-links-1" class="menu">
                <?php foreach ($pages as $val_page): ?>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page first menu-item-3532">
                        <a href="<?=base_url()?>pages/<?=$val_page['slug'].'-'.$val_page['id']?>"><?=$val_page['name']?></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </aside>
    <aside id="text-5" class="widget widget_text">
        <h3 class="widget-title"><span>Keep your shopping</span></h3>
        <div class="textwidget">We always provide the latest fashion style and the low price and sale product for your choice. With all clothes, bag, hat and other fashion accessories, make your new today</div>
    </aside>
    <aside id="easy_facebook_page_plugin-2" class="widget widget_easy_facebook_page_plugin">
        <h3 class="widget-title"><span>Find us on Facebook</span></h3>
        <div id="fb-root"></div>
      <!--   <script>
            /*<![CDATA[*/
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=395202813876688";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk')); /*]]>*/
        </script> -->
        <div class="fb-page " data-href="https://www.facebook.com/roadthemes" data-hide-cover=false data-width="250" data-height="" data-show-facepile=true data-show-posts=false data-adapt-container-width=true data-hide-cta=false data-small-header="false"></div>
    </aside>
</div>
<div id="back-top" class="hidden-xs hidden-sm hidden-md"></div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery/slick.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery/trangchu.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery/price_slider.js"></script>
<script type='text/javascript'>
    var woocommerce_price_slider_params = {
        "currency_symbol": "\u00a3",
        "currency_pos": "left",
        "min_price": "",
        "max_price": ""
    };
</script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery/breadcum.js"></script>
<!-- cart -->
<script type="text/javascript" src="<?=base_url()?>assets/cart/cart.js"></script>

<?php echo $scripts_header; ?>
<script type='text/javascript'>
    var wc_single_product_params = {
        "i18n_required_rating_text": "Please select a rating",
        "review_rating_required": "yes"
    };
</script>
</body>
</html>