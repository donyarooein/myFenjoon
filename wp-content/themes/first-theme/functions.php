<?php 
function site_post_meta() {
$args=array(
'post_type' => 'sites',
'post_status' => 'publish');
$post_query = new WP_Query($args);
while ( $post_query->have_posts() ): 
		$post_query->the_post(); 
		$name=get_the_title();
		$id= get_the_ID();
		$content=get_the_content();
		$post_id[]=$id;
		$post_name[]=$name;	
		$post_content[]=$content;			 
		$key='price';
		switch ($name):
		case 'shop':
			$value=1200000;
			 add_post_meta($id,$key,$value);
		break;
		case 'official':
			$value=1500000;
			add_post_meta($id,$key,$value);
		break;
		
		case 'personal':
			$value=1000000;
			add_post_meta($id,$key,$value);
		break;
	endswitch;
	//$temp=get_metadata('post',$id,'price',false);
	//$meta[]=$temp[1];
endwhile;	
}

function get_site_type($id) {
	$terms=get_the_terms($id ,'post_tag');
	foreach($terms as $term):
		return $term->name;
	endforeach;
}

if (function_exists('add_theme_support')) {
add_theme_support( 'post-thumbnails' );
}
?>

 