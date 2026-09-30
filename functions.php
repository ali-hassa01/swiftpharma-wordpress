 <?php // functions file start
  add_theme_support( 'woocommerce' ); 
   function medshop_woo_custom_css() { wp_enqueue_style( 'medshop-woo-custom', get_template_directory_uri() . '/assets/css/woocommerce-custom.css', array(), '1.0' ); } add_action( 'wp_enqueue_scripts', 'medshop_woo_custom_css', 100 );