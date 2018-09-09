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

    <section class="back-img">
        <div class="back-img-holder">
            <div class="container">
                <div class="row">
                  <div class="col-md-12">   
                    <div class="back-img-h">
                       <h2><?php if (get_field('btitle')) { the_field ('btitle'); } ?> <span><?php the_title(); ?></span></h2>
                    </div>
                  </div>        
                </div>
            </div>
            <div class="img-holder">
                <img src="<?php the_field('header_image'); ?>" alt='<?php the_title(); ?>'>
            </div>
        </div>
    </section>

    <section> 
        <?php the_content(); ?>
    </section>

    <section class="drawings-type">
        <div class="drawings-type-holder">
            <div class="container">
                <div class="row">

                    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('portfolio_repeater') ):

                        // loop through the rows of data
                        while ( have_rows('portfolio_repeater') ) : the_row(); ?>

                             <div class="col-md-6">
                                <div class="drawings-type-1">
                                    <div class="drawings-type-1-a">
                                        <a href="<?php the_field('image'); ?>">
                                            <h2><?php the_field('title'); ?></h2>
                                        </a>
                                    </div>
                                    <div class="drawings-type-1-img">
                                        <a href="<?php the_field('image'); ?>">
                                            <img src="<?php the_field('image'); ?>" alt='<?php the_field('title'); ?>'>
                                        </a>
                                    </div>
                                </div>
                            </div>


                        <?php endwhile;

                    else :

                        echo 'Trenutno nema unetog sadrzaja.';

                    endif;

                    ?>

                   


                </div>
            </div>
        </div>
    </section>


<?php endwhile; ?>
<!-- end the loop -->

<?php get_footer(); ?>