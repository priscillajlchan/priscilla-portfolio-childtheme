<?php
/**
 * Master Template. This template will be used to display your blog posts and pages if page.php does not exist.
 *
 * @package blm_basic
 */

get_header(); ?>

<div id="main">


	<div id="homewrapper">

	<div id="socmedicon">
		
		<a href="https://twitter.com/priscillajlchan"><img class="twitter" src="http://localhost:8888/dev/portfolio/wp-content/themes/BasicWPTheme-child/assets/twitter.png" alt=""></a>

		<a href="http://www.linkedin.com/in/priscillajlchan"><img class="linkedin" src="http://localhost:8888/dev/portfolio/wp-content/themes/BasicWPTheme-child/assets/linkedin.png" alt=""></a>

		<a href="https://google.com/+PriscillaChan225"><img class="google" src="http://localhost:8888/dev/portfolio/wp-content/themes/BasicWPTheme-child/assets/google.png" alt=""></a>

	</div>
	

    <div id="welcomequote">
		"Designers are meant to be loved;
		<br> not understood"
	</div>

	

	
	<!-- <section id="content"> -->
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


       

	</div>




		
		<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			
			<?php the_date('F j, \'y', '<h2>Posted on:','</h2>', true); ?>

			<p class="post-date"><?php // echo get_the_date(); ?></p>

			<?php the_content( __( 'Read more', 'blm_basic' ) ); ?>

			<div class="post-line"></div>
				
			<?php get_template_part( 'inc/meta','new' ); ?>

			<?php 

			// $meta_quote = get_post_meta($post->ID, 'quotation', true);
			// if ($meta_quote) { 
			// 	echo "<p>Quote: <strong>".$meta_quote."</strong></p>";
			// }else{
			// 	echo "you forgot to insert a quote";
			// }
			?>

			<div class="post-line"></div>

		</article> -->
		
	<?php endwhile; endif; ?>
	
	<?php get_template_part( 'inc/nav' ); ?>
	
	<!-- </section> --><!-- #content -->

<?php get_sidebar(); ?>

</div><!-- #main -->

<?php get_footer(); ?>