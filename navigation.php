<?php
/**
 * The navigation for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WP_Ogitive
 */
?>

<?php

$defaults = array(
	'theme_location'  => 'primary',
	'menu'            => '',
	'container'       => 'nav',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );

?>