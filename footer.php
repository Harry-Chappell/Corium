<!-- Get Home ID for use in Global ACF Fields -->
<?php $home_id = get_option('page_on_front'); ?>

			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap">

					<div class="logos">
						<img src="/wp-content/uploads/2022/08/wienerberger-logo-min.png" alt="">
						<img src="/wp-content/uploads/2022/08/Taylor-Maxwell-min.png" alt="">
					</div>

					<div class="contact">

						<?php if( get_field('facebook_link', $home_id) ): ?>
							<a href="<?php the_field('facebook_link', $home_id); ?>"><i class="fa-brands fa-square-facebook"></i></a>
						<?php endif; ?>
						<?php if( get_field('twitter_link', $home_id) ): ?>
							<a href="<?php the_field('twitter_link', $home_id); ?>"><i class="fa-brands fa-twitter"></i></a>
						<?php endif; ?>
						<?php if( get_field('vimeo_link', $home_id) ): ?>
							<a href="<?php the_field('vimeo_link', $home_id); ?>"><i class="fa-brands fa-square-vimeo"></i></a>
						<?php endif; ?>
						<?php if( get_field('twitter_handle', $home_id) ): ?>
							<a href="https://twitter.com/<?php the_field('twitter_handle', $home_id); ?>">@<?php the_field('twitter_handle', $home_id); ?></a>
						<?php endif; ?>
						<?php if( get_field('phone', $home_id) ): ?>
							<a href="tel:<?php echo str_replace(' ', '', get_field('phone', $home_id)); ?>"><?php echo str_replace(' ', '&nbsp;', get_field('phone', $home_id)); ?></a>
						<?php endif; ?>
						<?php if( get_field('email', $home_id) ): ?>
							<a href="mailto:<?php the_field('email', $home_id); ?>"><?php the_field('email', $home_id); ?></a>
						<?php endif; ?>

					</div>
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
