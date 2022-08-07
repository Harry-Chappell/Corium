<?php
/*
 Template Name: Bing Bang
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

					<p>Initial test was just a simple ifelse statement that took 10 minutes. The more advanced version is below and took about a further 20 minutes. If you edit this page you can input attributes into the ACF fields, and the following list of numbers will change accordingly.</p>
					<br>
					
					<?php 

						// For loop to count to 100
						// for ($i = 1; $i <= 100; $i++) {
						// 	echo $i . "<br>";
						// }

						// Same thing but as an elseif functino to check for mutiples of 3 and 5.
						// for ($i = 1; $i <= 100; $i++) {
						// 	if ($i % 3 == 0) {
						// 		echo "Bing";
						// 	} elseif ($i % 5 == 0) {
						// 		echo "Bang";
						// 	} else {
						// 		echo $i;
						// 	}
							
						// 	echo "<br>";
						// }

						// More advanced version with variables	
						$firstNo = get_field('first_no');
						$firstText = get_field('first_text');
						$secondNo = get_field('second_no');
						$secondText = get_field('second_text');
						$min = get_field('min');
						$max = get_field('max');
						
						echo '<div class="test-result-cntr">';
						for ($i = 1; $i <= 100; $i++) {
							echo "<p>";
							if ($i % $firstNo == 0 & $i >= $min & $i <= $max) {
								echo $firstText;
							} elseif ($i % $secondNo == 0 & $i >= $min & $i <= $max) {
								echo $secondText;
							} else {
								echo $i;
							}
							
							echo "</p>";
						}
						echo '</div>';
					?>

				</main>

		</div>

	</div>


<?php get_footer(); ?>
