			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<div class="logos">
						<img src="/wp-content/uploads/2022/08/wienerberger-logo-min.png" alt="">
						<img src="/wp-content/uploads/2022/08/Taylor-Maxwell-min.png" alt="">
					</div>

					<div class="contact">

						<?php if( get_field('facebook_link', $homeID) ): ?>
							<a href="<?php the_field('facebook_link', $homeID); ?>"><i class="fa-brands fa-square-facebook"></i></a>
						<?php endif; ?>
						<?php if( get_field('twitter_link', $homeID) ): ?>
							<a href="<?php the_field('twitter_link', $homeID); ?>"><i class="fa-brands fa-twitter"></i></a>
						<?php endif; ?>
						<?php if( get_field('vimeo_link', $homeID) ): ?>
							<a href="<?php the_field('vimeo_link', $homeID); ?>"><i class="fa-brands fa-square-vimeo"></i></a>
						<?php endif; ?>
						<?php if( get_field('twitter_handle', $homeID) ): ?>
							<a href="https://twitter.com/<?php the_field('twitter_handle', $homeID); ?>">@<?php the_field('twitter_handle', $homeID); ?></a>
						<?php endif; ?>
						<?php if( get_field('phone', $homeID) ): ?>
							<a href="tel:<?php echo str_replace(' ', '', get_field('phone', $homeID)); ?>"><?php the_field('phone', $homeID); ?></a>
						<?php endif; ?>
						<?php if( get_field('email', $homeID) ): ?>
							<a href="mailto:<?php the_field('email', $homeID); ?>"><?php the_field('email', $homeID); ?></a>
						<?php endif; ?>

					</div>
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
