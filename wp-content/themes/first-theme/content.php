<?php
/* Markup for normal posts */
?>
<!-- Start Middle-->
<section id="container">
    <div class="pageWidth">
    <article class="pageControl">
    <div>
    	<?php 
		$custom_post = get_post_types( array ( '_builtin' => FALSE ),'names' );

if ( isset ( $custom_post ) ):
   foreach ($custom_post as $post):
   
		/** Loop through each term, outputing it's description */
		//query_posts( 'post_type='.$post); 
		$args=array(
		'post_type' => $post,
		'post_status' => 'publish');
		$post_query = new WP_Query($args);
		while ( $post_query->have_posts() ): 
				$post_query->the_post(); 
				$post_id[]=$id;			 
				$key='price';
				$name=get_site_type($id);
			    switch ($name):
				case 'shop':?>
                    <br /><input  type="checkbox" name="shop" value="shop" id="0" /><?php the_title();?></label><br />
                    <?php $id= get_the_ID();
					 the_content_rss('', TRUE, '', 55);
					if ( has_post_thumbnail() ) :
						the_post_thumbnail();
				    else : 
						echo '</br></br><img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/shop1.jpg" height="100" width="100" /></br>';
					endif;
				break;
				case 'official':?>
					<br /><input  type="checkbox" name="official" value="official" id="1" /><?php the_title();?></label><br />
                    <?php $id= get_the_ID();
					the_content_rss('', TRUE, '', 54);
					if ( has_post_thumbnail() ) :
						the_post_thumbnail();
				    else : 
						echo '</br></br><img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/official1.jpg" height="100" width="100"/></br>';
					endif; 
				break;
				
				case 'personal':?>
              		<br /><input  type="checkbox" name="personal" value="personal" id="2" /><?php the_title();?></label><br />
                    <?php $id= get_the_ID(); 
					the_content_rss('', TRUE, '', 82);
					if ( has_post_thumbnail() ) :
						the_post_thumbnail();
				    else : 
						echo '</br></br><img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/personal1.jpg" height="100" width="100"/></br>';
					endif;
				break;
			endswitch;
		endwhile;	
	  endforeach; 
   endif;
		?>
	</div>
	</article>
	</div>
</section>