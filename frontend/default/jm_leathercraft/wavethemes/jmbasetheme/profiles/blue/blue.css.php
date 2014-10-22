<?php
	$mageFilename = "../../../../../../../../app/Mage.php";
	require_once $mageFilename; 
	umask(0);
	Mage::app();
	$baseconfig = Mage::helper("jmbasetheme")->getactiveprofile();
	header("Content-type: text/css; charset: UTF-8");
?>

/* Base settings */
body#bd {
	<?php if (isset($baseconfig["bgimage"]) && ($baseconfig["bgimage"])): ?>
		background-image:url("images/<?php echo $baseconfig["bgimage"]; ?>");
	<?php endif;?>
	background-color: <?php echo $baseconfig["bgolor"] ?>;
}

.cms-index-index #jm-header.sticky-out,
#jm-header.sticky-out,
#jm-header,
.top-page
 {
	background-image:url("images/<?php echo $baseconfig["headerimage"]; ?>");
	background-color: <?php echo $baseconfig["headerolor"] ?>;
}

#jm-bots3, 
#jm-bots4,
#jm-footer {
	background-image:url("images/<?php echo $baseconfig["footerimage"]; ?>");
	background-color: <?php echo $baseconfig["footercolor"] ?>;
}

#jm-mass-bottom1 {
	background-image:url("images/<?php echo $baseconfig["massbottom1image"]; ?>");
	background-color: <?php echo $baseconfig["massbottom1color"] ?>;
}

.btn-toggle.active,
.jm-megamenu .childcontent,
#jm-search .btn-toggle.active {
	<?php if (isset($baseconfig["arrowmenutop"]) && ($baseconfig["arrowmenutop"])): ?>
		background-image:url("images/<?php echo $baseconfig["arrowmenutop"]; ?>");
	<?php endif;?>
}


a,
.inner-toggle .icon-caret-up,
.shop-access li a:active,
.shop-access li a:focus,
.shop-access li a:hover,
.product-name a:active,
.product-name a:focus,
.product-name a:hover,
#jm-mass-top .page-title a:focus,
#jm-mass-top .page-title a:hover,
.pages ol li.current,
.pages ol li a:active,
.pages ol li a:focus,
.pages ol li a:hover,
.quick-setting a:active,
.quick-setting a:focus,
.quick-setting a:hover,
.quick-setting .form-currency a:active,
.quick-setting .form-currency a:focus,
.quick-setting .form-currency a:hover,
.quick-setting a.currency-item.active,
ul#slideshow li a:focus,
ul#slideshow li a:hover,
.static-block3 .right a:focus .text-title,
.static-block3 .right a:hover .text-title,
.static-block3 .right a.button-reading:focus,
.static-block3 .right a.button-reading:hover,
.breadcrumbs a:active,
.breadcrumbs a:focus,
.breadcrumbs a:hover,
.block-verticallist h5 a:active,
.block-verticallist h5 a:focus,
.block-verticallist h5 a:hover,
.block-account li a:hover,
.block-account li a:active,
.block-account li a:focus,
.block-account li.current,
.block-layered-nav dd li:focus,
.block-layered-nav dd li:hover,
.block-layered-nav dd li a:active .price,
.block-layered-nav dd li a:focus .price,
.block-layered-nav dd li a:hover .price,
.block-layered-nav dd li a:active,
.block-layered-nav dd li a:focus,
.block-layered-nav dd li a:hover,
.block-cart .summary a,
.block-cart .subtotal .price,
.block-compare .actions a:active,
.block-compare .actions a:focus,
.block-compare .actions a:hover,
.block-compare .block-content li.item a.ico-remove:active,
.block-compare .block-content li.item a.ico-remove:focus,
.block-compare .block-content li.item a.ico-remove:hover,
.block-compare .block-content .product-name a:active,
.block-compare .block-content .product-name a:focus,
.block-compare .block-content .product-name a:hover,
.block-tags  a:active,
.block-tags  a:focus,
.block-tags  a:hover,
.product-information h5 a:active,
.product-information h5 a:focus,
.product-information h5 a:hover,
.products-list .product-name a:active,
.products-list .product-name a:focus, 
.products-list .product-name a:hover,
.product-shop .ratings a:active,
.product-shop .ratings a:focus,
.product-shop .ratings a:hover,
.block-related  .block-content .product-name:active,
.block-related  .block-content .product-name:focus,
.block-related  .block-content .product-name:hover,
.product-view .box-reviews dt a:focus,
.product-view .box-reviews dt a:hover,
.advanced-search-summary strong,
.page-sitemap .sitemap a:active,
.page-sitemap .sitemap a:focus,
.page-sitemap .sitemap a:hover,
.cart-table a:active,
.cart-table a:focus,
.cart-table a:hover,
.cart .totals td .price,
.cart .totals .checkout-types li a:active,
.cart .totals .checkout-types li a:focus,
.cart .totals .checkout-types li a:hover,
.multiple-checkout .data-table .icoremove:active,
.multiple-checkout .data-table .icoremove:focus,
.multiple-checkout .data-table .icoremove:hover,
.multiple-checkout .data-table .product-name a:active,
.multiple-checkout .data-table .product-name a:focus,
.multiple-checkout .data-table .product-name a:hover,
.my-wishlist .data-table a:active, 
.my-wishlist .data-table a:focus, 
.my-wishlist .data-table a:hover,
#jm-bots1 .list-categories li a:active, 
#jm-bots1 .list-categories li a:focus,
#jm-bots1 .list-categories li a:hover,
#jm-bots1 .view-all:active,
#jm-bots1 .view-all:focus,
#jm-bots1 .view-all:hover,
#jm-bots3 li a:active,
#jm-bots3 li a:focus,
#jm-bots3 li a:hover,
#jm-bots4 li a:active,
#jm-bots4 li a:focus,
#jm-bots4 li a:hover,
#jm-footer a:active,
#jm-footer a:focus,
#jm-footer a:hover,

.block-cart .product-details .product-name a:active,
.block-cart .product-details .product-name a:focus,
.block-cart .product-details .product-name a:hover,
.block-cart .product-details .edit:active,
.block-cart .product-details .edit:focus,
.block-cart .product-details .edit:hover,
.block-cart .product-details .remove:active,
.block-cart .product-details .remove:focus,
.block-cart .product-details .remove:hover,

.jmzin-box:hover a,
div.jmzin-section a:hover,
div.jmzin-section a:active,
div.jmzin-section a:focus,

.jm-megamenu ul.level0 li.mega  a.mega:focus span.menu-title,
.jm-megamenu ul.level0 li.mega  a.mega:hover span.menu-title,
.jm-megamenu ul.level0 li.mega.active a.mega span.menu-title,
.jm-megamenu ul.level0 li.mega.active ul.level1 li.mega a.active span.menu-title,
.jm-megamenu ul.level0 li.mega.active ul.level1 li.mega a.mega:hover span.menu-title,
.jm-megamenu ul.level2 li.mega.active a.mega,
.jm-megamenu ul.level2 li.mega a.mega:active,
.jm-megamenu ul.level2 li.mega a.mega:focus,
.jm-megamenu ul.level2 li.mega a.mega:hover{
	color: <?php echo $baseconfig["color"] ?>
}

.mega-links li.active a,
.jm-megamenu .group-title a span,

#off-canvas-nav .megamenu .group-title a:active,
#off-canvas-nav .megamenu .group-title a:focus,
#off-canvas-nav .megamenu .group-title a:hover,
#off-canvas-nav .megamenu.level2 li.active a,
#off-canvas-nav .megamenu.level2 li a:active,
#off-canvas-nav .megamenu.level2 li a:focus,
#off-canvas-nav .megamenu.level2 li a:hover {
	color: <?php echo $baseconfig["color"] ?>!important
}

button.button, button,
.pages ol li.next a:active,
.pages ol li.next a:focus,
.pages ol li.next a:hover,
.pages ol li.previous a:active,
.pages ol li.previous a:focus,
.pages ol li.previous a:hover,
#jm-mycart .inner-toggle button:hover,
.block-subscribe .actions button,
.products-list button.button,
.products-list button.button:focus,
.products-list button.button:hover,
.product-collateral h3:focus,
.product-collateral h3:hover,
.product-collateral h3.active,
.ja-tab-navigator li a:active,
.ja-tab-navigator li a:focus,
.ja-tab-navigator li a:hover,
.ja-tab-navigator li.active a:hover,
.cart .totals button.button:focus,
.cart .totals button.button:hover,
.checkout-progress li.active,
#button-btt,
.col-right .jm-tab-content,
.col-right .default .jm-tabs-title-top ul.jm-tabs-title li.active h3   .tab, 
.col-right .default .jm-tabs-title-top ul.jm-tabs-title li.firstactive h3 .tab, 
.col-right .default .jm-tabs-title-top ul.jm-tabs-title li.lastactive h3 .tab,
.col-right .default .jm-tabs-title-top ul.jm-tabs-title li.active .tab,

.blank .jm-tabs-title-top ul.jm-tabs-title li:focus,
.blank .jm-tabs-title-top ul.jm-tabs-title li:hover,
.blank .jm-tabs-title-top ul.jm-tabs-title li:focus h3,
.blank .jm-tabs-title-top ul.jm-tabs-title li:hover h3,

.off-canvas #off-canvas-nav .jm-mainnav .level0 li.active a,
.off-canvas #off-canvas-nav .jm-mainnav .level0 li a:active,
.off-canvas #off-canvas-nav .jm-mainnav .level0 li a:focus,
.off-canvas #off-canvas-nav .jm-mainnav .level0 li a:hover,

.jm-slidebar .block-title:active,
.jm-slidebar .block-title:focus,
.jm-slidebar .block-title:hover,
ul.products-grid .item-more .item-inner:active,
ul.products-grid .item-more .item-inner:focus,
ul.products-grid .item-more .item-inner:hover,
ol.products-list .item-more .item-inner:active,
ol.products-list .item-more .item-inner:focus,
ol.products-list .item-more .item-inner:hover
{
	background-color: <?php echo $baseconfig["color"] ?>
}

.pages ol li.next a:active,
.pages ol li.next a:focus,
.pages ol li.next a:hover,
.pages ol li.previous a:active,
.pages ol li.previous a:focus,
.pages ol li.previous a:hover,
.quick-setting .form-currency a:active,
.quick-setting .form-currency a:focus,
.quick-setting .form-currency a:hover,
.quick-setting a.currency-item.active,
.static-block3 .right a.button-reading:focus,
.static-block3 .right a.button-reading:hover,
.product-collateral h3:focus,
.product-collateral h3:hover,
.product-collateral h3.active,
.product-view .more-views ul li.active,

.blank .jm-tabs-title-top ul.jm-tabs-title li:focus,
.blank .jm-tabs-title-top ul.jm-tabs-title li:hover,
.blank .jm-tabs-title-top ul.jm-tabs-title li:focus h3,
.blank .jm-tabs-title-top ul.jm-tabs-title li:hover h3 {
	border-color: <?php echo $baseconfig["color"] ?>
}

.jm-megamenu .childcontent-inner,
.inner-toggle,
#jm-search .inner-toggle.active {
	border-top-color: <?php echo $baseconfig["color"] ?>
}

@media (min-width:720px) and (max-width: 985px) {
	#jm-search .btn-toggle.active {
		background-image:url("images/<?php echo $baseconfig["arrowmenutop"]; ?>") !important;
		background-position: center bottom !important;
		background-repeat: no-repeat !important;
	}
}	
@media (max-width:719px) {
	#jm-search .btn-toggle.active {
		background-image:url("images/<?php echo $baseconfig["arrowmenutop"]; ?>") !important;
		background-position: center bottom !important;
		background-repeat: no-repeat !important;
	}
	
	#jm-search .inner-toggle.active {
	border-top-color: <?php echo $baseconfig["color"] ?>
	}
	
	div.item-more h3:focus,
	div.item-more h3:hover {
		background-color: <?php echo $baseconfig["color"] ?>;
	}
	
	#jm-mass-top .page-title a:hover,
	#jm-mass-top .page-title a:focus {
		color: #fff;
		background-color: <?php echo $baseconfig["color"] ?>;
	}
}

@media (max-width:479px) {
	.checkout-progress li.active span.li-checkout {
		background-color: <?php echo $baseconfig["color"] ?> !important;
	}
}