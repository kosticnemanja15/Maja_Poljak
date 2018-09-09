<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WP_Ogitive
 */

get_header(); ?>


<!-- start the loop -->
<?php while ( have_posts() ) : the_post(); ?>


	<main>


		<!-- sekcija header = naslov + slika -->

		
	 	<section class='toppage'>

		 		<div class='container'>
			 		<div class='row'>
			 			<div class='col-md-12'>
			 				 <h1>
			 				 	 <span>
			 				 	 	<?php if (get_field('btitle')) { 
			 				 	 	the_field ('btitle'); } ?>
			 				 	 </span>
			 				 	 <?php the_title(); ?>
			 				 </h1>
			 			</div>
			 		</div>
		 		</div>
		 		

	 		<?php if (get_field('header_image')) { ?>
	 			<img src="<?php the_field('header_image'); ?>" alt='<?php the_title(); ?>'>
	 		<?php } ?>
	 		
	 	</section>



	    <!-- sekcija content -->    	    


	    <section class='content'> 
	    	<div class='container'>
		 		<div class='row'>
		 			<div class='col-md-12'>	    	
	        			<?php the_content(); ?>
	        		</div>
	        	</div>
	        </div>
	    </section>


	</main>



<?php endwhile; ?>
<!-- end the loop -->


<?php get_footer(); ?>