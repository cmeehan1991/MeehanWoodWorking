<?php 
add_filter('woocommerce_get_price_html', 'mww_product_price_display');
function mww_product_price_display($price){
	//global $product;
	if(is_product()){
		$price = "<strong>Price/Item: </strong>" . $price;
	}else{
		$price = $price;
	}
	return $price;
}
