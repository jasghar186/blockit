<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php $viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' ); ?>
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/4ea6e3ab0b.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- this is my code for banner above header -->
	<section class="header-banner">
		<div class="header-banner__inner">
			<div class="header-banner__contact-info">
				<div class="header-banner__address">
					<i class="fa fa-home header-banner__contact-icon"></i>
					<span class="header-banner__address-text">
						lahore pakistan
					</span>
				</div>
				<div class="header-banner__email">
					<i class="fa-solid fa-envelope header-banner__contact-icon"></i>
					<span class="header-banner__email-text">
						jasghar186@gmail.com
					</span>
				</div>
		</div>
		<div class="header-banner__social-info">
			<span class="header-banner__facebook header-banner__social-icon">
				<i class="fa fa-facebook"></i>
			</span>
			<span class="header-banner__twitter header-banner__social-icon">
				<i class="fa fa-twitter"></i>
			</span>
			<span class="header-banner__linkedin header-banner__social-icon">
				<i class="fa fa-linkedin"></i>
			</span>
		</div>
		</div>
	</section>




	<?php
hello_elementor_body_open();

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
	if ( did_action( 'elementor/loaded' ) && hello_header_footer_experiment_active() ) {
		get_template_part( 'template-parts/dynamic-header' );
	} else {
		get_template_part( 'template-parts/header' );
	}
}