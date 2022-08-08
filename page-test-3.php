<?php
/*
 Template Name: Test 3
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap">

				<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<h1><?php echo get_the_title();?></h1>
				<?php the_excerpt(); ?>

				<?php if( get_field('text_field_1') ): ?>
					<p><?php the_field('text_field_1'); ?></p>
					<?php endif; ?>
				<?php if( get_field('text_field_2') ): ?>
					<p><?php the_field('text_field_2'); ?></p>
				<?php endif; ?>

				<?php if ( has_post_thumbnail() ) { 
						the_post_thumbnail( 'medium' );
					} ?>

				</main>

		</div>

	</div>


<?php get_footer(); ?>
