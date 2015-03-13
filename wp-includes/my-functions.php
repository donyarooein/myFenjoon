<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {  
         
$labels = array(
				'name' => __( 'انواع سایت' ),
				'singular_name' => __( 'sites' ),
				'all_items'=> __( 'همه ی سایت ها'),
				'has_archive' => true , 				
				'add_new' =>__('افزودن سایت'),
				'new_item_name'=> __( 'نام سایت جدید'));
$args = array(
				'labels'=> $labels,
				'hierarchical'=> true,
				'public'=> true,
				'show_ui'=> true, 
				'show_admin_column'=> true, 
				'taxonomies'=>array('category','post_tag'),
				'show_in_nav_menus'=> true,  
				'show_tagcloud'=> true,
				'show_in_menu' =>true,	
				'menu_position' => 5); 
register_post_type( 'sites',$args);
}
?>
