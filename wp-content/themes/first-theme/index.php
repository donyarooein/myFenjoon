<?php
/* The default template */

get_header();
if (have_posts()) {
	while (have_posts()) {
		the_post();
		get_template_part('content', get_post_format());
	}
} else {
	get_template_part('content', 'none');
}

get_sidebar();
get_footer();
?>