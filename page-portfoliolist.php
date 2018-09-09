<?php
/*
*
* Template Name: Portfolio List
*
*/

get_header(); ?>


<!-- start the loop -->
<?php while ( have_posts() ) : the_post(); ?>

<section class="back-img">
	<div class="back-img-holder">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">	
				<div class="back-img-h">
					<h1><?php the_title(); ?></h1><h1 class='red'><?php the_field('subtitle'); ?></h1>
				</div>
		      </div>		
			</div>
		</div>
		<div class="img-holder">
			<?php the_field('headerimg'); ?>
		</div>
	</div>
</section>

<section class="drawings-type">
	<div class="drawings-type-holder">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="drawings-type-1">
						<div class="drawings-type-1-a">
							<a href="#"><h2>DRAWINGS I</h2></a>
						</div>
						<div class="drawings-type-1-img">
							<a href=""><img src="img/drawingstype1.jpg"></a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="drawings-type-2">
						<div class="drawings-type-2-a">
							<a href="#"><h2>DRAWINGS II</h2></a>
						</div>
						<div class="drawings-type-2-img">
							<a href=""><img src="img/drawingstype2.jpg"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endwhile; ?>
<!-- end the loop -->

<?php get_footer(); ?>