<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package finals_theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'finals_theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'finals_theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'finals_theme' ), 'finals_theme', '<a href="http://underscores.me/">Basil</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<footer class="footer-section" id="footer-section">
		<div class="site-wrapper">
			<div class="footer-holder" id="footer-holder">
				<div class="first-footer" id="first-footer">
					<div class="first-half" id="first-half">
						<h2>Keep in the loop. We won't spam you</h2>
						<span>
							<p>Sign up to our mailing list to find out  more information and keep up to date about our activities</p>
							<form class="contact-form" action="" method="post">
								<textarea class="message-input" name="" id="message-input" cols="20" placeholder="email" rows="2"></textarea>
								<button>Subscribe</button>
							</form>
						</span>
					</div>
					<div class="second-half" id="second-half">
						<div class="contact-details" id="contact-details">
							<h2>Contact Us</h2>
							<span>
								<h6>e-mail</h6>
								<p><?php echo get_theme_mod('footer_contact_email'); ?></p>
							</span>
							<span>
								<h6>address</h6>
								<p><?php echo get_theme_mod('footer_address'); ?></p>
							</span>
						</div>
						<div class="socials" id="socials">
							<h2>Find Out More</h2>
							<span>
								<a href="www.facebook.com"><img src="<?php echo get_template_directory_uri(); ?> /assets/icons/facebook.png"></a>
								<a href="www.instagram.com"><img src="<?php echo get_template_directory_uri(); ?> /assets/icons/instagram.png"></a>
							</span>
						</div>
					</div>
				</div>
				<div class="second-footer" id="second-footer">
					
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
