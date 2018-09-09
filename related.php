<ul class="slides"> <!-- .slides -->


    <?php
    $orig_post = $post;
    global $post;
    $categories = get_the_category($post->ID);
    if ($categories) {

        $category_ids = array();

        foreach ($categories as $individual_category) {
            $category_ids[] = $individual_category->term_id;

            $args = array(
                'category__in' => $category_ids,
                'post__not_in' => array($post->ID),
                'cat' => '-12',
                'posts_per_page' => 12, // Number of related posts that will be shown.
                'caller_get_posts' => 1
            );

            $my_query = new wp_query($args);

            if ($my_query->have_posts()) {


                while ($my_query->have_posts()) {

                    $my_query->the_post();
                    ?>

                    <li> <!-- SLIDE -->
                        <div class="slide-content"> <!-- .slide-content -->

                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </a>
                            <div class="flex-caption"> <!-- .flex-caption -->

                                <div class="title">

                                    <p>
                                        <?php exclude_post_categories("12"); ?>
                                    </p>

                                </div>

                                <div class="sub-title"> <!-- .sub-title -->

                                    <p>
                                        <a href="<?php the_permalink(); ?> ">
                                            <strong><?php the_title(); ?></strong> <br>

                                            <?php the_field('naziv') ?>
                                        </a>
                                    </p>

                                </div> <!-- .sub-title -->

                            </div> <!-- .flex-caption -->
                        </div>

                        <?php
                    }
                }
            }
        }
        $post = $orig_post;
        wp_reset_query();
        ?>


</ul> <!-- .slides -->