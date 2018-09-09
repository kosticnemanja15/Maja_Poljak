<?php
/**
 * The template for displaying all single posts.
 *
 * @package WP_Ogitive
 */
get_header();
?>

<!-- start the loop -->
<?php while (have_posts()) : the_post(); ?>

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
		 		

	 		
	 		
	 	</section>



	    <!-- sekcija content -->    	    


	    <section class='content'> 
	    	<div class='container'>
		 		<div class='row'>
		 			<div class='col-md-12'>	  
						
						<?php if ( get_the_post_thumbnail() ) { ?>
							<?php the_post_thumbnail(); ?>
						<?php } ?>
						
	        			<?php the_content(); ?>
	        		</div>
	        	</div>
	        </div>
	    </section>


	</main>

<?php endwhile; ?>
<!-- end the loop -->

<?php get_footer(); ?>