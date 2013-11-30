<?php
/**
 * Template Name: aboutpage.php
 * Master Template.
 *
 * @package blm_basic
 */

/*This Page of code is for Customizing the About Page*/

get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section id="content">

	<!-- <div id="priscilla">
		<h1><?php the_title(); ?></h1>
	</div> -->

	<div id="portrait">
		<img title="" src="http://i1198.photobucket.com/albums/aa452/priscillachandesign/IMG_7337.jpg" alt="Priscilla C."
         height="400" width="325" >
	</div>

	<div id="bio">
		<p>Graphic & Web Designer. Vancouverite. Dreamer. 
		<br>
		<br>
		In a world of countless spoken languages, hand signals and lost translation, barriers in communication arise. I believe that every individual has a story and what better way is there than to tell it through design.
		<br>
		<br>
		My love for capturing moments drove me to learn Photoshop. I am also motivated to build websites that have functionality and esthetic using CSS3 and HTML5.
		<br>
		<br>
		I’m passionate about pursuing my dreams and is taking baby steps to reach them. In the meantime, you’ll find me collaborating with City of Vancouver, local print shops and various projects. 

		</p>
	</div>

	<div id ="aboutwrapper">
        	<?php the_content(); ?>
	</div> 


  	</section><!-- #content --> 

    <?php endwhile; endif; ?>
  	
  	</div>

</div>


		
	
	
	<?php get_template_part( 'inc/nav' ); ?>
	
	<!-- </section> --><!-- #content -->

<?php get_sidebar(); ?>

</div><!-- #main -->

<?php get_footer(); ?>