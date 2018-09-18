<?php
// Add custom Theme Functions here
function rurls_convert_base_url() {
	return site_url();
}
add_shortcode('base_url', 'rurls_convert_base_url');

add_filter( 'woocommerce_get_price_html', function( $price ) {
	if ( ! is_user_logged_in() ) {
		return '';
	}
	return $price; 
} );
add_filter( 'woocommerce_cart_item_price', '__return_false' );
add_filter( 'woocommerce_cart_item_subtotal', '__return_false' );


function remove_loop_button(){
   remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
   remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
}
add_action('init','remove_loop_button');

function inox_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar News', 'inox' ),
		'id'            => 'sidebar-news',
		'description'   => __( '', 'inox' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title"><h2><span>',
		'after_title'   => '</span></h2></div>',
	));	
	register_sidebar( array(
		'name'          => __( 'Language', 'inox' ),
		'id'            => 'language',
		'description'   => __( '', 'inox' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title"><h2><span>',
		'after_title'   => '</span></h2></div>',
	));	
}
add_action( 'widgets_init', 'inox_widgets_init' );
add_action('wp_head','update_count_view');
function update_count_view(){
    if(is_single() or is_page()){
        global $post;
        $view=(get_post_meta($post->ID,'views_meta',true)<>"")?get_post_meta($post->ID,'views_meta',true):0;
        update_post_meta($post->ID,'views_meta',($view+1));
    }
}

add_filter( 'woocommerce_product_tabs', 'wpb_remove_product_tabs', 98 );
function wpb_remove_product_tabs( $tabs ) { 
    unset( $tabs['additional_information'] );  // Remove the additional information tab
	unset( $tabs['reviews'] );                 // Remove the reviews tab
    unset( $tabs['test_tab'] );                // Remove the discount tab
    return $tabs;
}
