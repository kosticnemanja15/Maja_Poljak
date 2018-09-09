<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Ogitive
 */

get_header(); ?>





<main>

		
		<!-- sekcija header = naslov + slika -->

		
	 	<section class='toppage'>

		 		<div class='container'>
			 		<div class='row'>
			 			<div class='col-md-12'>
			 				 <h1>
			 				 	 News
			 				 </h1>
			 			</div>
			 		</div>
		 		</div>
		 		
        
	 		<?php if (get_field('headnews','options')) { ?>
	 			<img src="<?php the_field('headnews','options'); ?>" alt='<?php the_title(); ?>' class="image">
	 		<?php } ?>
	 		
	 	</section>


	    <section class="works-news">
            
           <div class="container">
					
							<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
					
					
            	  <div class="news">	
            		<div class="row">
            			<div class="col-md-6">
            				<a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                            </a>
            			</div>
            			<div class="col-md-6">		
									<a href="<?php the_permalink(); ?>">
										<h2><?php the_title(); ?></h2>
									</a>
								<?php the_content(); ?>	            			
            			</div>
            		</div>
            	  </div>	
					
			<?php endwhile; endif; ?>
			   
			   <div class='paginacija'>
				   <?php wp_pagenavi(); ?>
			   </div>
			   
					
           </div>
         

	    </section>





	</main>	

			
			

<?php get_footer(); ?>
