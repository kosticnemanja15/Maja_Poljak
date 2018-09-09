<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Ogitive
 */

get_header(); ?>

<div class="intropage">

    <div class="container">
      <div class="col-md-12">  

        <div class="intro">
            <img src="<?php echo get_template_directory_uri(); ?>/img/majaenter.png" alt="Intro image">

        </div>
      </div>    
    </div>


  
    <div class="container">
        <div class="col-md-12">
            
                <h1>MAJA POLJAK</h1>
            
        </div>
    </div>


    <div class="container">
        <div class="col-md-12">            
                <a class='enter' href='/home'>
                        E&emsp;N&emsp;T&emsp;E&emsp;R
                </a>
        </div>
    </div>



</div>


<?php get_footer(); ?>
