<?php
/** 
 * 
 *
 * @package blm_basic
 */

get_header(); ?>

<div id="main">

	<section id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
		<!-- 	<div id="portfoliotitle">
			<h1><?php the_title(); ?></h1>
			</div> -->
			
			<div id ="gallery">
        	<?php the_content(); ?>
			</div> 

			
		</article>
		
		<?php endwhile; endif; ?>
		
		</section><!-- #content --> 



</div><!-- #main -->

<?php get_footer(); ?>
