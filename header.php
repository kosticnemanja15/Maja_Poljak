<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WP_Ogitive
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>
            <?php wp_title(''); ?>
            <?php
            if (wp_title('', false)) {
                echo ' | ';
            }
            ?>
            <?php bloginfo('name'); ?> 
        </title>

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>

    </head>


    <body <?php body_class(); ?>>

        <?php if ( is_home() ) { ?>        

        <?php } else { ?>

<header>

   
        <div class="container">
              <div class="col-md-12">
                
                    <h1>MAJA POLJAK</h1>

            </div>
        </div>



        <div class="container">
            <div class="col-md-12">

                <div class="nav-holder">
                             

                    <?php  get_template_part('navigation'); ?>
                    <div id="menu-button"><i class="fa fa-bars" aria-hidden="true"></i></div>

                    <!-- <div class="menu-nav"> 

                        <div id="main">
                            <span class="hambmenu" onclick="openNav()">&#9776; </span>
                        </div>

                       <div class="topnav nav collapse navbar-collapse" id="myTopnav">

                            
                            <ul>

                                <li><a href="#home" class="link">HOME</a></li>

                                <li><a href="#">ARTWORKS </a>
                                    <ul class="dropdown">
                                       <li><a href="artworks.html" style="margin-top: 0;">DRAWINGS</a></li>
                                       <li><a href="#" style="margin-top: 0;">PAINTINGS</a></li>
                                       <li><a href="#" style="margin-top: 0;">GRAPHICS</a></li>
                                       <li><a href="#" style="margin-top: 0;">MIXED MEDIA</a></li>
                                       <li><a href="#" style="margin-top: 0;">EARLY WORKS</a></li>
                                    </ul>
                                </li>

                                   <li><a href="exhibitions.html" class="link">EXHIBITIONS </a></li>
                                   <li><a href="#" class="link">STATEMENT </a></li>
                                   <li><a href="#" class="link">BIBLIOGRAPHY </a>
                                       <ul class="dropdown">                                     
                                           <li><a href="#" style="margin-top: 0;">CATALOGUES</a></li>
                                           <li><a href="#" style="margin-top: 0;">PRESS RELEASES</a></li>
                                           <li><a href="#" style="margin-top: 0;">BOOKS</a></li>
                                       </ul>
                                   </li>
                                   <li><a href="#" class="link">ABOUT </a></li>
                                   <li><a href="#" class="link">CONTACTS </a></li>
                                   <li><a href="#" class="link">GALLERY </a></li>
                                   <li><a href="#" class="link">NEWS </a></li>

                            </ul>  
                        <!-- </div> 
                    </div>  <!-- menu-nav --> 

                </div>



            </div> <!-- col 12 -->
        </div> <!-- container -->





</header>

<?php } ?>