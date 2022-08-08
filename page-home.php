<?php
/*
 Template Name: Home Page
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

				<section class="hero" style="background-image: url(<?php the_field('hero_image'); ?>);">
					<h2><?php the_field('hero_title'); ?></h2>
					<h3><?php the_field('hero_subtitle'); ?></h3>
				</section>

				<!-- If I was using ACF Pro, then the following would be built with repeater fields, and I'd bring them in here using a loop, to prevent the copied sections. I'd copy and edit the code from ACF's documentation: https://www.advancedcustomfields.com/resources/repeater/ -->

				<section class="section-2 
				text-colour-<?php the_field('section_2_text_colour'); ?> 
				text-align-<?php the_field('section_2_text_align'); ?>
				<?php if (get_field('section_2_image_position') == "left") { echo "image-left"; };?>
				<?php if (get_field('section_2_image_position') == "right") { echo "image-right"; };?>"
				<?php if (get_field('section_2_background') == 'image') { 
					echo 'style="background-image: url(' . get_field('section_2_background_image') . ');"';
					} elseif (get_field('section_2_background') == 'colour') {
					echo 'style="background-color: ' . get_field('section_2_background_colour') . ';"';
					}; ?>
				>
					<?php if (get_field('section_2_image_position') != "none") { ?>
					<div>
					<?php }; ?>

					<?php if( get_field('section_2_title') ): ?><h3><?php the_field('section_2_title'); ?></h3><?php endif; ?>
						<?php the_field('section_2_body'); ?>
					
					<?php if (get_field('section_2_image_position') != "none") { ?>
					</div><img src="<?php the_field('section_2_image'); ?>" alt="">
					<?php }; ?>

				</section>

				<section class="section-3 
				text-colour-<?php the_field('section_3_text_colour'); ?> 
				text-align-<?php the_field('section_3_text_align'); ?>
				<?php if (get_field('section_3_image_position') == "left") { echo "image-left"; };?>
				<?php if (get_field('section_3_image_position') == "right") { echo "image-right"; };?>"
				<?php if (get_field('section_3_background') == 'image') { 
					echo 'style="background-image: url(' . get_field('section_3_background_image') . ');"';
					} elseif (get_field('section_3_background') == 'colour') {
					echo 'style="background-color: ' . get_field('section_3_background_colour') . ';"';
					}; ?>
				>
					<?php if (get_field('section_3_image_position') != "none") { ?>
					<div>
					<?php }; ?>

					<?php if( get_field('section_3_title') ): ?><h3><?php the_field('section_3_title'); ?></h3><?php endif; ?>
						<?php the_field('section_3_body'); ?>
					
					<?php if (get_field('section_3_image_position') != "none") { ?>
					</div><img src="<?php the_field('section_3_image'); ?>" alt="">
					<?php }; ?>

				</section><section class="section-4 
				text-colour-<?php the_field('section_4_text_colour'); ?> 
				text-align-<?php the_field('section_4_text_align'); ?>
				<?php if (get_field('section_4_image_position') == "left") { echo "image-left"; };?>
				<?php if (get_field('section_4_image_position') == "right") { echo "image-right"; };?>"
				<?php if (get_field('section_4_background') == 'image') { 
					echo 'style="background-image: url(' . get_field('section_4_background_image') . ');"';
					} elseif (get_field('section_4_background') == 'colour') {
					echo 'style="background-color: ' . get_field('section_4_background_colour') . ';"';
					}; ?>
				>
					<?php if (get_field('section_4_image_position') != "none") { ?>
					<div>
					<?php }; ?>

						<?php if( get_field('section_4_title') ): ?><h3><?php the_field('section_4_title'); ?></h3><?php endif; ?>
						<?php the_field('section_4_body'); ?>
					
					<?php if (get_field('section_4_image_position') != "none") { ?>
					</div><img src="<?php the_field('section_4_image'); ?>" alt="">
					<?php }; ?>

				</section>
				
			</main>

		</div>

	</div>


<?php get_footer(); ?>
