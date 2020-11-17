<?php /**template name: Archive */ ?>
<?php get_header(); ?>


<?php 
$args = array(
			'post_type' => 'post',
			'posts_per_page' => -1
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post();?>



<!-- do whatever you want with each post-->



<?php endwhile;
		} else {
			echo __( 'No post found' );
		}
		wp_reset_postdata();
	?>


<?php get_footer(); ?>