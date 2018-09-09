<?php
/*
*
* Template Name: Portfolio
*
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
	 			<img src="<?php the_field('header_image'); ?>" alt='<?php the_title(); ?>' class="image">
	 		<?php } ?>
	 		
	 	</section>



	    <!-- sekcija content -->    	    


	    <section class='content'> 
	    	<div class='container'>
		 		<div class='row'>
		 			<div class='col-md-12'>	    	
	        			<?php the_content(); ?>
						
						<?php if (get_field('press_repeater')) { ?>
						
							<?php

							// check if the repeater field has rows of data
							if( have_rows('press_repeater') ):

								// loop through the rows of data
								while ( have_rows('press_repeater') ) : the_row(); ?>
	
									<a class="nolightbox" href="<?php the_sub_field('slika'); ?>" alt="<?php the_sub_field('naslov'); ?>" target="_blank">
                                            <p class="press-p">
												<?php the_sub_field('naslov'); ?>
											</p>
									</a>
									

								<?php endwhile;

							else :

								echo 'Nema unetih materijala.';

							endif;

							?>

							<?php } ?>
						
	        		</div>
	        	</div>
	        </div>
	    </section>



	    <section class="works">
	            <div class="container">
	                <div class="row">

	                    <?php

	                    // check if the repeater field has rows of data
	                    if( have_rows('portfolio_repeater') ):

	                        // loop through the rows of data
	                        while ( have_rows('portfolio_repeater') ) : the_row(); ?>

	                        <?php 
	                        

	                        $image = get_sub_field('image');
	                        $size = 'thumbnail';
	                        $thumb = $image['sizes'][ $size ];
	                        $urlimg = $image['url'];

	                        $urllink = get_sub_field('url');
	                        $link = get_sub_field ('link');
	                        $pdf = get_sub_field('pdf');
	                       
	                       
	                        if ($link == 1) {
	                        	$url = $urllink;
	                        } elseif ($link == 2) {
								$url = $pdf;
	                        } else {
	                        	$url = $urlimg;
	                        }
                        

	                        ?>


	                             <div class="col-md-6">

	                                <div class="workholder">
	                              
	                                    <a href="<?php echo $url; ?>">
                                            <img src="<?php echo $thumb; ?>" alt="<?php the_sub_field('title'); ?>">
                                        </a>
                                        <p><?php the_sub_field('title'); ?></p>

	                                </div> <!-- workholder -->


	                            </div> <!-- col6 -->


	                        <?php endwhile;

	                    else :

	                        echo 'Trenutno nema unetog sadrzaja.';

	                    endif;

	                    ?>
 
	                </div> <!-- row -->
	        </div> <!-- container -->

	    </section>



	</main>



<?php endwhile; ?>
<!-- end the loop -->


<?php get_footer(); ?>