<?php
/*
*
* Template Name: Page Parent
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

	                        if ($link == 1) {
	                        	$url = $urllink;
	                        } else {
	                        	$url = $urlimg;
	                        }


	                        ?>


	                             <div class="col-md-6">

	                                <div class="workholder">
                                        <a href="<?php echo $url; ?>">
                                            <h2><?php the_sub_field('title'); ?></h2>
                                        </a>
	                              
	                                    <a href="<?php echo $url; ?>">
                                            <img src="<?php echo $thumb; ?>" alt='<?php the_sub_field('title'); ?>'>
                                        </a>

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